import React, {Component} from 'react';
import "../css/TopicItem.css";
import Topic1 from "./Topic1";
import { Link } from "react-router-dom";
//import {withRouter} from 'react-dom';

class TopicItem extends Component{

    render(){
        const {onItemClicked} = this.props;
        return(
            <div className = "TopicItem">
                <div className="topic">
                <img 
                    src={"http://127.0.0.1:8000/storage/" +this.props.item.image}
                    alt=""
                    width={200}
                    height={150}
                />
                   <span className="item">{this.props.item.title}</span>
                    <center><button class = "button"><Link to={'/topics/'+this.props.item.id}><b>Học</b></Link></button></center>
                </div>
            </div>
        )
    }
}
export default TopicItem;