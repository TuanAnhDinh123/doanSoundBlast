@extends('layouts/index')
@section('content')
<h2 class="text-center title mb-3"> View Treding</h2>
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
        <p>Thái Học</p>
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
        <p><span>1000</span> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-headphones" viewBox="0 0 16 16">
                <path
                    d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
            </svg></p>
    </div>
</div>
@endsection