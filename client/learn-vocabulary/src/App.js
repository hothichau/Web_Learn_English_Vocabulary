import React from "react";
import "./App.css";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Footer from "./components/Footer";
//import Header from "./components/Header";
import Login from "./components/Login";
import Register from "./components/Register";
import Topic from "./components/TopicLimit";
import Topic1 from "./components/Topic1";
import Vocabulary from "./components/Vocabulary";
import TopicDetail from "./components/TopicDetail";
import Slide from "./components/Slide";
import Home from "./components/Home";
import logo from "./images/logo.png";
import Comment from "./components/Comment";

class App extends React.Component {
  constructor() {
    super();
    let checkLogin = localStorage.getItem("user_id");
    let check = checkLogin ? "on" : "off";
    this.state = {
      checkLogin: check,
    };
    this.onLogout = this.onLogout.bind(this);
  }
  onLogout() {
    localStorage.removeItem("user_id");
    this.setState({
      checkLogin: "off",
    });
  }
  render() {
    return (
      <Router>
        <div className="flex-row fixed-header">
          <div className="fixed-header">
            <ul>
              <li className="home1">
                <img src={logo}></img>
              </li>
              <li>
                <Link to="/" className="text-menu">
                  Trang chủ
                </Link>
              </li>
              <li>
                <Link to="/grammars" className="text-menu">
                  Ngữ pháp
                </Link>
              </li>
              <li>
                <Link to="/vocabularies" className="text-menu">
                  Từ vựng
                </Link>
              </li>
              <li>
                <Link to="/directions" className="text-menu">
                  Hướng dẫn
                </Link>
              </li>
              <li>
                <Link to="/directions" className="text-menu">
                  Liên hệ
                </Link>
              </li>
              {this.state.checkLogin === "on" ? (
                <div><button onClick={this.onLogout}>Đăng xuất</button><span className="user">Xin chào: User</span></div>
          ) : (
            <div>
              <Link to="/register">
                <button>Đăng ký</button>
              </Link>
              <Link to="/login">
                <button onClick={this.onLoginClicked}>Đăng nhập</button>
              </Link>
            </div>
          )}
            </ul>
            
          </div>
        
        </div>
        
        <Switch>
          <Route path="/" exact>
            <Home/>
            <Footer />
          </Route>
          <Route path="/topics" exact>
            <Topic1 />
            <Footer />
          </Route>
          <Route path="/login">
            <Login onLoginClicked={this.onLogin} />
            <Footer />
          </Route>
          <Route path="/register">
            <Register />
            <Footer />
          </Route>
          <Route path="/vocabularies">
          <Vocabulary/>
          <Footer />
          </Route>
          <Route path={"/vocabularies/:id"}>
            <Topic1/>
            <TopicDetail />
            <Footer />
          </Route>
          <Route path={"/topics/:id"}>
            <Topic1/>
            <TopicDetail />
            <Footer />
          </Route>
        </Switch>
      </Router>
    );
  }
}

export default App;
