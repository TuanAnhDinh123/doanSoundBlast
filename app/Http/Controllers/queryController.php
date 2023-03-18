<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class queryController extends Controller
{
    public function myMusic(){
        $userID = Auth::id();
        $user = $this->authUser();
        $songs = DB::table('user-song')
        ->where('userID', $userID)
        ->join('song','song.songID','user-song.songID')
        ->orderBy('accessAt','desc')
        ->select()->take(4)
        ->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        $songTrends = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
        ->orderBy('createAt','desc')
        ->orderBy('numberOfHear','desc')
        ->select()->take(5)->get();
        
        return view("my_music")
            ->with(['user'=>$user, 'songs'=>$songs, 'songArtists'=>$songArtists, 'songTrends'=>$songTrends]);
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
        $user = $this->authUser();
        return view("trending")
            ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'user'=>$user]);
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
        $userID = Auth::id();
        $user = $this->authUser();
        return view("music_new")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'user'=>$user]);
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
        $userID = Auth::id();
        $user = $this->authUser();
        return view("category")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'genres'=>$genres, 'user'=>$user]);
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
        $user = $this->authUser();
        return view("top_musician")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'artistLists'=>$artistLists, 'user'=>$user, 'test'=>$test]);
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

        $user = $this->authUser();
        return view("music_search")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'result'=>$result, 'user'=>$user]);
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
        $user = $this->authUser();
        return view("music_top_search")
        ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'user'=>$user]);

    }
    
    public function chart(){
        $songs = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
        ->orderBy('createAt','desc')
        ->orderBy('numberOfHear','desc')
        ->select()->take(8)->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        $user = $this->authUser();
        return view("chart_hight")
            ->with(['songs'=>$songs, 'songArtists'=>$songArtists, 'user'=>$user]);
    }
    
    public function detail($id){
        $songs = DB::table('song')
        ->where('song.songID', $id)
        ->join('genre','song.genresID','genre.genreID')
        ->join('author','song.authorID','author.authorID')
        ->select()->get()->first();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        $cmts = DB::table('reviewsong')
        ->where('reviewsong.songID',$id)
        ->join('users','users.id','reviewsong.userID')
        ->orderBy('cmtAt', 'desc')
        ->select()->get();
        // handle display time
        Carbon::setLocale('vi'); // hiển thị ngôn ngữ tiếng việt.
        $now = Carbon::now();
        foreach ($cmts as $cmt){
            $dt = Carbon::parse($cmt->cmtAt);
            $diff = $dt->diffForHumans($now); //12 phút trước
            $cmt->cmtAt = $diff;
        }
        $user = $this->authUser();
        return view("detail_music")
        ->with(['song_ID'=>$id, 'user'=>$user, 'song'=>$songs, 'songArtists'=>$songArtists,'cmts'=>$cmts]);
    }
    public function addCmt(Request $request){
        $songID = $request->input('songID');
        $userID = $request->input('userID');
        $cmt = $request->input('cmtContent');
        DB::table('reviewsong')
        ->insert(['reviewContent'=>$cmt, 'songID'=>$songID, 'userID'=>$userID, "cmtAt"=> Carbon::now()]);
        return $this->detail($songID);
    }
    public function feedback(Request $request){
        $url = $request->input('txtURL');
        $userID = $request->input('txtUserID');
        $feedback = $request->input('feedback');
        DB::table('feedback')
        ->insert(['fbContent'=>$feedback, 'userID'=>$userID, 'fbContent'=>$feedback]);
        return redirect($url);
    }
    public function authUser() {
        $userID = Auth::id();
        $user = DB::table('users')
            ->where('id', $userID)
            ->get()->first();
        return $user; 
    }
    

    //Handle Ajax
    public function changeLike($id, $number){
        DB::table('song')
            ->where('songID', $id)
            ->update(['numberOfLike'=>$number]);
    }
    public function changeHear($id, $userID){
        $song = DB::table('song')
        ->where('songID', $id)
        ->select('numberOfHear')->get()->first();
        DB::table('song')
        ->where('songID', $id)
        ->update(['numberOfHear'=>$song->numberOfHear+1]);
        if ($userID > 0) {
            echo $userID;
            $kq = DB::table('user-song')
            ->insert(['songID'=>$id, 'userID'=>$userID, "accessAt"=> Carbon::now()]);
        } 
        
    }
    
    
}