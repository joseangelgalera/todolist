<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    
    # Especificamos el nombre real de la tabla
    protected $table = "usuario" ;

    # Especificamos el nombre real de la clave primaria
    protected $primaryKey = "idUsu" ;

     protected $fillable = ["nombre", "email"];

     protected $hidden = ["password"];

     public function tareas()
     {
        return $this->hasMany(\app\Models\Tarea::class, 'idUsu');
     }

     
}



