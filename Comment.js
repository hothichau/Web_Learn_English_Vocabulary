import React, { Component } from "react";
import "../css/Comment.css";

class Comment extends Component {
  constructor(props) {
    super(props);
    this.state = {
      comments: [],
    };
    this.comment = this.comment.bind(this);
    this.deleteComment = this.deleteComment.bind(this);
    this.getData = this.getData.bind(this);
    this.updateUI = this.updateUI.bind(this);
    this.getData(this.props.topic_id);
    
  }
  getData(id) {
    fetch("http://127.0.0.1:8000/api/comments/" + id).then((response) => {
      response.json().then((data) => {
        this.updateUI(data);
      });
    });
  }
  updateUI(data) {
    this.setState({
      comments: data,
    });
  }
  comment(event) {
    event.preventDefault();
    let user_id = localStorage.getItem("user_id");
    if (user_id) {
      let topic_id = this.props.topic_id;
      let username = event.target["username"].value;
      let content = event.target["content"].value;
      
      let comment = {
        user_id: user_id,
        topic_id: topic_id,
        username: username,
        content: content,
      };
      let commentInJson = JSON.stringify(comment);
      fetch("http://127.0.0.1:8000/api/user/comment", {
        method: "post",
        headers: {
          "Content-Type": "application/json",
        },
        body: commentInJson,
      }).then((response) => {
        this.getData(this.props.topic_id);
        alert("Commented");
      });
      event.target["username"].value = "";
      event.target["content"].value = "";
    } else {
      alert("You must login to comment!");
    }
  }

   deleteComment(item) {
     let user_id = localStorage.getItem("user_id");
     let comment_id = item.id;

     if (user_id) {
      let comment = {
        user_id: user_id,
        comment_id: comment_id
      };
      let commentInJson = JSON.stringify(comment);
        fetch("http://127.0.0.1:8000/api/comment/delete", {
        method: "delete",
        headers: {
          "Content-Type": "application/json",
        },
        body: commentInJson,
      }).then((response) => {
        this.getData(this.props.topic_id);
        alert("Delete Commented");
      });
   } else {
     alert("You must login to delete comment!");
  }
  }

  render() {
    return (
      <div>
            <div className="show-comments">
                <h3>Các bình luận ({this.state.comments.length})</h3>
                {this.state.comments.map((item, index) => (
                    <div className="comment-item">
                        <h4>Biệt danh: {item.username}</h4>
                        <p>
                            <span>Nội dung: {item.content}</span>
                        </p>
                        <button onClick={this.deleteComment.bind(this, item)}>Xóa</button>
                    </div>
                ))}
            </div>
            <center>
            <div class="comment">
            <center>
                <form onSubmit={this.comment}  >
                <h1>Bình luận</h1>
                    <label for="username">Biệt danh</label>
                    <br></br>
                    <input type="text" id="username" name="username" placeholder="Your name.."/>
                    <br></br>
                    <label for="content">Nội dung</label>
                    <br></br>
                    <textarea id="content" name="content" placeholder="Write something.."></textarea>

                    <center><input  type="submit" value="Đăng"/></center>
                </form>
                </center>
            </div>
            </center>
        <div/>
        </div>
    );
  }
}
export default Comment;
