<?php

namespace App\Http\Controllers;

use App\Models\AreaModel;
use App\Models\DetalleTareaModel;
use App\Models\EmpleadosModel;
use App\Models\EstadoModel;
use App\Models\TareaModel;
use Illuminate\Http\Request;

class DetalleTareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      
        $tarea_detalle = DetalleTareaModel::select(

            "tarea_detalle.id_detalle",
            "tarea_detalle.fecha_inicio",
            "tarea_detalle.fecha_fin",
            "tareas.nombre_tarea as tarea", // tareas - nombre
            "tareas.descripcion as descripcion", // tareas - descripcion
            "empleados.nombre_empleado as empleado", //empleados - nombre
            
        )->join("tareas", "tareas.id_tarea", "=", "tarea_detalle.id_tarea")
        ->join("empleados", "empleados.id_empleado", "=", "tarea_detalle.id_empleado")->get();

        return view('/TareaEmpleado/TareasShowEm')->with(['tarea_detalle' => $tarea_detalle]);
    }

    public function indexSup()
    {
        //
        $tarea_detallesup = DetalleTareaModel::select(

            "tarea_detalle.id_detalle",
            "tarea_detalle.fecha_inicio",
            "tarea_detalle.fecha_fin",
            "area.nombre_area as nombre_area",//area
            "tareas.nombre_tarea as nombre_tarea", // tareas
            "empleados.nombre_empleado as nombre_empleado", //empleados
            // "estado_tarea.estado as estado", //estado_tarea 
            
        )->join("area","area.id_area", "=", "tarea_detalle.id_area")
        ->join("tareas", "tareas.id_tarea", "=", "tarea_detalle.id_tarea")
        ->join("empleados", "empleados.id_empleado", "=", "tarea_detalle.id_empleado")->get();;

        return view('/TareaEmpleado/AsignarTareaShow')->with(['tarea_detallesup' => $tarea_detallesup]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Listar Area
        $area = AreaModel::all();
        //Listar Empleados
        $empleado = EmpleadosModel::all();

        //Listar Tareas
        $tareas = TareaModel::all();

        return view('/TareaEmpleado/CreateAsignarTarea')
        ->with(['area' => $area, 'empleado'=>$empleado,'tareas'=>$tareas,]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ////Almacenar asignaciones
        //dd($request->post());

        $data = request()->validate([
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'id_area' => 'required',
            'id_empleado' => 'required',
            'id_tarea' => 'required',
            // 'id_estado' => 'required'
            
        ]);

        DetalleTareaModel::create($data);

        return redirect('/tarea/show/asignar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_detalle)
    {
        $detalle = DetalleTareaModel::find($id_detalle);
         //Listar Area
         $area = AreaModel::all();
         //Listar Empleados
         $empleado = EmpleadosModel::all();
 
         //Listar Tareas
         $tareas = TareaModel::all();
 
         //Lista Estado
        //  $estado = EstadoModel::all();

        //Mostrar vista
        return view('/TareaEmpleado/UpdateAsignarTarea')->with(['detalle'=> $detalle,'area'=>$area, 'empleado' => $empleado,'tareas'=>$tareas,]);
        // return view('Supervisor/actualizarasignacion')->with(['detalle'=> $detalle,'area'=>$area, 'empleado' => $empleado,'tareas'=>$tareas, 'estado'=>$estado]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetalleTareaModel $detalle)
    {
        //Validar info
         $data = request()-> validate(
            [
                'fecha_inicio' => 'required',
                'fecha_fin' => 'required',
                'id_area' => 'required',
                'id_empleado' => 'required',
                'id_tarea' => 'required',
                // 'id_estado' => 'required'
            ]
            
        );

        //Reemplazar datos
        $detalle->fecha_inicio = $data['fecha_inicio'];
        $detalle->fecha_fin = $data['fecha_fin'];
        $detalle->id_area = $data['id_area'];
        $detalle->id_empleado = $data['id_empleado'];
        $detalle->id_tarea = $data['id_tarea'];
        // $detalle->id_estado = $data['id_estado'];
        $detalle -> updated_at=now();

        //Guardar Info
        $detalle->save();

        //Redireccionamiento
        return redirect('/tarea/show/asignar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ////Eliminar pedido
         DetalleTareaModel::destroy($id);

         //Retornar respuesta json
         return response()->json(array('res' => true));
    
    }
}
