<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadosModel extends Model
{
    
    use HasFactory;
    //Nombre de la tabla
    protected $table = 'empleados';

    //Llave primaria
    protected $primaryKey = 'id_empleado';

    //Campos de asignacion o campos de mi tabla
    protected $fillable = ['nombre_empleado', 'telefono', 'fecha_nacimiento','fecha_ingreso', 'direccion', 'id','id_area'];
}