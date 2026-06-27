<?php

namespace App\Http\Controllers;

use App\Models\AreaModel;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $area = AreaModel::all();
        return view('/Area/AreaShow', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $area = AreaModel::all();
        return view('/Area/AreaCreate')->with(['area' => $area]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([

            'nombre_area' => 'required',

        ]);

        //Insertar la informacion
        AreaModel::create($data);

        //Redireccionar
        return redirect('/area/show');
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
    public function edit($id_area)
    {
        $area = AreaModel::find($id_area);
       
        //
        return view('/Area/AreaUpdate')->with(['area' => $area]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaModel $areas)
    {
        //
        $data = request()->validate([
            'nombre_area' => 'required',
        ]);
        $areas->nombre_area= $data['nombre_area'];
        $areas->updated_at = now();

        $areas->save();
        return redirect('/area/show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_area)
    {
   
        // //Eliminar producto con id que recibimos
        // $area->delete();
        AreaModel::destroy($id_area);

        //Retornar una respuesta json
        return response()->json(array('res' => true));

    }
}
