<?php

namespace App\Http\Controllers;

use App\Models\Buuku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return ([
            "data"=>Buuku::all(),
            // "mangga"=>Buuku::where('jenis','==',"mangga")
        ]);
    }
}
