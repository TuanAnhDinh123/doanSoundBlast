@extends('layouts/index')
@section('content')
<div>
    <h2 class="mb-3 title">Bài hát mới xem gần đây</h2>
    <div class="nhac-buon">       
        <h2 class="title  mb-3"></h2>
        <div class="row">           
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body card-body-st">
                        <h5 class="card-title"><a class="card-title-link sub-string-link"
                                href="{{route('detail', ['id' => 1])}}">
                            </a>
                        </h5>                        
                        <p class="sub-string-link"></p>
                        
                    </div>
                </div>
        </div>
    </div>
</div>

<h2 class="mb-3 title">Có thể bạn muốn nghe</h2>
<div class="row mb-2 music"
 style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px;align-items: center">
    <div class="col-1">
        <div class="row stt text-center">
            <p>1</p>
        </div>
    </div>
    <div class="col-2">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
                </a>
        </p>
    </div>
    <div class="col-2 d-flex">
        <p>Thái Học</p>
    </div>
    <div class="col-2">
        <p>Album Nhạc Việt</p>
    </div>
    <div class="col-2">
        <p><span>K</span><a class="link-heart" href="#">
            
            <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg>
           
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                viewBox="0 0 16 16">
                <path
                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
            </svg>
           
        </a></p>
    </div>
    <div class="col-2">
        <p class="text-left">2023-04-03</p>
    </div>
    <div class="col-1">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill"
                viewBox="0 0 16 16">
                <path
                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
            </svg></p>
    </div>
</div>

</div>


@endsection
