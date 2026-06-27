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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombre_empleado', 50);
            $table->string('telefono', 9);
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->string('direccion', 150);

            $table->bigInteger('id')->unsigned();
            $table->bigInteger('id_area')->unsigned();
            
            //llamar llaves
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')
             ->onUpdate('cascade');
            //fk de tabla area
            $table->foreign('id_area')->references('id_area')->on('area')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
