@extends('layouts/index')
@section('content')
@php $songNo=0; @endphp
<div>
    <h2 class="mb-3 title">Bài hát mới xem gần đây</h2>
    <div class="nhac-buon">       
        <h2 class="title  mb-3"></h2>
        <div class="row">           
            @foreach ($songs as $index=>$song)
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="...">
                    <div class="card-body card-body-st">
                        <h5 class="card-title"><a class="card-title-link sub-string-link"
                                href="{{route('detail', ['id' => $song->songID])}}">{{$song->songName}}
                            </a>
                        </h5>                        
                        @foreach ($songArtists as $index1=>$artist)
                        @if ($artist->songID == $song->songID)
                        <p class="sub-string-link">{{$artist->artistName}}</p>                    
                        @endif
                        @endforeach
                        <div class="play playBtn" type="button">
                            <p class="songID d-none">{{$song->songID}}</p>
                            <p class="songNo d-none">{{$songNo}}</p>
                            <p class="songIndex d-none">{{$index}}</p>
                            <p class="songPath d-none">{{asset('uploads/music/'.$song->mp3)}}</p>
                            <p class="songImg d-none">{{asset('uploads/images/song/'.$song->img)}}</p>
                            <p class="songName d-none">{{$song->songName}}</p>
                            <p>
                                <svg color="#FFFFFF" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                                </svg>
                            </p>
                        </div> 
                    </div>
                    <div class="icon-container">
                    <p class="likeIconContainer">
                        <span class="numberOfLike">{{$song->numberOfLike}}</span>K
                        <span class="likeIconClass" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                                viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </span>
                        <span class="likeIcon-songID d-none">{{$song->songID}}</span>
                        <span class="iconStatus d-none">0</span>    
                    </p>
                  
                    <p>
                        <span class="numberOfHear">{{$song->numberOfHear}}</span>K
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                            <path
                            d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
                        </svg>
                    </p>              
                </div>
                </div>
            </div>
            @php $songNo++; @endphp
            @endforeach
    </div>
</div>

<h2 class="mb-3 title">Có thể bạn muốn nghe</h2>
@foreach ($songTrends as $index=>$song)
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
            <a class="link" href="{{route('detail', ['id' => $song->songID])}}">{{$song->songName}}
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
            @if (!empty($user))    
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
            @else
            <p class="" data-toggle="tooltip" title="Đăng nhập để like">
                <span class="numberOfLike">{{$song->numberOfLike}}</span>K
                <span class="" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                    viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                </span>
            </p>
            @endif
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

</div>


@endsection
