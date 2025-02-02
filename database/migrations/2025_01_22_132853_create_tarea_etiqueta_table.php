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
        Schema::create('tarea_etiqueta', function (Blueprint $table) {
            $table->id('idTE');
            
            $table->foreignId('idTar')->constrained('tarea', 'idTar')
                  ->onDelete('cascade');
            $table->foreignId('idEti')->constrained('etiqueta', 'idEti')
                  ->onDelete('cascade');

            $table->unique(['idEti', 'idTar']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea_etiqueta');
    }
};