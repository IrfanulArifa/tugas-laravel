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

    public function edit($id){
        $casts = DB::table('cast')->where('id',$id)->first();
        return view('cast.edit', compact('casts'));
    }

    public function update($id, Request $req){
        $req -> validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        $query = DB::table('cast')
                    ->where('id',$id)
                    ->update([
                        'nama'=>$req['nama'],
                        'umur'=>$req['umur'],
                        'bio'=>$req['bio']
                    ]);
        return redirect('/cast')->with('success','Berhasil Update Post');
    }

    public function destroy($id){
        $query = DB::table('cast')
                    ->where('id',$id)
                    ->delete();
        return redirect('/cast')->with('success','Berhasil Delete Post');
    }
}
