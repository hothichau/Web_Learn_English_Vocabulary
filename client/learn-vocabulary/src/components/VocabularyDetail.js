import React, { Component } from "react";
import { withRouter } from "react-router";
import "../css/VocabularyDetail.css";
import { Link } from "react-router-dom";
import sound from "../images/sound.png";

class VocabularyDetail extends Component {
  constructor(props) {
    super(props);
    this.state = {
      vocabularyDetail: [],
    };
    var id = props.match.params.id;
    this.getDetail(id);
  }

  getDetail(id) {
    fetch("http://127.0.0.1:8000/api/vocabularies/" + id).then((response) => {
      response.json().then((data) => {
        console.log(data);
        this.updateUI(data);
      });
    });
    
  }

  updateUI(data) {
    this.setState({
        vocabularyDetail: data,
    });
  }
  
  render() {
    return (
      <div className="VocabularyIDetail">
        <div className="content">
        <div className="header">
          <p>Các từ vựng cho chủ đề: </p>
        </div>
        {this.state.vocabularyDetail.map((item, index) => (
          <div className="sub-content">
            <div class="menu">
              <center>
              <img
                  src={"http://127.0.0.1:8000/storage/" + item.image}
                  alt=""
                  width={100}
                  height={100}
                />
                </center>
            </div>
            <div class="main">
              <p><span className="word">{item.word}</span> ({item.verb_form})<br></br>
                <div className="pronunciation">
                  <img src={sound}  width={40} height={40}></img>
                  <span>{item.pronunciation}</span>
                </div>
                <br></br>
                <span><span className="meaning">Nghĩa tiếng Việt:</span> {item.meaning}</span>
              </p>
            </div>
            </div>
        
      ))}
      </div>
      </div>
      
    );
  }
}

export default withRouter(VocabularyDetail);
