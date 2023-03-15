@extends('layouts/adminlayout')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Chỉnh sửa thông tin ca sĩ</h4>
        <form action="editsinglepost-{{$id}}" method="post" class="d-flex flex-column">
        {{csrf_field() }}
            <div class="form-group">
                <label for="categoryName">Tên ca sĩ</label>
                <input type="text" name="categoryName" required class="form-control" value="{{$ten}}">
            </div>
            <input type="submit" name="categoryEdit" class="btn btn-primary mx-auto mb-4 mt-4" value="Update">
        </form>
    </div>
</div>
@endsection
