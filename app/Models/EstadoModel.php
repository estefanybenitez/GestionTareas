<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoModel extends Model
{
    use HasFactory;
        //Nombre de la tabla
        protected $table = 'estado_tarea';

        //Llave primaria
        protected $primaryKey = 'id_estado';
    
        //Campos de asignacion o campos de mi tabla
        protected $fillable = ['estado'];
}
