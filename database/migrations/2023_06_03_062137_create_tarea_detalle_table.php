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
        Schema::create('tarea_detalle', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
             //crear llaves foraneas       
            $table->bigInteger('id_area')->unsigned();
            $table->bigInteger('id_empleado')->unsigned();
            $table->bigInteger('id_tarea')->unsigned();
            //llamar llaves
            //fk tabla area
            $table->foreign('id_area')->references('id_area')->on('area')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            // fk tabla empleados
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            //fk tabla tareas
            $table->foreign('id_tarea')->references('id_tarea')->on('tareas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea_detalle');
    }
};
