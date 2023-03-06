<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sound Blast</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <!-- <link rel="icon" type="image/png" href="./assets/icons/icon_zing_mp3_60.png"> -->
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="min-height:100vh">
            <div id="sidebar" class="col-2" style="background:#3b1761">
                @include('sidebar')
            </div>
            <div class="col-10" style="background:#320c59">
                <div class="row header  ">
                    <div class="col-10">
                        <div class="row p-3 justify-content-center">
                            <div class="col-6" style="position: relative;">
                                <form class="form-inline my-2 my-lg-0" role="search" action="{{route('search')}}"
                                    method="get">
                                    <div class="form-group has-search">
                                        <span class="fa fa-search"></span>
                                        <input type="text"
                                            style="background:#6c3b9f;border:0px;border-radius: 20px; color:#ffffff;"
                                            name="name" class="form-control input-search"
                                            placeholder="Tìm kiếm bài hát..." required>
                                    </div>
                                    <!-- Mới đổi thẻ div qua thẻ button -->
                                    <button type="submit" class="icon-search" style="
                                                        position: absolute;
                                                        top: 3px;
                                                        right: 35px;
                                                        ">
                                        <svg xmlns="http://www.w3.org/2000/svg" color="#ffffff" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" color="#ffffff" width="30" height="30"
                            fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" color="#ffffff" width="30" height="30"
                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
                </div>
                <div class="container mr-2" style="width:1000px;margin-top: 100px;">
                    @yield('content')
                </div>
                
            </div>
            <div id="audio-player-container">
                <audio src="{{asset('uploads/music/'.$songs[0]->mp3)}}" preload="metadata" loop></audio>
                <div class="left-container col-3">
                    <div class="col-2">
                        <img class="img-thumbnail" id="left-container-img" src="{{asset('uploads/images/song/'.$songs[0]->img)}}" alt="">
                    </div>
                    <div class="col-10 pl-2">
                        <p class="" id="left-container-name">
                        {{$songs[0]->songName}}
                        </p>
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
</body>

</html>
<script>
$(document).ready(function() {
    $.lockfixed("#sidebar", {
        offset: {
            top: 20,
            bottom: 470
        }
    });
});
</script>
