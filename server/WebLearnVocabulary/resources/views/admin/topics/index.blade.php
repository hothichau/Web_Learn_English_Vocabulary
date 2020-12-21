
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
    <h3> Thêm chủ đề </h3>
    <form action="/admin/topic/create" method="get">
        <button type="submit" class="button button1 " title="add">Thêm </button>
    </form>
    <h1 style = "padding-left: 30%">Danh sách các chủ đề</h1>
    <table id="table">
        <tr>
            <th>Id</th>
            <th>Tên chủ đề</th>
            <th>Hình ảnh</th>
            <th>Sửa</th>
            <th>Xóa</th>
            @foreach ($topics as $topic)
        <tr>
            <td> {{$topic->id}}</td>
            <td> {{$topic->title}} </td>
            <td>
                <image src="{{'/storage/'.$topic->image}} " style="height: auto; width:100px;">
            </td>
            <form action='{{"/admin/topic/".$topic->id."/edit"}}' method="get">
                <td> <button type="submit" class="button button1"><i class="far fa-edit"></i> </button></td>
            </form>
            <form action='{{"/admin/topic/".$topic->id}}' method="POST">
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
