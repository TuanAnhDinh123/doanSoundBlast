@extends('layouts/admin')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Thêm bài hát mới </h4>
        <form action="add-song-post" method="post" class="d-flex flex-column" enctype="multipart/form-data">
        {{csrf_field() }}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="txtGenre">Tên thể loại</label>
                        <select name="txtGenre" class="form-control">
                            @foreach($genres as $genre)
                                <option value="{{$genre->genreID}}">{{$genre->genreName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtAuthor">Tên nhạc sĩ</label>
                        <select name="txtAuthor" class="form-control">
                            @foreach($authors as $author)
                            <option value="{{$author->authorID}}">{{$author->authorName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="txtArtist[]">Tên ca sĩ</label>
                        <select name="txtArtist[]" class="form-control" multiple>
                            @foreach($artists as $artist)
                            <option value="{{$artist->artistID}}">{{$artist->artistName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3 col-6">
                    <label for="txtName">Tên bài hát</label>
                    <input type="text" name="txtName" required placeholder="Nhập tên bài hát" class="form-control">
                </div>
                <div class="form-group mt-3 col-6">
                    <label for="txtDate">Ngày phát hành</label>
                    <input type="date" name="txtDate" required value="" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3 col-6">
                    <label for="txtImg">Hình ảnh</label>
                    <input type="file" name="txtImg" required  class="form-control">
                </div>
                <div class="form-group mt-3 col-6">
                    <label for="txtMp3">Âm thanh</label>
                    <input type="file" name="txtMp3" class="form-control">
                </div>
            </div>
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4 form-control" value="Thêm">
        </form>
        
    </div>
</div>
@endsection
