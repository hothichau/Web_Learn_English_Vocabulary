<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <word></word>
    <meta word="description" content="">
    <meta word="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/topic.css">
</head>

<body>
@extends("admin.dashboard")
@section("content")
    <h3> Thêm từ vựng </h3>
    <form action="/admin/vocabulary/create" method="get">
        <button type="submit" class="button button1 " word="add">Thêm </button>
    </form>
    <h1 style = "padding-left: 30%">Danh sách từ vựng</h1>
    <table id="table">
                <tr>
                    <th>Id</th>
                    <th>Từ</th>
                    <th>Phiên âm</th>
                    <th>Loại từ</th>
                    <th>Phát âm</th>
                    <th>Dịch nghĩa</th>
                    <th>Chủ đề</th>
                    <th>Hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
               
                    @foreach ($vocabularies as $vocabulary)
                <tr>
                    <td> {{$vocabulary->id}}</td>
                    <td> {{$vocabulary->word}} </td>
                    <td> {{$vocabulary->pronunciation}} </td>
                    <td> {{$vocabulary->verb_form}} </td>
                    <td> {{$vocabulary->sound}} </td>
                    <td> {{$vocabulary->meaning}} </td>
                    <td> {{$vocabulary->getTopic->title}} </td>
                    <td>
                        <image src="{{'/storage/'.$vocabulary->image}} " style="height: auto; width:100px;">
                    </td>
                    <form action='{{"/admin/vocabulary/".$vocabulary->id."/edit"}}' method="get">
                        <td> <button type="submit" class="button button1"><i class="far fa-edit"></i> </button></td>
                    </form>
                    <form action='{{"/admin/vocabulary/".$vocabulary->id}}' method="POST">
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