<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;
class AdminController extends Controller
{
    public function addcate(Request $request){
        $ten = $request->post('categoryName');
        $mota = $request->post('cateDes');
        $kq = DB::table('loai_san_pham')->insert(['tenLoai'=>$ten,'moTa'=>$mota]);
        return view('addcate') ->with(['kq'=>$kq]);
    }
    public function listcate(){
        $kq = DB::table('loai_san_pham')->select()->get();
        return view('listcate') ->with(['kq'=>$kq]);
    }
    public function deletecate($id){
        DB::table('loai_san_pham')->where('maLoai','=',$id)->delete();
        return $this->listcate();
    }
    public function editshowcate($id){
        $kq = DB::table('loai_san_pham')->select()->where('maLoai','=',$id)->get();
        $id = $kq->value('maLoai');
        $ten = $kq->value('tenLoai');
        $mota = $kq->value('moTa');
        return view('editcate') ->with(['id'=>$id, 'ten'=>$ten, 'mota'=>$mota]);
    }
    public function editcate(Request $request, $id){
        $ten = $request->post('categoryName');
        $mota = $request->post('cateDes');
        $kq = DB::table('loai_san_pham')->where('maLoai',$id)->update(['tenLoai'=>$ten,'moTa'=>$mota]);
        return $this->listcate();
    }

    //product handle
    public function listcateproduct(){
        $kq = DB::table('loai_san_pham')->select()->get();
        return view('addproduct') ->with(['kq'=>$kq]);
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
