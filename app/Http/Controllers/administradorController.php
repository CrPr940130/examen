<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class administradorController extends Controller
{
    public function index(){
        return view('administrador.panel');
    }

    public function logOut()
    {
        session()->flush();
        return redirect('/');
    }
}
