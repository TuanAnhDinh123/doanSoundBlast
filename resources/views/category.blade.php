@extends('layouts/index')
@section('content')
<div class="nhac-buon">
    @foreach ($genres as $genre)
    <h2 class="title  mb-3">{{$genre->genreName}}</h2>
    <div class="row">
        @php
        $i =0;
        @endphp
        @foreach ($songs as $index=>$song)
        @if ($song->genresID == $genre->genreID && $i<=3) @php $i++; @endphp <div class="col-3 mb-5">
            <div class="card">
                <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="...">
                <div class="card-body card-body-st">
                    <h5 class="card-title"><a class="card-title-link sub-string-link"
                            href="{{route('detail', ['id' => 1])}}">{{$song->songName}}
                        </a>
                    </h5>
                    @foreach ($songArtists as $index1=>$artist)
                    @if ($artist->songID == $song->songID)
                    <p class="sub-string-link d-flex">{{$artist->artistName}}</p>                    
                    @endif
                    @endforeach
                    <div class="play" type="button">
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



@endsection
