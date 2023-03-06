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
        @if ($song->genresID == $genre->genreID && $i<=3) @php $i++; @endphp <div class="col-3 mb-3">
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
                </div>
            </div>
    </div>
    @endif
    @endforeach
</div>

@endforeach
</div>


@endsection
