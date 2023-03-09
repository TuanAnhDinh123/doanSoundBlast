@extends('layouts/index')
@section('content')
<div class="nhac-buon">
    @foreach ($artistLists as $artistList)
    <h2 class="title  mb-3">{{$artistList->artistName}}</h2>
    <div class="row">
        @foreach ($songArtists as $index=>$song)
        @if ($artistList->artistID == $song->artistID)
        <div class="col-3 mb-5">
            <div class="card">
                <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="...">
                <div class="card-body card-body-st">
                    <h5 class="card-title"><a class="card-title-link sub-string-link"
                            href="{{route('detail', ['id' => 1])}}">{{$song->songName}}
                        </a>
                    </h5>
                    @foreach ($songArtists as $artistSub)
                    @if ($artistSub->songID == $song->songID)
                    <p class="sub-string-link">{{$artistSub->artistName}}</p>                   
                    @endif
                    @endforeach
                    <div class="play playBtn" type="button">
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
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>
@endsection
