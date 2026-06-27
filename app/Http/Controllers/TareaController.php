<?php

// namespace App\Http\Controllers\Empleados;
namespace App\Http\Controllers;


// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetalleTareaModel;
use App\Models\TareaModel;
use App\Models\EstadoModel;


class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        ////Listar Tareas

        $tareas = TareaModel::select(
            "tareas.id_tarea",
            "tareas.nombre_tarea",
            "tareas.descripcion",
            'estado_tarea.estado as estado'
            )->join("estado_tarea", "estado_tarea.id_estado", "=", "tareas.id_estado")->get();

        return view('/Tarea/TareaShow')->with(['tarea'=>$tareas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar vista para crear tarea
        $estado_tarea = EstadoModel::all();
        // $tarea = TareaModel::all();
        return view('/Tarea/CreateTarea')->with(['estado_tarea' => $estado_tarea]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Almacenar info de cliente
        $data = request()->validate([
            'nombre_tarea'=> 'required',
            'descripcion' => 'required',
            'id_estado' => 'required'
        ]);//validacion

        //guardar info

        TareaModel::create($data);

        //Redireccionar
        return redirect('/tarea/show');
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
    public function edit($id_tarea)
    {
          //Lista Estado
         $tarea = TareaModel::find($id_tarea);
         $estado_tarea= EstadoModel::all();
        //Mostrar vista
        return view('/Tarea/UpdateTarea')->with(['tarea'=>$tarea, 'estado_tarea'=>$estado_tarea]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TareaModel $tarea)
    {
        ////Validar info
        $data = request()-> validate(
            [
                'nombre_tarea'=> 'required',
                'descripcion' => 'required',
                'id_estado' => 'required'
            ]
            
        );

        //Reemplazar datos
        $tarea->nombre_tarea = $data['nombre_tarea'];
        $tarea->descripcion = $data['descripcion'];
        $tarea->id_estado = $data['id_estado'];
        $tarea->updated_at=now();

        //Guardar Info
        $tarea->save();

        //Redireccionamiento
        return redirect('/tarea/show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ////Eliminar pedido
         TareaModel::destroy($id);

         //Retornar respuesta json
         return response()->json(array('res' => true));
    }

    public function index2()
    {
        //
        //
        $tarea_detalle = DetalleTareaModel::select(

            "tarea_detalle.id_detalle",
            "tarea_detalle.fecha_inicio",
            "tareas.nombre_tarea as tarea", // tareas - nombre
            "tareas.nombre_descripcion as descripcion", // tareas - descripcion
            "empleados.nombre_empleado as empleado", //empleados - nombre
            "estado_tarea.estado as estado", //estado_tarea - estado
            
        )->join("tareas", "tareas.id_tarea", "=", "detalle_tarea.id_tarea")->get()
        ->join("empleados", "empleados.id_empleado", "=", "detalle_tarea.id_empleado")->get()
        ->join("estado_tarea", "estado_tarea.id_estado", "=", "detalle_tarea.id_estado")->get();

        return view('/empleados/TareasShow')->with(['tarea_detalle' => $tarea_detalle]);
     
        
    }

}
