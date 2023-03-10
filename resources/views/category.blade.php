@extends('layouts/index')
@section('content')
<div class="nhac-buon">
    @php $songNo=0; @endphp
    @foreach ($genres as $genre)
    <h2 class="title  mb-3">{{$genre->genreName}}</h2>
    <div class="row">
        @php
        $i =0;
        @endphp
        @foreach ($songs as $index=>$song)
        @if ($song->genresID == $genre->genreID && $i<=3) @php $i++; @endphp
        <div class="col-3 mb-5">
            <div class="card">
                <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="...">
                <div class="card-body card-body-st">
                    <h5 class="card-title"><a class="card-title-link sub-string-link"
                            href="{{route('detail', ['id' => 1])}}">{{$song->songName}}
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
            @php $songNo++; @endphp
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>



@endsection
