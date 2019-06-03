<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/usuarios/{id}', function($id){
	return "El usuario numero : {$id}";
});
*/

Route::get('/usuarios/{id}', function($id){
	return "El usuario numero : {$id}";
})->where('id','[0-9]+');


Route::get('/usuarios/crear',function(){
	return "Aqui se crea el usuario";
});


Route::get('/usuarios/{nombre}/{apellido}/{edad}',function($nombre,$apellido,$edad){
	return "Hola usuario {$nombre} {$apellido} de {$edad}";
})->where('edad','[0-9]+');


Route::get('/usuarios/{nombre}/{apellido}/{apellido2}',function($nombre,$apellido,$apellido2){
	return "Hola {$nombre} {$apellido} {$apellido2}";
});

Route::get('/user/{id}',function($id){
	return "Id de Usuario {$id}";
})->where(['id' => '[\d]+']);

Route::get('/user/{peticion}',function($peticion){
	return "La peticion fue : {$peticion}";
})->where(['peticion'=> 'editar|eliminar|insertar']);

Route::get('/user/{name}',function($name){
	return "Nombre de Usuario {$name}";
})->where(['name'=> '[-\w]+']);




