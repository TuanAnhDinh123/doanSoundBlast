<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    public function myMysic(){
        return view("my_music");
    }
    public function trending(){
        $songs = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
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
        ->join('genre','song.genresID','genre.genreID')
        ->orderBy('createAt','desc')
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        return view("music_new")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists]);
    }
    public function category(){
        $songs = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
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
        $songs = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
        ->select()->get();
        $artistLists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        // ->selectRaw('SUM(numberOfLike) as sumLike')
        ->groupBy('song-artist.artistID')
        ->orderByRaw('SUM(numberOfLike) desc')
        ->select()->limit(7)->get();
        $test = DB::table('song')->sum('numberOfLike');

        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->orderBy('numberOfLike','desc')
        ->select()->get();
        
        return view("top_musician")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'artistLists'=>$artistLists, 'test'=>$test]);
    }
    public function search(Request $request){
        $key = $request -> get('name');
        // get search data
        $songs = DB::table('song')
        ->where('songName', 'like' , "%".$key."%" )
        ->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        $result = 1;
        if ($songs->isEmpty()){
            $result = 0;
        }
        return view("music_search")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'result'=>$result]);
    }
    
    public function topSearch(){
        $songs = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
        ->orderBy('numberOfSearch','desc')
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        return view("music_top_search")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists]);

    }
    
    public function chart(){
        return view("chart_hight");
    }
    
    public function detail(){
        return view("detail_music");
    }

}