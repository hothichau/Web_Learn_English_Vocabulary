import React, { Component } from "react";
import "../css/Home.css";
import Slide from "./Slide";
import Register from "./Register";
import Topic from "./TopicLimit";

class Home extends Component {
  render() {
    return (
      <div>
      <Slide />
      <center>
      
      <div className="home">
        <section class="w3-container w3-center w3-content">
          <h2 class="w3-wide">Nền tảng đầu tiên của bất kỳ một ngôn ngữ nào</h2>

          <p class="w3-justify">
          Học tiếng Anh thì phải bắt đầu từ đâu? Từ vựng – câu trả lời mà đa số những người học tiếng Anh 
          lão luyện sẽ đưa ra cho bạn để thấy từ vựng quan trọng như thế nào. Vậy tại sao từ vựng tiếng Anh 
          lại quan trọng như vậy? Từ vựng tiếng Anh là yếu tố nền tảng đầu tiên và rất quan trọng của việc 
          học ngôn ngữ. Nếu không có sự hiểu biết đầy đủ về từ ngữ, bạn không thể nói, cũng chẳng thể hiểu
           được người khác đang nói gì. Nếu bạn biết nhiều từ vựng, kể cả khi ngữ pháp kém, bạn vẫn có thể 
          bày tỏ những ý tưởng của riêng mình. Nó là chìa khóa nắm giữ quan điểm,tư tưởng của bạn. Nói cách 
          khác, từ vựng đóng một vai trò quan trọng, là nền móng cho hệ thống ngôn ngữ của bạn.
          </p>
        </section>
        <section class="w3-container w3-center w3-content">
          <h2 class="w3-wide">Từ vựng quyết định mọi kỹ năng khác trong tiếng Anh của bạn</h2>
          <p class="w3-justify">
          Để trả lời cho câu hỏi Tại sao từ vựng tiếng Anh lại quan trọng và Tại sao phải học từ vựng tiếng Anh 
          thì có rất nhiều câu trả lời có thể cho bạn nhiều thông tin. 
          </p>
        </section>
        <section class="w3-container w3-center w3-content">
          <h2 class="w3-wide">Học theo chủ đề</h2>
          <Topic/>
          <h2 class="w3-wide">Đăng ký ngay để tham gia học từ vựng</h2>
          <center><div className="register"><Register/></div></center>
        </section>
        
      </div>
      </center>
      </div>
    );
  }
}
export default Home;
