@extends('layouts/index')
@section('content')
<div class="nhac-buon">
    @foreach ($artistLists as $artistList)
    <h2 class="title  mb-3">{{$artistList->artistName}}</h2>
    <div class="row">
        @foreach ($songArtists as $song)
        @if ($artistList->artistID == $song->artistID)
        <div class="col-3 mb-3">
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
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>
@endsection
