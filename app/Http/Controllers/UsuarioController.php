<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
   /*  public function inicio()  
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
  */
 
 /*
 public function inicio(){
    $users = DB::table('users')->get();
    //dd($users);
    
    $titulo = "Lista de Usuarios Base Datos";
    return view('Usuarios',compact('titulo','users'));
 }

*/
//AQUI VOY A USAR ELOQUENT PARA HACER EL LLAMADO DE LOS USUARIOS1

 public function inicio(){
    $users = User::all();
    $titulo = "Usuarios con ELOQUENT";
    return view('Usuarios',compact('titulo','users'));

//    return view('Usuarios')
//    ->with('users',User::all())
//    ->with('titulo','Usuarios con ELOQUENT');
//    
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

/*
   
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
*/

    public function inicioUsuario2(){ 
        $usuarios2 = DB::table('users')->get();
        $titulo = "Lista Usuarios 2 de Base Datos";
        return view('Usuarios2',compact('titulo','usuarios2'));
    }
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
