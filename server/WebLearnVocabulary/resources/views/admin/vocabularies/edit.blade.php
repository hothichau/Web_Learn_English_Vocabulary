<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/css/formEdit.css">
<body>
@extends("admin.dashboard")
@section("content")    
    <div>
     
            <h1>Sửa từ vựng</h1>
            </center>
            <form action="{{'/admin/vocabulary/'.$vocabularies->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <label for="word">Từ vựng </label>
                <input type="text" id="word" name="word" value="{{$vocabularies->word}}">
                <label for="pronunciation">Phiên âm </label>
                <input type="text" id="pronunciation" name="pronunciation" value="{{$vocabularies->pronunciation}}">
                <label for="meaning">Dịch nghĩa </label>
                <input type="text" id="meaning" name="meaning" value="{{$vocabularies->meaning}}">
                <label for="sound">Phát âm </label>
                <input type="file" id="sound" name="sound" value="{{$vocabularies->sound}}">
                <br>
                <label for="verb_form">Loại từ </label>
                <input type="text" id="verb_form" name="verb_form" value="{{$vocabularies->verb_form}}">
                <label for="topic_id"> Chọn chủ đề</label><br>
                <select name="topic_id" id="topic_id" class="form-control">
                @foreach($topics as $topic)
                <option value="{{$topic->id}}">{{$topic->title}}</option>
                @endforeach
                </select>  
                <label for="image">Hình ảnh</label>
                <input type="file" id="image" name="image" value="{{$vocabularies->image}}">
                <br>
                <input type="submit" value="Cập nhật">
            </form>
        </center>
    </div>
    @endsection
</body>

</html>