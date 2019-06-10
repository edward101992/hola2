<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users'; /// esto se debe hacer para manejar consultas con ELOQUENT
                              /// siempre q no se siga con el modelo standar de nombrar las cosas
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_profesion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function buscarEmail($email)
    {
       return User::where(compact('email'))->first();
    }

    public function isAdmin(){
        return $this->email === 'jorge@maio';
    }

    public function buscarProfesion(){ /// No sirvio -....
       return $this->belongsTo(ProfesionModel::class,'id_profesion');
    }
}

