@extends('layouts/adminlayout')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Thêm bài hát mới </h4>
        <form action="addsongpost" method="post" class="d-flex flex-column" enctype="multipart/form-data">
        {{csrf_field() }}
            <div class="form-group">
                <label for="">Tên thể loại</label>
                <select name="" id="" class="form-control">
                    @foreach()
                       
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tên ca sĩ</label>
                <input type="text" name="" required value="" class="form-control">               
            </div>
            <div class="row">
                <div class="form-group mt-3 col-6">
                    <label for="">Tên bài hát</label>
                    <input type="text" name="" required placeholder="Nhập tên bài hát" class="form-control">
                </div>
                <div class="form-group mt-3 col-6">
                    <label for="">Ngày phát hành</label>
                    <input type="date" name="" required value="{{$date}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3 col-6">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="" required  class="form-control">
                </div>
                <div class="form-group mt-3 col-6">
                    <label for="">Âm thanh</label>
                    <input type="file" name="" class="form-control">
                </div>
            </div>
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4 form-control" value="Thêm">
        </form>
        
    </div>
</div>
@endsection
