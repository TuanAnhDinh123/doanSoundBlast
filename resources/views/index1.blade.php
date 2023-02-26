<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sound Blast</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/header.css')}}" />
    <link rel="stylesheet" href="{{asset('css/themes.css')}}" />
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/content.css')}}" />
    <link rel="stylesheet" href="{{asset('css/personal.c')}}ss">
    <link rel="stylesheet" href="{{asset('css/player.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.c')}}ss">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,0"
    />
    <link rel="icon" type="image/png" href="./assets/icons/icon_zing_mp3_60.png">
  </head>
  <body>
    <!-- Header -->
    <div id="root">
      <div class="layout">
        <!-- Header -->
        <div class="header"></div>
        <!-- Sidebar -->
        <div class="sidebar"></div>
        <!-- Content personal -->
        <div class="content active personal"></div>
        <!-- Content explore -->
        <div class="content explore"></div>
        <!-- Content zingchart -->
        <!-- <div class="content zingchart">zingchart</div> -->
        <!-- Content radio -->
        <!-- <div class="content radio">radio</div> -->
        <!-- Content following -->
        <!-- <div class="content following">following</div> -->
        <!-- Content newmusic -->
        <!-- <div class="content newmusic">newmusic</div> -->
        <!-- Content category -->
        <!-- <div class="content category">category</div> -->
        <!-- Content top100 -->
        <!-- <div class="content top100">top100</div> -->
        <!-- Content mv -->
        <!-- <div class="content mv">mv</div> -->
        <!-- Player music -->
        <div class="player-music">music</div>
        <!-- Modal nowPlaying -->
        <div class="playing__modal">        
        </div>
        <!-- Modal theme -->
        <div class="theme__modal"></div>
      </div>
    </div>
    

    <script src="{{asset('js/Header.js')}}"></script>
    <script src="{{asset('js/themes.js')}}"></script>
    <script src="{{asset('js/Sidebar.js')}}"></script>
    <script src="{{asset('js/Explore.js')}}"></script>
    <script src="{{asset('js/PersonalPlayer.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
  </body>
</html>
