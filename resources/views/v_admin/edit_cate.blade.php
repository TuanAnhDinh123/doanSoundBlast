@extends('layouts/admin')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Chỉnh sửa thông tin thể loại nhạc</h4>
        <form action="editcatepost" method="post" class="d-flex flex-column">
        {{csrf_field() }}
            <div class="form-group">
                <label for="categoryName">Tên thể loại nhạc</label>
                <input type="text" name="categoryName" required class="form-control" value="{{$ten}}">
                <input type="text" name="categoryID" class="d-none" value="{{$id}}">
            </div>
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4" value="Update">
        </form>
    </div>
</div>
@endsection