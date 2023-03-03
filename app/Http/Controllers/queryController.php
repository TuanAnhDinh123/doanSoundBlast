<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class queryController extends Controller
{
    public function myMysic(){
        return view("my_music");
    }
    public function trending(){
        $songs = DB::table('song')
        ->join('album','song.albumID','album.albumID')
        ->orderBy('createAt','desc')
        ->orderBy('numberOfHear','desc')
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        return view("trending")->with(['songs'=>$songs, 'songArtists'=>$songArtists]);
    }
    public function musicNew(){
        $songs = DB::table('song')
        ->join('album','song.albumID','album.albumID')
        ->orderBy('createAt','desc')
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        return view("music_new")->with(['songs'=>$songs, 'songArtists'=>$songArtists]);
    }
    public function category(){
        $songs = DB::table('song')
        ->join('album','song.albumID','album.albumID')
        ->orderBy('createAt','desc')
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        $genres = DB::table('genre')
        ->select()->get();
        return view("category")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'genres'=>$genres]);
    }
    public function musician(){
        return view("top_musician");
    }
    public function search(){
        return view("music_search");
    }
    
    public function topSearch(){
        return view("music_top_search");
    }
    
    public function chart(){
        return view("chart_hight");
    }
    
    public function detail(){
        return view("detail_music");
    }

}