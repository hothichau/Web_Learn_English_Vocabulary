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

}

h3{
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
    margin-left: -50%;
}
</style>
<body>
@extends("admin.dashboard")
@section("content")
<h3>Thêm chủ đề</h3>

<div>
    
    <form action="/admin/topics" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Tên chủ đề </label>
        <input type="text" id="title" name="title">
        <label for="image">Hình ảnh</label>
        <input type="file" id="image" name="image" >
        <button type="submit" value="Submit">Thêm</button>
    </form>
 
</div>

</body>
@endsection
</html>