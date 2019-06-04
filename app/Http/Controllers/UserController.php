<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userId($id){
   	    return "Id de Usuario {$id}";
   }

   public function userPeticion($peticion){
   		return "La peticion fue : {$peticion}";
   }

   public function userName($name){
   		return "Nombre de Usuario {$name}";
   }
}
