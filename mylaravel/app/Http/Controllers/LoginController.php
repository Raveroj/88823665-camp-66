<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    function login  (Request $req){
        // print_r($req -> email);
        // print_r($req -> password);
        $user = User::where('email',$req->email)->first();
        if($user != null && Hash::check($req -> password , $user-> password)){
            $req->session()->put('user',$user);
            return redirect('/home');
        }else{
            $req->session()->flash('error','กรุณาตรวจสอบอีกครั้ง');
            return redirect("/login");
        }
    
    }
}

