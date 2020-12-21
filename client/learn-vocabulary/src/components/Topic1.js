import React, { Component } from "react";
import { Link } from "react-router-dom";
import "../css/Topic1.css";

class Topic1 extends Component {
  constructor() {
    super();
    this.state = {
      topics: [],
    };
    this.getData();
    
  }

  getData() {
    fetch("http://127.0.0.1:8000/api/topics").then((response) => {
      response.json().then((data) => {
        console.log(data);
        this.updateUI(data);
      });
    });
  }

  updateUI(data) {
    this.setState({
      topics: data,
    });
  }

  render() {
    return (
        <div className="vertical-menu"> 
          <a href="#" className="active">
            <b>Topics</b>
          </a>
          {this.state.topics.map((item, index) => (
            <Link to={"/topics/" + item.id} >{item.title}</Link>
          ))}
        </div>
    );
  }
}

export default Topic1;
