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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id('id_tarea');
            $table->string('nombre_tarea', 100);
            $table->string('descripcion', 150);
            $table->bigInteger('id_estado')->unsigned();
            
            //llamar llaves
            $table->foreign('id_estado')->references('id_estado')->on('estado_tarea')->onDelete('cascade')
             ->onUpdate('cascade');
             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
