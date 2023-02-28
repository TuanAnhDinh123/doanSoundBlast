<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class queryController extends Controller
{
    public function testView(){
        return view("v_newRelease");
    }
}
