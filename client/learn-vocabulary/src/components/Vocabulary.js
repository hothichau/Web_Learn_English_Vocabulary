import React, { Component } from "react";
import "../css/Body.css";
import VocabularyItem from "./VocabularyItem";
import Topic1 from "./Topic1";

class Vocabulary extends Component {
  constructor() {
    super();
    this.state = {
      vocabularies: [],
      newVocabulary: [],
      valueSearch: "",
    };
    this.getData();
    this.handleSearch = this.handleSearch.bind(this);
  }

  getData() {
    fetch("http://127.0.0.1:8000/api/vocabularies").then((response) => {
      response.json().then((data) => {
        this.updateUI(data);
      });
    });
  }
  
  updateUI(data) {
    this.setState({
      vocabularies: data,
    });
  }
 
  handleSearch = (search) => {
    let oldVocabularies = this.state.vocabularies;
    let newArr = [];
    if (search.length <= 0 || search === "") {
      newArr = oldVocabularies;
      window.location.reload();
    } else {
      let searchValue = search.toLowerCase();
      for (let item of oldVocabularies) {
        if (item.word.toLowerCase().indexOf(searchValue) > -1) {
          newArr.push(item);
        }
      }
    }
    this.setState({
      vocabularies: newArr,
      valueSearch: search,
    });
  };
  render() {
    return (
      <div className="Parent">
        <Topic1/>
        <div className="Vocabulary">
          <form class="form-inline">
              <div class="input-group">                    
              <b>Tìm từ:</b> <input type="text" class="form-control" 
              placeholder="Nhập từ bạn muốn tìm"  value={this.state.valueSearch}
                onChange={(event) => this.handleSearch(event.target.value)}/>
              </div>
          </form>
          <div className="VocabularyItem">
          {
            this.state.vocabularies.map((item,index)=>(
              <VocabularyItem key={index} item={item}/>
            ))
          }

          </div>
        </div>
        </div>
    );
  }
}
export default Vocabulary;
