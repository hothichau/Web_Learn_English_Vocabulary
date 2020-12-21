<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta title="description" content="">
    <meta title="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/topic.css">
</head>

<body>
    @extends("admin.dashboard")
    @section("content")
    <table id="table">
    <h1 style = "padding-left: 30%">Danh sách các bình luận</h1>
        <tr>
            <th>Id</th>
            <th>ID người dùng</th>
            <th>Tên người dùng</th>
            <th>Nội dung</th>
            <th>Xóa</th>
            @foreach ($comments as $comment)
        <tr>
            <td> {{$comment->id}}</td>
            <td> {{$comment->user_id}}</td>
            <td> {{$comment->username}} </td>
            <td> {{$comment->content}} </td>
           
            <form action='{{"/admin/comment/".$comment->id}}' method="POST">
                @csrf
                @method("DELETE")
                <td> <button type="submit" class="button button1"><i class="far fa-calendar-times"></i></button> </td>
            </form>
        </tr>
        @endforeach

    </table>
    @endsection
</body>

</html>