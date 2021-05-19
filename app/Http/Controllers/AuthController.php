<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function daftar(Request $req){
        $namadepan = $req['firstname'];
        $namablkg = $req['lastname'];
        $gender = $req['gender'];
        $nas = $req['nasionality'];
        $language = $req['language'];
        $bio  = $req['bio'];

        return view('signin',compact('namadepan','namablkg','gender','nas','language','bio'));
    }
}
