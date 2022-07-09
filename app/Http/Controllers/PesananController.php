<?php

namespace App\Http\Controllers;

use session;
use App\Models\Pesanan;
use App\Models\Buuku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;


class PesananController extends Controller
{
    public function index(){
        return view('pembelian',[
            "title"=>"bs",
            "icon"=>"img/icon_booku.png",
            "data"=>Pesanan::all(),
            "jumlahpsn" => Pesanan::all()->count()
        ]);
    }
    public function delete($id){
        Pesanan::where('id',$id)->delete();
        return redirect('/pembelian');
    }
    public function pesan($slug)
    {
        $buku=Buuku::find($slug);
        $pesanan= new Pesanan;
        $pesanan->nama= request()->input('nama');
        $pesanan->no_telpon=request()->input('no_hp');
        $pesanan->alamat=request()->input('alamat');
        $pesanan->metod_bayar=request()->input('metod');
        $pesanan->buku_pesanan=$buku->judul;
        $pesanan->harga_pesanan=$buku->harga;
        $pesanan->save();
        return redirect('/');
    }
}
