@extends('layouts/admin')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Chỉnh sửa thông tin nhạc sĩ</h4>
        <form action="edit-author-post" method="post" class="d-flex flex-column">
        {{csrf_field() }}
            <div class="form-group">
                <label for="authorName">Tên nhạc sĩ</label>
                <input type="text" name="authorName" required class="form-control" value="{{$ten}}">
                <input type="text" name="authorID" class="d-none" value="{{$id}}">
            </div>
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4" value="Update">
        </form>
    </div>
</div>
@endsection
