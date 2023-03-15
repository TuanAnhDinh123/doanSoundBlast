@extends('layouts/admin')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Thêm thể loại nhạc</h4>
        <form action="addcatepost" method="post" class="d-flex flex-column">
        {{csrf_field() }}
            <div class="form-group">
                <label for="categoryName">Tên thể loại</label>
                <input type="text" name="categoryName" required placeholder="Nhập tên thể loại" class="form-control">
            </div>
            
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4" value="Thêm">
        </form>
    </div>
</div>
@endsection
