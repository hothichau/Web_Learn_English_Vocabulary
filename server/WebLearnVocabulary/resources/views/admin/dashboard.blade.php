<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang quản lý</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

<div class="container-fluid">
  <div class="row content" style = "display: inline-flex; padding-left: 5%;">
    <div class="col-sm-3 sidenav" style = "width: 200px">
      <h2>Trang quản lý</h2>
      <ul>
          <li><a class="active" href="#home">Lựa chọn</a></li>
          <li><a href="/admin/topics">Chủ đề</a></li>
          <li><a href="/admin/vocabularies">Từ vựng</a></li>
          <li><a href="/admin/users">Người dùng</a></li>
          <li><a href="/admin/comments">Bình luận</a></li>
      </ul>
      </div>

    <div class="col-sm-9"style =" padding-left: 3%;width: 1500px">
    @yield("content")
    </div>
    </div>
</div>
</body>
</html>
