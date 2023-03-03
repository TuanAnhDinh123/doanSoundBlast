<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class queryController extends Controller
{
    public function myMysic(){
        return view("my_music");
    }
    public function trending(){
        return view("trending");
    }
    public function musicNew(){
        return view("music_new");
    }
    public function category(){
        return view("category");
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