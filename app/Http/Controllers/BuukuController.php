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

    public function index()
    {
        return view ('home',[
            "icon"=>"img/icon_booku.png",
            "title"=>"home",
            "data"=>Buuku::all(),
            "manga"=>Buuku::where('jenis', 'manga')->get(),
            "novel"=>Buuku::where('jenis', 'novel')->get(),
            "computer"=>Buuku::where('jenis', 'IT')->get(),
            // "mangga"=>Buuku::where('jenis','==',"mangga")
        ]);
    }
    public function manga()
    {
        return view ('manga',[
            "icon"=>"img/icon_booku.png",
            "title"=>"manga",
            "data"=>Buuku::all(),
            "manga"=>Buuku::where('jenis', 'manga')->get(),

            // "mangga"=>Buuku::where('jenis','==',"mangga")
        ]);
    }
    public function novel()
    {
        return view ('novel',[
            "icon"=>"img/icon_booku.png",
            "title"=>"novel",
            "data"=>Buuku::all(),

            "novel"=>Buuku::where('jenis', 'novel')->get(),

            // "mangga"=>Buuku::where('jenis','==',"mangga")
        ]);
    }
    public function computer()
    {
        return view ('computer',[
            "icon"=>"img/icon_booku.png",
            "title"=>"computer",
            "data"=>Buuku::all(),

            "computer"=>Buuku::where('jenis', 'IT')->get(),
            // "mangga"=>Buuku::where('jenis','==',"mangga")
        ]);
    }
    public function admin()
    {
        return view ('admin',[
            "icon"=>"img/icon_booku.png",
            "title"=>"admin",
            "data"=>Buuku::all(),
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
