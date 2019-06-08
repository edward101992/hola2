<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
     public function inicio()
    {
    	$usuarios = [
    		'juan',
    		'maria',
    		'pedro',
    	];
    	 return view ('Usuarios', [
    	 	'usuarios' => $usuarios,
    	 	'titulo'=> 'Lista de Usuarios'
    	]);
 	}
    
    public function inicioUsuario2()
 	{
 		if(request()->has('vacio')){
 			$usuarios2=[];
 		}else{
			$usuarios2 = [
    		'laura',
    		'sebas',
    		'santi',
    	];
	}
 	$title2 = 'LISTA DE USUARIOS 2';
    	
    //	dd(compact('title2','usuarios2'));
    return view ('Usuarios2', compact('usuarios2', 'title2'));	 	
 	}

/*
  public function inicioUsuario2()
 	{
 			$usuarios2 = [
    		'laura',
    		'sebas',
    		'santi',
    	];
    	dd(compact())
    	 return view ('Usuarios2')
    	 ->with('usua2',$usuarios2)
    	 ->with('title2','TITULO DE USUARIOS 2');
    	 	
 	}

*/

/*
    public function usuarioId($id){
    	return "El usuario numero : {$id}";
    }
*/
    public function UserId2($id){
       return view ('mostrarUsuarioIdView',compact('id'));
   }

    public function usuarioId($id){
        return view ('mostrarUsuarioIdView',compact('id'));
    }

    public function usuarioNombreApellidoEdad($nombre,$apellido,$edad){
    	$nombre = ucfirst("$nombre");
		$apellido = ucfirst("$apellido");
    	return "Hola usuario {$nombre} {$apellido} de {$edad}";
    }


    public function preguntaUsuarioDosApellidos($nombre,$apellido,$apellido2=null){
	    if($apellido2){
			return "Hola {$nombre} {$apellido} {$apellido2} - El usuario si tiene dos apellidos";
		}else{
			return"El usuario solo tiene un apellido";
		}
    }

    public function usuarioCrear(){
    	return "Aqui se crea el usuario";
    }
}
