<?php

namespace App\Http\Controllers;

use App\Models\TareaModel;
use App\Models\EstadoModel;
use Illuminate\Http\Request;

class DutiesController extends Controller
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

        return view('Supervisor/ShowTarea')->with(['tarea'=>$tareas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar vista para crear tarea
        $estado_tarea = EstadoModel::all();
        // $tarea = TareaModel::all();
        return view('Supervisor/CreateTarea')->with(['estado_tarea' => $estado_tarea]);
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
        return redirect('ShowTareas');
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
    public function edit(TareaModel $tarea)
    {
          //Lista Estado
         $estado_tarea= EstadoModel::all();
        //Mostrar vista
        return view('Supervisor/UpdateTarea')->with(['tarea'=>$tarea, 'estado_tarea'=>$estado_tarea]);
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
        return redirect('ShowTareas');

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

}
