@extends('layouts/index')
@section('content')
<h2 class="text-center  mb-3 title">Nhạc mới</h2>
@foreach ($songs as $index=>$song)
<div class="row mb-2 music" style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px">
    <div class="col-1">
        <p>{{$index+1}}</p>
    </div>
    <div class="col-2">
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
        <p>{{$artist->artistName}}</p>
        @endif
        @endforeach
    </div>
    <div class="col-1">
        <p>{{$song->albumName}}</p>
    </div>
    <div class="col-1">
        <p><span>{{$song->numberOfLike}}K</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg></p>
    </div>
    <div class="col-2">
        <p>{{$song->createAt}}K</p>
    </div>
</div>
@endforeach
@endsection