<?php

namespace App\Http\Controllers;

use session;
use App\Models\Admin;
use App\Models\Buuku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;


class AdminController extends Controller
{
    public function Login(Request $req)
    {
        $admin= Admin::where('admin_name', $req->input('admin_name'))->get();
        if(Crypt::decrypt($admin[0]->password)==$req->input('Password')){
            return redirect('/admin');
        }else{
            return redirect('/');

        }
    }
}
