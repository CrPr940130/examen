<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request){
            if (Auth::check()){
                return redirect('/administrador');
            }
        return view('website.acceder');
    }

    public function store(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $usuario =Auth::user();
            $request->session()->put('administrador',$usuario);
            return redirect('/administrador');
        }
        return redirect('/acceder');
    }
}
