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
        ->select()->get();
        $songArtists = DB::table('song')
        ->join('song-artist','song.songID','song-artist.songID')
        ->join('artist','artist.artistID','song-artist.artistID')
        ->select()->get();
        return view('v_admin.list_song') ->with(['songs'=>$songs, 'artists'=>$songArtists]);
    }
    public function addproduct(Request $request){
        //Store file
        $image = $request->file('productPic');
        $image->move('uploads/images',$image->getClientOriginalName());
        //add data to database
        $loai = $request->post('cateName');
        $ten = $request->post('productName');
        $gia = $request->post('productPrice');
        $hinh = $image->getClientOriginalName();
        $date = $request->post('productDate');
        DB::table('san_pham')->insert(['tenSP'=>$ten,'donGia'=>$gia,'hinh'=>$hinh,'ngayTao'=>$date,'maLoai'=>$loai]);
        return $this->listproduct();
    }
    public function listproduct(){
        $kq = DB::table('san_pham')->join('loai_san_pham','san_pham.maLoai','loai_san_pham.maLoai')->get();
        return view('listproduct') ->with(['kq'=>$kq]);
    }
    public function deleteproduct($id){
        DB::table('san_pham')->where('maSp','=',$id)->delete();
        return $this->listproduct();
    }
    public function editshowproduct($id){
        $kq = DB::table('san_pham')->select()->where('maSp','=',$id)->get();
        $loai = $kq->value('maLoai');
        $ten = $kq->value('tenSP');
        $gia = $kq->value('donGia');
        $hinh = $kq->value('hinh');
        $date = $kq->value('ngayTao');
        $kq = DB::table('loai_san_pham')->select()->get();
        return view('editproduct') ->with(['id'=>$id, 'loai'=>$loai, 'ten'=>$ten, 'gia'=>$gia, 'hinh'=>$hinh, 'date'=>$date,'kq'=>$kq]);
    }
    public function editproduct(Request $request, $id){
         //Store file
         if($request->file('productPic')!=null){
             $image = $request->file('productPic');
             $image->move('uploads/images',$image->getClientOriginalName());
             $hinh = $image->getClientOriginalName();
         }
         //add data to database
         $loai = $request->post('cateName');
         $ten = $request->post('productName');
         $gia = $request->post('productPrice');
         $date = $request->post('productDate');
         if(isset($hinh)){
             DB::table('san_pham')->where('maSp',$id)->update(['tenSP'=>$ten,'donGia'=>$gia,'hinh'=>$hinh,'ngayTao'=>$date,'maLoai'=>$loai]);
         }
         else{
            DB::table('san_pham')->where('maSp',$id)->update(['tenSP'=>$ten,'donGia'=>$gia,'ngayTao'=>$date,'maLoai'=>$loai]);
         }
         return $this->listproduct();
    }
}
