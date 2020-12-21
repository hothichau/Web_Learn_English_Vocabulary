import React, { Component } from "react";
import "../css/Register.css";
import { withRouter } from "react-router-dom";

class Register extends Component {
  constructor(){
    super();
    this.register = this.register.bind(this);
}
register(event){
    event.preventDefault();
    let username = event.target['username'].value;
    let password = event.target['password'].value;
    let email = event.target['email'].value;
    let user = {
        username:username,
        password:password,
        email:email,
    }

    console.log(user);
    let userInJson = JSON.stringify(user);

    fetch("http://127.0.0.1:8000/api/register", {
        method: "post",
        headers: {
            "Content-Type":"application/json"
        },
        body: userInJson
    })
    .then((response) => {
        console.log(response);
        this.props.history.push("/login");
    });
}
  render() {
    return (
      <center>
          <div className="register">
          <h2>Register</h2>
          <form onSubmit={this.register}>
            <input type="text" name="username" placeholder="Enter username"/>
            <input type="password" name="password"  placeholder="Enter password"/>
            <input type="email" name="email"  placeholder="Enter email"/>
          <button>OK</button>
          </form>
          </div>
        </center>
    );
  }
}

export default withRouter(Register);


