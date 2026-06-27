<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadosModel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DetalleTareaModel;

class ReportController extends Controller
{
    public function area_empleadosreport()
    {
        //Empleados por Areas

        $data = EmpleadosModel::select(
            "empleados.id_empleado",
            "empleados.nombre_empleado",
            "empleados.telefono",
            "empleados.fecha_nacimiento",
            "empleados.fecha_ingreso",
            "area.nombre_area as Area",
        )->join("area", "area.id_area", "=", "empleados.id_area")->get();

        //Generar reporte
        $pdf = Pdf::loadView('/reports/area_empleado_reports', compact('data'));

        //modicar los tamaños y orientacion
        $pdf->setPaper('A4', 'landscape');

        //Retornar el reporte
        return $pdf->stream('AreaEmpleados.pdf');
    }

     public function tarea_empleadosreport()
    {
        //tareas asignadas a empleados

        $data = DetalleTareaModel::select(

            "tarea_detalle.id_detalle",
            "tarea_detalle.fecha_inicio",
            "tarea_detalle.fecha_fin",
            "tareas.nombre_tarea as tarea", // tareas - nombre
            "tareas.descripcion as descripcion", // tareas - descripcion
            "empleados.nombre_empleado as empleado", //empleados - nombre
            
        )->join("tareas", "tareas.id_tarea", "=", "tarea_detalle.id_tarea")
        ->join("empleados", "empleados.id_empleado", "=", "tarea_detalle.id_empleado")->get();

        //Generar reporte
        $pdf = Pdf::loadView('/reports/tarea_empleado_reports', compact('data'));

        //modicar los tamaños y orientacion
        $pdf->setPaper('A4', 'landscape');

        //Retornar el reporte
        return $pdf->stream('TareaEmpleados.pdf');

        
    }
    
    // tarea , estado area
  
}
