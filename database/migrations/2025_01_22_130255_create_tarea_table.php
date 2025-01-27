<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tarea', function(Blueprint $table)
        {
            $table->id('idTar') ;
            $table->date('fecha') ;
            $table->text('texto') ;
            $table->boolean('completa')->default(false) ;

            # creamos la clave foránea (forma tradicional)
            #$table->unsignedBigInteger('idUsu') ;
            #$table->foreign('idUsu')->references('idUsu')->on('usuario')
            #      ->onDelete('cascade') ;

            # creamos la clave foránea (forma moderna)
            $table->foreignId('idUsu')->constrained('usuario', 'idUsu')
                  ->onDelete('cascade') ;
        }) ;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // borramos la tabla si existe a la hora de hacer un rollback
        Schema::dropIfExits('tarea') ;
    }
};
