<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;
class AdminController extends Controller
{
    public function addcate(Request $request){
        $ten = $request->post('categoryName');
        $kq = DB::table('genre')->insert(['genreName'=>$ten]);
        return $this->listcate();
    }
    public function listcate(){
        $listCates = DB::table('genre')->select()->get();
        return view('v_admin.list_cate') ->with(['listCates'=>$listCates]);
    }
    public function deletecate($id){
        DB::table('genre')->where('genreID','=',$id)->delete();
        return $this->listcate();
    }
    public function editshowcate($id){
        $kq = DB::table('genre')->select()->where('genreID','=',$id)->get();
        $id = $kq->value('genreID');
        $ten = $kq->value('genreName');
        return view('v_admin.edit_cate') ->with(['id'=>$id, 'ten'=>$ten]);
    }
    public function editcate(Request $request){
        $ten = $request->post('categoryName');
        $id = $request->post('categoryID');
        $kq = DB::table('genre')->where('genreID',$id)->update(['genreName'=>$ten]);
        return $this->listcate();
    }

    // Artist Handle
    public function addArtist(Request $request){
        $ten = $request->post('artistName');
        $kq = DB::table('artist')->insert(['artistName'=>$ten]);
        return $this->listArtist();
    }
    public function listArtist(){
        $listArtists = DB::table('artist')->select()->get();
        return view('v_admin.list_artist') ->with(['listArtists'=>$listArtists]);
    }
    public function deleteartist($id){
        DB::table('artist')->where('artistID','=',$id)->delete();
        return $this->listArtist();
    }
    public function editShowartist($id){
        $kq = DB::table('artist')->select()->where('artistID','=',$id)->get();
        $id = $kq->value('artistID');
        $ten = $kq->value('artistName');
        return view('v_admin.edit_artist') ->with(['id'=>$id, 'ten'=>$ten]);
    }
    public function editArtist(Request $request){
        $ten = $request->post('artistName');
        $id = $request->post('artistID');
        $kq = DB::table('artist')->where('artistID',$id)->update(['artistName'=>$ten]);
        return $this->listArtist();
    }

    // Author Handle
    public function addAuthor(Request $request){
        $ten = $request->post('authorName');
        $kq = DB::table('author')->insert(['authorName'=>$ten]);
        return $this->listAuthor();
    }
    public function listAuthor(){
        $listAuthors = DB::table('author')->select()->get();
        return view('v_admin.list_author') ->with(['listAuthors'=>$listAuthors]);
    }
    public function deleteAuthor($id){
        DB::table('author')->where('authorID','=',$id)->delete();
        return $this->listAuthor();
    }
    public function editShowAuthor($id){
        $kq = DB::table('author')->select()->where('authorID','=',$id)->get();
        $id = $kq->value('authorID');
        $ten = $kq->value('authorName');
        return view('v_admin.edit_author') ->with(['id'=>$id, 'ten'=>$ten]);
    }
    public function editAuthor(Request $request){
        $ten = $request->post('authorName');
        $id = $request->post('authorID');
        $kq = DB::table('author')->where('authorID',$id)->update(['authorName'=>$ten]);
        return $this->listAuthor();
    }

    // Song handle
    public function listSong(){
        $songs = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
        ->join('author','song.authorID','author.authorID')
        ->orderBy('songID')
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        return view('v_admin.list_song') ->with(['songs'=>$songs, 'artists'=>$songArtists]);
    }
    public function addSongSelectData(){
        $genres = DB::table('genre')->select()->get();
        $artists = DB::table('artist')->select()->get();
        $authors = DB::table('author')->select()->get();
        return view('v_admin.add_song') ->with(['genres'=>$genres, 'artists'=>$artists, 'authors'=>$authors]);
    }
    public function addSong(Request $request){
        //Store file
        $image = $request->file('txtImg');
        $mp3 = $request->file('txtMp3');
        $image->move('uploads/images/song',$image->getClientOriginalName());
        $mp3->move('uploads/music',$mp3->getClientOriginalName());
        //add song to song table
        $theloai = $request->post('txtGenre');
        // $casi = $request->getlist('txtArtist');
        $casi['txtArtist'] = $request->txtArtist;
        // dd($casi, $casi['txtArtist'][0]);
        $nhacsi= $request->post('txtAuthor');
        $ten = $request->post('txtName');
        $hinh = $image->getClientOriginalName();
        $nhac = $image->getClientOriginalName();
        $ngay = $request->post('txtDate');
        DB::table('song')->insert(['songName'=>$ten,'img'=>$hinh,'mp3'=>$nhac,'authorID'=>$nhacsi,'genresID'=>$theloai,'createAt'=>$ngay]);
        
        // add artist to song-artist table
        $songInfo = DB::table('song')
        ->orderBy('songID', 'desc')->first();
        for ($i=0;$i<2;$i++){
            DB::table('song-artist')->insert(['songID'=>$songInfo->songID, 'artistID'=>$casi['txtArtist'][$i]]);
        }
        
        return $this->listsong();
    }
    public function deleteSong($id){
        DB::table('song')->where('songID','=',$id)->delete();
        DB::table('song-artist')->where('songID','=',$id)->delete();
        return $this->listsong();
    }
    public function editshowSong($id){
        $song = DB::table('song')
        ->join('genre','song.genresID','genre.genreID')
        ->join('author','song.authorID','author.authorID')
        ->where('song.songID', $id)
        ->select()->get()->first();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->where('song.songID', $id)
        ->select()->get();
        $genreList = DB::table('genre')->select()->get();
        $artistList = DB::table('artist')->select()->get();
        $authorList = DB::table('author')->select()->get();
        return view('v_admin.edit_song')
        ->with(['genreList'=>$genreList, 'artistList'=>$artistList, 'authorList'=>$authorList, 'song'=>$song, 'songArtists'=>$songArtists]);
    }
    public function editSong(Request $request, $id){
        
        //add song to song table
        $theloai = $request->post('txtGenre');
        $casi['txtArtist'] = $request->txtArtist;
        $nhacsi= $request->post('txtAuthor');
        $ten = $request->post('txtName');
        $ngay = $request->post('txtDate');
        DB::table('song')
        ->where('songID', $id)
        ->update(['songName'=>$ten,'authorID'=>$nhacsi,'genresID'=>$theloai,'createAt'=>$ngay]);
        //Store file
        if($request->file('txtImg')!=null){
            $image = $request->file('txtImg');
            $image->move('uploads/images/song',$image->getClientOriginalName());
            $hinh = $image->getClientOriginalName();
            DB::table('song')
            ->where('songID', $id)
            ->update(['img'=>$hinh]);
        }
        if($request->file('txtMp3')!=null){
            $mp3 = $request->file('txtMp3');
            $mp3->move('uploads/music',$mp3->getClientOriginalName());
            $nhac = $image->getClientOriginalName();
            DB::table('song')
            ->where('songID', $id)
            ->update(['mp3'=>$nhac]);
        }
        // add artist to song-artist table
        for ($i=0;$i<2;$i++){
            if ($i == 0) {
                DB::table('song-artist')
                ->where('songID', $id)
                ->take(1)
                ->update(['artistID'=>$casi['txtArtist'][$i]]);
            } else {
                DB::table('song-artist')
                ->orderBy('song-artistID', 'desc')
                ->where('songID', $id)
                ->take(1)
                ->update(['artistID'=>$casi['txtArtist'][$i]]);
            }
        }
        
        return $this->listsong();
    }
}
