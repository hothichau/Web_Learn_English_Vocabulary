import React, { Component } from "react";
import "../css/Login.css";
import { withRouter } from "react-router-dom";

class Login extends Component {
  constructor() {
    super();
    this.onLoginSubmit = this.onLoginSubmit.bind(this);
  }
  onLoginSubmit(event) {
    event.preventDefault();

    let username = event.target["username"].value;
    let password = event.target["password"].value;

    let user = {
      username: username,
      password: password,
    };

    let userInJson = JSON.stringify(user);

    fetch("http://127.0.0.1:8000/api/login", {
      method: "post",
      headers: {
        "Content-Type": "application/json",
      },
      body: userInJson,
    })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        this.props.history.push("/vocabularies");
        localStorage.setItem("user_id", response.user_id);
        window.location.reload();
      });
      
  }
  render() {
    return (
      <center>
        <div className="login">
          <h1>Login</h1>
          <form onSubmit={this.onLoginSubmit}>
            <input type="text" name="username" placeholder="Enter username" />
            <input
              type="password"
              name="password"
              placeholder="Enter password"
            />
            <button>OK</button>
          </form>
        </div>
      </center>
    );
  }
}

export default withRouter(Login);
