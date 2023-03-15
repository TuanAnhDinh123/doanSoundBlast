<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sound Blast</title>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">       
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/player.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,0" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    

    <!-- <link rel="icon" type="image/png" href="./assets/icons/icon_zing_mp3_60.png"> -->
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="min-height:745px">
            <div class=" col-2" style="background:#3b1761">
                @include('sidebar')
            </div>
            <div class="col-10" style="background:#320c59">
                <div class="row  ">
                    <div class="col-10">
                        <div class="row p-3 justify-content-center">
                            <div class="col-6" style="position: relative;">
                                <form class="form-inline my-2 my-lg-0" role="search" action="{{route('search')}}">
                                    <div class="form-group has-search">
                                        <!-- <span class="fa fa-search"></span> -->
                                        <input type="text" style="background:#6c3b9f;border:0px;border-radius: 20px;"
                                            name="name" class="form-control input-search"
                                            placeholder="Tìm kiếm bài hát">
                                    </div>
                                    <button type="submit" class="icon-search">
                                        <div class="icon-search" style="
                                                        position: absolute;
                                                        top: 5px;
                                                        right: 31px;
                                                    ">
                                        <svg xmlns="http://www.w3.org/2000/svg" color="#ffffff" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>

                                    </button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 row dropdown d-flex align-items-center ">
                        <div class="col-4" type="button">
                            <div class="dropdown" style="border-radius:10px" width="30" height="30">
                            <button  data-bs-toggle="dropdown" aria-expanded="false">
                            <svg color="white" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg>                           
                            </button>
                                <ul class="dropdown-menu mt-2" style="background:#6633CC" >
                                    <li class="dropdown-item"><a class="nav-link active" type="button" data-bs-toggle="modal"   href="#" >Giới thiệu</a></li>
                                    <li class="dropdown-item"><a class="nav-link active"  href="#" >Liên Hệ</a></li>
                                    @if (!empty($user))    
                                        <li class="dropdown-item"><a class="nav-link active" type="button" data-toggle="modal" data-bs-target="#myModal">Send Feedback</a></li>
                                    @else
                                        <li class="dropdown-item"><a class="nav-link active" type="button" data-toggle="tooltip" title="Đăng nhập để gửi feedback">Send Feedback</a></li>
                                    @endif
                                </ul>
                            </div>
                            
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Gửi feedback cho chúng tôi</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                <form action="feedback-request" class="bg-light p-3 my-3" style="align-items:center" method="post">
                                {{csrf_field() }}
                                @if (!empty($user))    
                                    <input type="text" name="txtURL" class="d-none" value="{{url()->current()}}">
                                    <input type="text" name="txtUserID" class="d-none" value="{{$user->id}}">
                                    <div class="form-group">
                                        <textarea name="feedback" id="" cols="50" rows="5" class="form-control border border-dark"></textarea>
                                    </div>                    
                                    <div class="form-group py-3 ">
                                        <input type="submit" value="Gửi" class="btn btn-primary mb-2 ">
                                    </div>
                                @endif
                                </form>
                                </div>

                                <!-- Modal footer
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div> -->

                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="dropdown ms-5" style="border-radius:10px;align-items-center ">
                                <button data-bs-toggle="dropdown" aria-expanded="false" width="30" height="30" >
                                @if (!empty($user))    
                                <img class="img-thumbnail img-thumbnail-avatar" src="{{asset('/uploads/images/avatar/'.$user->img)}}" alt="" >
                                @else
                                <img class="img-thumbnail img-thumbnail-avatar" src="{{asset('/uploads/images/avatar/unknow.png')}}" alt="" >
                                @endif
                            </button>
                                <ul class="dropdown-menu mt-3" style="background:#6633CC">
                                @if (!empty($user))    
                                <li class="dropdown-item"><a class="nav-link active" class="dropdown-item" href="/logout">Đăng Xuất</a></li>
                                @else                        
                                <li class="dropdown-item"><a class="nav-link active" href="/login">Đăng Nhập</a></li>
                                @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="container mt-5 mr-2" style="width:1000px">
                    @yield('content')
                </div>
                
            </div>
            <div class="container-buffer" ></div>
            <div id="audio-player-container">
                <audio src="{{asset('uploads/music/EmDongY.mp3')}}" preload="metadata" loop></audio>
                <div class="left-container col-3">
                    <div class="col-2">
                        <img class="img-thumbnail" id="left-container-img" src="" alt="">
                    </div>
                    <div class="col-10 pl-2">
                    @if (!empty($user))    
                        <p class="d-none" id="userIDcontainer">{{$user->id}}</p>
                    @else
                        <p class="d-none" id="userIDcontainer">0</p>
                    @endif
                        <p class="" id="left-container-name"></p>
                        <p id="saveIndex" class="d-none">0</p>    
                    </div>
                </div>
                <div class="center-container col-6">
                    <div class="button-container">
                        <button id="pre-icon"><i class="fa fa-step-backward"></i></button>
                        <button id="play-icon">
                            <i class="fa-regular fa-circle-play"></i>
                        </button>
                        <button id="next-icon"><i class="fa fa-step-forward"></i></button>
                    </div>
                    <div class="seek-container">
                        <span id="current-time" class="time">0:00</span>
                        <input type="range" id="seek-slider" max="100" value="0">
                        <span id="duration" class="time">0:00</span>
                    </div>
                </div>
                <div class="right-container col-3 d-flex">
                    <div class="volume-container">
                        <output id="volume-output">100</output>
                        <input type="range" id="volume-slider" max="100" value="100">
                        <button id="mute-icon"><i class="fa-solid fa-volume-high"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/player.js')}}"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
</body>

</html>