@extends('layouts/admin')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Chỉnh sửa thông tin bài hát</h4>
        <form action="edit-song-post-{{$song->songID}}" method="post" class="d-flex flex-column" enctype="multipart/form-data">
        {{csrf_field() }}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="txtGenre">Tên thể loại</label>
                        <select name="txtGenre" class="form-control">
                            @foreach($genreList as $genre)
                            @if ($genre->genreID == $song->genreID)
                                <option value="{{$genre->genreID}}" selected>{{$genre->genreName}}</option>
                            @else
                                <option value="{{$genre->genreID}}">{{$genre->genreName}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtAuthor">Tên nhạc sĩ</label>
                        <select name="txtAuthor" class="form-control">
                            @foreach($authorList as $author)
                            @if ($author->authorID == $song->authorID)
                            <option value="{{$author->authorID}}" selected>{{$author->authorName}}</option>
                            @else
                            <option value="{{$author->authorID}}">{{$author->authorName}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="txtArtist[]">Tên ca sĩ</label>
                        <select name="txtArtist[]" class="form-control" multiple>
                            @foreach($artistList as $artist)
                                    @if ($artist->artistID == $songArtists[0]->artistID || $artist->artistID == $songArtists[1]->artistID)
                                        <option value="{{$artist->artistID}}" selected>{{$artist->artistName}}</option>
                                    @else
                                        <option value="{{$artist->artistID}}">{{$artist->artistName}}</option>
                                    @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3 col-6">
                    <label for="txtName">Tên bài hát</label>
                    <input type="text" name="txtName" required value="{{$song->songName}}" class="form-control">
                </div>
                <div class="form-group mt-3 col-6">
                    <label for="txtDate">Ngày phát hành</label>
                    <input type="date" name="txtDate" required value="{{$song->createAt}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3 col-6">
                    <label for="txtImg">Hình ảnh</label>
                    <input type="file" name="txtImg"  class="form-control">
                </div>
                <div class="form-group mt-3 col-6">
                    <label for="txtMp3">Âm thanh</label>
                    <input type="file" name="txtMp3" class="form-control">
                </div>
            </div>
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4 form-control" value="Update">
        </form>
        
    </div>
</div>
@endsection
