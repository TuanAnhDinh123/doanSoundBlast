@extends('layouts/admin')
@section('adminMain')
<div class="row">
    <div class="col-10 mx-auto mt-5">
        <h4 class="text-center mb-4">Thêm ca sĩ</h4>
        <form action="add-artist-post" method="post" class="d-flex flex-column">
        {{csrf_field() }}
            <div class="form-group">
                <label for="artistName">Tên ca sĩ</label>
                <input type="text" name="artistName" required placeholder="Nhập tên ca sĩ" class="form-control">
            </div>
            <input type="submit" name="" class="btn btn-primary mx-auto mb-4 mt-4" value="Thêm">
        </form>
    </div>
</div>
@endsection