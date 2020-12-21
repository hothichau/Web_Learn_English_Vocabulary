import React from "react";
import "../css/Slide.css";
import { Slide } from "react-slideshow-image";
import img1 from "../images/slide1.png";
import img2 from "../images/slide2.png";
import img3 from "../images/slide3.png";
import "react-slideshow-image/dist/styles.css";
const properties = {
  duration: 5000,
  transitionDuration: 500,
  infinite: true,
  indicators: true,
  arrows: true,
};

const Slideshow = () => {
  return (
    <div className="home">
      <div className="containerSlide">
        <Slide {...properties}>
          <div className="each-slide">
            <div>
              <img src={img1}></img>
            </div>
          </div>
          <div className="each-slide">
            <div>
              <img src={img2}></img>
            </div>
          </div>
          <div className="each-slide">
            <div>
              <img src={img3}></img>
            </div>
          </div>
        </Slide>
      </div>
    </div>
  );
};

export default Slideshow;
