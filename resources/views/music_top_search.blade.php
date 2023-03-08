@extends('layouts/index')
@section('content')
<h2 class="mb-3 title">Top Tìm Kiếm Bài Hát</h2>
@foreach ($songs as $index=>$song)
<div class="row mb-2 music"
    style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px;align-items: center">
    <div class="col-1  stt text-center">
        <p>{{$index+1}}</p>
    </div>
    <div class="col-1">
        <img class="img-thumbnail" src="{{asset('uploads/images/song/'.$song->img)}}" alt="">
    </div>
    <div class="col-3">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">{{$song->songName}}
            </a>
        </p>
    </div>
    <div class="col-2 d-flex">
        @foreach ($songArtists as $index1=>$artist)
        @if ($artist->songID == $song->songID)
        <p class="sub-string">{{$artist->artistName}}</p>
        @endif
        @endforeach
    </div>
    <div class="col-2">
        <p class="sub-string">{{$song->genreName}}</p>
    </div>
    <div class="col-1">
        <p><span>{{$song->numberOfLike}}K</span> <a class="link-heart" href="#">
                @if(1 == 1)
                <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                    viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
                @endif
            </a></p>
    </div>
    <div class="col-1">
        <p><span>{{$song->numberOfSearch}}K</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20"
                height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></p>
    </div>
    <div class="col-1" type="button">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill"
                viewBox="0 0 16 16">
                <path
                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
            </svg></p>
    </div>
</div>
@endforeach
@endsection
