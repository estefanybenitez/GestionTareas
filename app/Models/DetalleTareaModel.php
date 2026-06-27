<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTareaModel extends Model
{
    use HasFactory;
        //Nombre de la tabla
        protected $table = 'tarea_detalle';

        //Llave primaria
        protected $primaryKey = 'id_detalle';
    
        //Campos de asignacion o campos de mi tabla
        protected $fillable = ['fecha_inicio','fecha_fin', 'id_area', 'id_empleado', 'id_tarea', 'id_estado'];
}
