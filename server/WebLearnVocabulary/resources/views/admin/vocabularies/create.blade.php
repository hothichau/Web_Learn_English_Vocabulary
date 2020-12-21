<!DOCTYPE html>
<html>
<style>
form{
    width: 50%;
    text-align: left;
        background-color: #f2f2f2; 
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  
  padding: 20px;
}

h3{
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
}
</style>
<body>

<h3>Thêm từ vựng</h3>

<div>
    <center>
    <form action="/admin/vocabularies" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="word">Từ vựng </label>
        <input type="text" id="word" name="word">
        <label for="pronunciation">Phiên âm </label>
        <input type="text" id="pronunciation" name="pronunciation">
        <label for="meaning">Dịch nghĩa </label>
        <input type="text" id="meaning" name="meaning">
        <label for="sound">Phát âm </label>
        <input type="file" id="sound" name="sound" >
        <br>
        <label for="verb_form">Loại từ </label>
        <input type="text" id="verb_form" name="verb_form">
        <label for="topic_id"> Chọn chủ đề</label><br>
        <select name="topic_id" id="topic_id" class="form-control">
          @foreach($topics as $topic)
          <option value="{{$topic->id}}">{{$topic->title}}</option>
          @endforeach
        </select>  
        <label for="image">Hình ảnh</label>
        <input type="file" id="image" name="image" >
        <br>
        <button type="submit" value="Submit">Thêm</button>
    </form>
  </center>
</div>

</body>
</html>