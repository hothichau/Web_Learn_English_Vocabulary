import React, { Component } from "react";
import "../css/Footer.css";
import facebook from "../images/facebook.png";
import twitter from "../images/twitter.png";
import pinterest from "../images/pinterest.png";
import instagram from "../images/instagram.png";
class Footer extends Component{

    render(){
        return(
            <div className ="footer">
                <div className="fixed-footer">
                    <footer class="footer-distributed">
                        <div class="footer-left">
                            <span>Tiếng anh mỗi ngày</span>
                            <ul>
                                <li>. Giới thiệu tiếng Anh mỗi ngày</li>
                                <li>. Lời khen của học viên về chương trình</li>
                                <li>. Kết quả thi TOEIC của học viên</li>
                                <li>. Cập nhật hàng tuần</li>
                            </ul>
                        </div>
    
                        <div class="footer-center">
                            <div>
                            <span>Chăm sóc khách hàng</span>
                            <ul>
                                <li>. Hướng dẫn cách học</li>
                                <li>. Hướng dẫn thank toán</li>
                                <li>. Chính sách tặng điểm thưởng</li>
                                <li>. Chính sách ưu đãi khi mua tài khoản</li>
                            </ul>
                            </div>
                        </div>
                    <div class="footer-right">
            
                        <p class="footer-company-about">
                        <span>Sứ mệnh: Cải thiện cuộc sống thông qua giáo dục</span>
                        We have lots of free online activities to help teenagers 
                        and adults practise their English. Choose the skill 
                        you want to practise and the level that’s right for you.
                        </p>
                
                        <div class="footer-icons">
                            <a href="#"><img src = {facebook}></img></a>
                            <a href="#"><img src = {twitter}></img></a>
                            <a href="#"><img src = {pinterest}></img></a>
                            <a href="#"><img src = {instagram}></img></a>
                        </div>
                    </div>
                </footer>
        </div>
      </div>

        );
    }
}
export default Footer;