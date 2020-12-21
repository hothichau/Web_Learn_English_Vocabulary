import React, { Component } from "react";
import "../css/Body.css";
import {
  Link
} from "react-router-dom";
import TopicItem from "./TopicItem";
class TopicLimit extends Component {
  constructor() {
    super();
    this.state = {
      topics: []
    };
    this.getData();
  }

  getData() {
    fetch("http://127.0.0.1:8000/api/topics/new").then((response) => {
      response.json().then((data) => {
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
        <div className="TopicLimit">
            {this.state.topics.map((item, index) => (
              <TopicItem key={index} item={item} />
            ))}
      </div>
    );
  }
}
export default TopicLimit;
