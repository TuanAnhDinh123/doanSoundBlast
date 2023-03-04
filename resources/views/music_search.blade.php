@extends('layouts/index')
@section('content')
<div class="nhac-buon">
    @if ($result == 0)
    <h2 class="text-center  mb-3 title">Không có kết quả phù hợp</h2>
    @else
    <h2 class="text-center  mb-3 title">Kết quả tìm kiếm</h2>
    <div class="row">
    @foreach ($songs as $song)
        <div class="col-3 mb-3">
            <div class="card">
                <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a class="card-title-link" href="{{route('detail', ['id' => 1])}}">
                        {{$song->songName}}
                    </a>
                    </h5>
                    @foreach ($songArtists as $index1=>$artist)
                    @if ($artist->songID == $song->songID)
                        <p class="card-text">{{$artist->artistName}}</p>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
    </div>
    @endif
</div>


@endsection