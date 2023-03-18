@extends('layouts/index')
@section('content')
<div class="row" style="margin-top: -10px;">
    <div class="col-6">
        <div class="row">
            <div class="card p-0 col-10 mx-auto" style="">
                <img src="{{asset('uploads/images/song/'.$song->img)}}" class="card-img-top" alt="..." style="height: 150%;">
            </div>
            <div class="info col-10 mx-auto">
                <div class="">
                    <h2 class="title mt-3 mb-3 text-center" style="font-size: 30px;">{{$song->songName}}</h2>
                    <div class="d-flex row">                       
                        <h5 class="title mt-2 mb-2" style="width: fit-content;font-size: 20px;">Ca sĩ: </h5>
                        <div class="lyrics d-flex" style="width: fit-content;">
                            @php $x=0; @endphp
                            @foreach ($songArtists as $index1=>$artist)
                            @if ($artist->songID == $song->songID)
                                @if ($x == 1)
                                <span style="color:#ffffff;line-height:46px;">, </span>
                                @endif
                            <div class="sub-string" style="color:#ffffff; margin-left: 10px; line-height:46px;">{{$artist->artistName}}</div>
                            @php $x++; @endphp
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex row">                     
                        <h5 class="title mt-2 mb-2" style="width: fit-content;font-size: 20px;">Sáng tác: </h5>
                        <div style="color:#ffffff;line-height:46px;width: fit-content;">{{$song->authorName}}</div>
                    </div>
                </div>
                <hr class="my-3 w-75 mx-auto" style="color:#ffffff">    
                <div class="row">
                    <p class='col-10 text-center mx-auto' style="color:#ffffff">{{$song->genreName}}<span style="margin: 10px;">***</span>{{$song->createAt}}</p>
                </div>
                <div class="row">
                    <p class='col-10 text-center mx-auto' style="color:#ffffff">{{$song->numberOfLike}} lượt thích <span style="margin: 10px;">***</span>{{$song->numberOfHear}} lượt nghe</p>
                </div>
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
                        <div class="progress-bar" id="myBar"></div>
                        @foreach($cmts as $cmt)
                        <div class="d-flex flex-column comment-section">
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info">
                                    <div>
                                        <img class="rounded-circle" src="{{asset('/uploads/images/avatar/'.$cmt->img)}}" width="40" height="40" style="margin-top: 4px;">
                                    </div>
                                    <div class="d-flex flex-column justify-content-start ml-2" style="margin-left: 10px;"><span
                                            class="d-block font-weight-bold name fw-bold">{{$cmt->name}}</span>
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
            <div class="bg-light">
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