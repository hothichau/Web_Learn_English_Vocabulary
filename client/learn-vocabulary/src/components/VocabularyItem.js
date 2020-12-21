import React, {Component} from 'react';
import "../css/VocabularyItem.css";
import { Link } from "react-router-dom";
import { withRouter } from 'react-router';

class VocabularyItem extends Component{
    render(){
        return(
            
            <div className="vocabulary">
                <img 
                    src={"http://127.0.0.1:8000/storage/" +this.props.item.image}
                    alt=""
                    width={208}
                    height={150}
                />
                <h3 className = "h3"><span className="item1">{this.props.item.word}</span></h3>
                <h4> 
                <span className="item1">{this.props.item.meaning}</span>
                </h4>
                <center><button class = "button1"><Link to={'/topics/'+this.props.item.topic_id}><b>Học</b></Link></button></center>
            </div>
            
        )
    }
}
export default withRouter(VocabularyItem);
