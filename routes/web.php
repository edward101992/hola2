<?php


/*
Route::get('/usuarios', function () {
    return view('welcome');
});

*/

/*
Route::get('/usuarios/{id}', function($id){
	return "El usuario numero : {$id}";
});
*/

/*
Route::get('/usuarios/{id}', function($id){
	return "El usuario numero : {$id}";
})->where('id','[0-9]+');

*/

Route::get('/usuarios', 'UsuarioController@inicio');

Route::get('/usuarios2', 'UsuarioController@inicioUsuario2');

Route::get('/usuarios/{id}', 'UsuarioController@usuarioId')
	->where('id','[0-9]+');


Route::get('/usuarios/crear','UsuarioController@usuarioCrear');


Route::get('/usuarios/{nombre}/{apellido}/{edad}', 'UsuarioController@usuarioNombreApellidoEdad')
	->where('edad','[0-9]+');


Route::get('/usuarios/{nombre}/{apellido}/{apellido2?}','UsuarioController@preguntaUsuarioDosApellidos');


Route::get('/user/{id}','UserController@userId')
	->where(['id' => '[\d]+']);


Route::get('/user/{peticion}','UserController@userPeticion')
	->where(['peticion'=> 'editar|eliminar|insertar']);


Route::get('/user/{name}','UserController@userName')
	->where(['name'=> '[-\w]+']);




