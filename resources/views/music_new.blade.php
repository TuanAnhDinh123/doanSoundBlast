@extends('layouts/index')
@section('content')
<h2 class="text-center  mb-3 title">Nhạc mới</h2>
<div class="row mb-2 music" style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px">
    <div class="col-1">
        <p>1</p>
    </div>
    <div class="col-3">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
            </a>
        </p>
    </div>
    <div class="col-2">
        <p>Ca Sĩ :Thái Học</p>
    </div>
    <div class="col-2">
        <p>Album Nhạc Việt</p>
    </div>
    <div class="col-2">
        <p><span>1000</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg></p>
    </div>
    <div class="col-2">
        <p>2021/01/01</p>
    </div>
</div>
@endsection