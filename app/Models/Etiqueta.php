<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etiqueta extends Model
{

    use HasFactory ;

    # Especificamos el nombre real de la tabla
    protected $table = "etiqueta" ;

    # Especificamos el nombre real de la clave primaria
    protected $primaryKey = "idEti" ;

    # Indicamos que el modelo no utiliza campos created_at y update_at
    public $timestamps = false;

    /**
     * Devuelve la coleccion de tareas que usan una determinada etiqueta
     *
     * @return void
     */
    public function tareas()
    {
        return $this->belongsToMany(Tarea::class, "tarea_etiqueta", "idEti", "idTar");

    }
}
