<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(){
        return view('Register');
    }

    public function welcome(Request $request){
        return view('Welcome',['nama_depan' => $request["nama_depan"],'nama_belakang' => $request["nama_belakang"]]);
    }
}
