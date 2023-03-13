<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
// use Auth;
use Session;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }
    public function validateUser(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $id = Auth::id();
            return redirect()->route('trending');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
           
        //Store file
        $data = $request->all();
        $image = $request->file('img');
        if (!empty($image)) {
            $image->move('uploads/images/avatar',$image->getClientOriginalName());
            $hinh = $image->getClientOriginalName();
            $data['img'] = $hinh;
        } else {
            $data['img'] = 'default.jpg';
        }
        $check = $this->create($data);
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $id = Auth::id();
            return redirect()->route('trending');
        }
        return redirect()->route('login');
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'password' => Hash::make($data['password']),
        'img' => $data['img']
      ]);
    }  
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    } 
}
