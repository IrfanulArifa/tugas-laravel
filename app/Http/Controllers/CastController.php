<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CastController extends Controller
{
    public function create(){
        return view('cast.create');
    }

    public function store(Request $req){
        $req -> validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        $query = DB::table('cast')->insert([
            "nama"=>$req["nama"],
            "umur"=>$req["umur"],
            "bio"=>$req["bio"]
        ]);
        return redirect('/cast')->with('success','Post Berhasil Disimpan');
    }

    public function index(){
        $cast = DB::table('cast')->get();
        return view('cast.cast', compact('cast'));
    }

    public function show($id){
        $casts = DB::table('cast')->where('id',$id)->first();
        return view('cast.show', compact('casts'));
    }
}
