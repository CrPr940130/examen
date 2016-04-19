<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', function () {
    return view('index');
});

get('/registro', function () {
    return view('registro');
});

get('/acceder', function () {
    return view('acceder');
});

post('/login','LoginController@store');

post('/registrar', 'baseController@registra');

Route::group(['middleware' => 'admin'], function(){
    get('/administrador','administradorController@index');
    get('/logout', 'administradorController@logOut');
    get('/administrador/libros','LibrosController@index');
    get('/administrador/RegistroMascota', function () {
    	return view('administrador.RegistroMascota');
	});
    post('/registrarMascota', 'baseController@registro');
    get('/administrador/detalle/{id}',function($id){
    	return view('administrador.detalle',['id'=>$id]);
    });
});