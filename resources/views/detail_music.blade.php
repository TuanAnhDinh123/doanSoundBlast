@extends('layouts/index')
@section('content')
<div class="row">
    <div class="col-6">
        <div class="row">

            <div class="card" style="">
                <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="...">
            </div>
            <div class="info">
                <h5 class="title mt-3 mb-3">{{$song->songName}}</h5>
                <h4 class="title mt-3 mb-3">Ca sĩ: </h4>
                <div class="lyrics">
                    @foreach ($songArtists as $index1=>$artist)
                    @if ($artist->songID == $song->songID)
                    <p class="sub-string" style="color:#ffffff">{{$artist->artistName}}</p>
                    @endif
                    @endforeach
                </div>
                <h4 class="title mt-3 mb-3">Sáng tác: </h4>
                <p style="color:#ffffff">{{$song->authorName}}</p>
                <h4 class="title mt-3 mb-3">Thể loại: </h4>
                <p style="color:#ffffff">{{$song->genreName}}</p>
                <p style="color:#ffffff">{{$song->numberOfLike}} lượt thích</p>
                <p style="color:#ffffff">{{$song->numberOfHear}} lượt nghe</p>
                <p style="color:#ffffff">Xuất bản {{$song->createAt}}</p>
            </div>
        </div>
        <div class="play playBtn d-none" type="button">
            <p class="songID d-none">{{$song->songID}}</p>
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
    <div class="col-6">
        <div class="container">
            <div class="comment mb-3" id="containerCmt">
                <div class="d-flex justify-content-center row comment-border">
                    <div class="">
                        @foreach($cmts as $cmt)
                        <div class="d-flex flex-column comment-section">
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                        src="{{asset('/uploads/images/avatar/'.$cmt->img)}}" width="40">
                                    <div class="d-flex flex-column justify-content-start ml-2"><span
                                            class="d-block font-weight-bold name">{{$cmt->name}}</span>
                                            <span class="date text-black-50">
                                            {{$cmt->cmtAt}}</span>
                                        </div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text">{{$cmt->reviewContent}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-light p-2">
                <form id="postCmtForm" action="/cmt" method="post">
                {{csrf_field() }}
                    <input type="text" value="{{$song_ID}}" class="d-none" name="songID">
                    @if (!empty($user))    
                    <input type="text" value="{{$user->id}}" class="d-none" name="userID">
                    @endif
                    <div class="d-flex flex-row align-items-start">
                        <textarea name="cmtContent" class="form-control ml-1 shadow-none textarea" required></textarea>
                    </div>
                    <div class="mt-2 text-right">
                    @if (!empty($user))    
                        <input type="submit" class="btn btn-primary shadow-none" value="Post comment">
                    @else
                        <input type="" class="btn btn-primary shadow-none" value="Post comment" data-toggle="tooltip" title="Đăng nhập để gửi feedback">
                    @endif
                        <!-- <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection