<?php

namespace App\Http\Controllers;

use App\Models\Buuku;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreBuukuRequest;
use App\Http\Requests\UpdateBuukuRequest;



class BuukuController extends Controller
{

    public function index(Request $req)
    {

        if($req->has('search')){
            $data = Buuku::where('judul' ,'LIKE','%'. $req->input('search'). '%')->get();
        }else{

            $data = Buuku::inRandomOrder()->get();
        }

        return view ('home',[
            "icon"=>"img/icon_booku.png",
            "title"=>"home",
            "data"=>$data

        ]);
    }
    public function manga()
    {
        
        return view ('manga',[
            "icon"=>"img/icon_booku.png",
            "title"=>"manga",

            "manga"=>Buuku::inRandomOrder()->where('jenis', 'manga')->get(),


        ]);
    }
    public function novel()
    {
        return view ('novel',[
            "icon"=>"img/icon_booku.png",
            "title"=>"novel",
            "data"=>Buuku::all(),

            "novel"=>Buuku::inRandomOrder()->where('jenis', 'novel')->get(),


        ]);
    }
    public function computer()
    {
        return view ('computer',[
            "icon"=>"img/icon_booku.png",
            "title"=>"computer",
            "data"=>Buuku::all(),

            "computer"=>Buuku::inRandomOrder()->where('jenis', 'IT')->get(),

        ]);
    }
    public function admin(Request $req)
    {
        if($req->has('search')){
            $data = Buuku::where('judul' ,'LIKE','%'. $req->input('search'). '%')->get();
        }else{
            $data = Buuku::all();
        }
        return view ('admin',[
            "icon"=>"img/icon_booku.png",
            "title"=>"admin",
            "data"=>$data,
            "jumlah" => Buuku::all()->count(),
            "jumlahpsn" => Pesanan::all()->count()

        ]);
    }
    public function add()
    {
        return view ('tambahbuku',[
            "icon"=>"img/icon_booku.png",
            "title"=>"add",
        ]);
    }
    public function store(Request $request){
        $data = Buuku::create($request->except(['_token','submit']));
        if($request->hasfile('cover')){
            $request->file('cover')->move('upload/', $request->file('cover')->getClientOriginalName());
            $data->cover = $request->file('cover')->getClientOriginalName();
            $data->save();
        }
        return redirect('/admin');
    }




    public function delete($id){
        Buuku::where('id',$id)->delete();
        return redirect('/admin');
    }
    public function show($slug){
        return view ('buku',[
            "icon"=>"img/icon_booku.png",
            "title"=>"aa",

            "booku"=>Buuku::find($slug)
        ]);
    }



}
