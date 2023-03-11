<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        // Get different time
        $date1 = carbon::now();
        foreach ($songs as $song){
            $date2 = $song->createAt;
            $diff = abs(strtotime($date2) - strtotime($date1));
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            if ($years > 0) {
                $kq = $years." năm trước";
            } elseif ($months > 0) {
                $kq = $months." tháng trước";
            } else {
                $kq = $days." ngày trước";
            }
            $song->diffTime = $kq;
        }
        
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
        // Increte number of search to DB
        foreach ($songs as $song) {
            $searchNum = $song->numberOfSearch + 1;
            DB::table('song')
            ->where('songID', $song->songID)
            ->update(['numberOfSearch'=>$searchNum]);
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

    //Handle Ajax
    public function changeLike($id, $number){
        DB::table('song')
            ->where('songID', $id)
            ->update(['numberOfLike'=>$number]);
    }
    public function changeHear($id){
        $songs = DB::table('song')
        ->where('songID', $id)
        ->select('numberOfHear')->get();
        foreach ($songs as $song){
        DB::table('song')
            ->where('songID', $id)
            ->update(['numberOfHear'=>$song->numberOfHear+1]);
        }
    }

    // Handle Login
    public function login(){
        return view('login');
    }
}