<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/css/formEdit.css">
<body>
@extends("admin.dashboard")
@section("content")   
    <div>
       
        <h1>Sửa chủ đề</h1>
            </center>
            <form action="{{'/admin/topic/'.$topics->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <label for="title"><b>Tên chủ đề</b></label>
                <input type="text" placeholder="Enter title" name="title" id="title" value="{{$topics->title}}">
                <label for="image">Hình ảnh</label>
                <input type="file" id="image" name="image">
                <input type="submit" value="Cập nhật">
            </form>
        </center>
    </div>
    @endsection
</body>

</html>