<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaModel extends Model
{
    use HasFactory;
        //Nombre de la tabla
        protected $table = 'tareas';

        //Llave primaria
        protected $primaryKey = 'id_tarea';
    
        //Campos de asignacion o campos de mi tabla
        protected $fillable = ['nombre_tarea', 'descripcion', 'id_estado'];
}
