@extends('layouts/index')
@section('content')
@php $songNo=0; @endphp
<h2 class=" title mb-3">Thịnh hành</h2>
@foreach ($songs as $index=>$song)
<div class="row mb-2 music"
    style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px;align-items: center">
    <div class="col-1 stt text-center">
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
    <div class="col-3 row">
        <div class="col-5">
            <p class="likeIconContainer">
                <span class="numberOfLike">{{$song->numberOfLike}}</span>K
                <span class="likeIconClass" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                    viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg></span>
                <span class="likeIcon-songID d-none">{{$song->songID}}</span>
                <span class="iconStatus d-none">0</span>
            </p>
        </div>
        <div class="col-5">
            <p><span class="numberOfHear">{{$song->numberOfHear}}</span>K <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                    <path
                        d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
                </svg></p>
        </div>
        <div class="col-2 playBtn" type="button">
            <p class="songID d-none">{{$song->songID}}</p>
            <p class="songNo d-none">{{$songNo}}</p>
            <p class="songIndex d-none">{{$index}}</p>
            <p class="songPath d-none">{{asset('uploads/music/'.$song->mp3)}}</p>
            <p class="songImg d-none">{{asset('uploads/images/song/'.$song->img)}}</p>
            <p class="songName d-none">{{$song->songName}}</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                </svg></p>
        </div>

    </div>
    @php $songNo++; @endphp
</div>
@endforeach
@endsection
