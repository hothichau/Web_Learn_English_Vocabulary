<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/topic.css">
</head>

<body>
@extends("admin.dashboard")
@section("content")
<h1 style = "padding-left: 30%">Danh sách người dùng</h1>
    <table id="table">
        <tr>
            <th>Id</th>
            <th>Tên người dùng</th>
            <th>Mật khẩu</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Xóa</th>
            @foreach ($users as $user)
        <tr>
            <td> {{$user->id}}</td>
            <td> {{$user->username}} </td>
            <td> {{$user->password}} </td>
            <td> {{$user->email}} </td>
            <td> {{$user->role}} </td>
            <form action='{{"/admin/user/".$user->id}}' method="POST">
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