<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{

    use HasFactory ;

    # Especificamos el nombre real de la tabla
    protected $table = "tarea" ;

    # Especificamos el nombre real de la clave primaria
    protected $primaryKey = "idTar" ;


    # Indicamos que el modelo no utiliza campos created_at y update_at
    public $timestamps = false;

    /**
     * Propiedades que son rellenables de forma masiva
     */
    protected $fillable = ["idUsu", "fecha", "texto", "completa"];

    public function casts():array
    {
        return ["fecha" => "datetime",
                 "completa" => "boolean"];
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, "idUsu") -> first() ;
    }

    public function etiquetas()
    {
        return $this->belongToMany(Etiqueta::class, "tarea_etiqueta", "idTar", "IdEti");
    }
}






