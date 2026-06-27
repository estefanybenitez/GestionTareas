<?php

namespace App\Http\Controllers;

use App\Models\AreaModel;
use Illuminate\Http\Request;
use App\Models\EmpleadosModel;
use App\Models\User;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = EmpleadosModel::select(

            "empleados.id_empleado",
            "empleados.nombre_empleado",
            "empleados.telefono",
            "empleados.fecha_nacimiento",
            "empleados.fecha_ingreso",
            "empleados.direccion",
            "empleados.id",
            "empleados.id_area",
        
            "users.id", 
            "users.name as name", 
            "area.id_area", 
            "area.nombre_area as area", 
            
        )->join("users", "users.id", "=", "empleados.id")
        ->join("area", "area.id_area", "=", "empleados.id_area")->get();

        return view('/Empleado/EmpleadoShow')->with(['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $area = AreaModel::all();
        $users = User::all();

        $empleados = EmpleadosModel::all();

        return view('/Empleado/EmpleadoCreate')
        ->with(['empleados' => $empleados,'users' => $users, 'area' => $area ]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //Validar los campos
         $data = request()->validate([
            'nombre_empleado' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_ingreso' => 'required',
            'direccion' => 'required',
            'id' => 'required',
            'id_area' => 'required'
        ]);

        //Insertar la informacion
        EmpleadosModel::create($data);

        //Redireccionar
        return redirect('/empleado/show');
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
    public function edit( $id_empleado)
    {
        $empleados = EmpleadosModel ::find($id_empleado);
        $area = AreaModel::all();
        $users = User::all();

        return view('/Empleado/EmpleadoUpdate')
        
        ->with(['empleados' => $empleados,'users' => $users, 'area' => $area ]);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,EmpleadosModel $employee)
    {
        //
        $data = request()->validate([
            'nombre_empleado' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_ingreso' => 'required',
            'direccion' => 'required',
            'id' => 'required',
            'id_area' => 'required'
        ]);
    
        $employee->update([
            'nombre_empleado' => $data['nombre_empleado'],
            'telefono' => $data['telefono'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'fecha_ingreso' => $data['fecha_ingreso'],
            'direccion' => $data['direccion'],
            'id' => $data['id'],
            'id_area' => $data['id_area'],
        ]);

        
        return redirect('/empleado/show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_empleado)
    {
        ////Eliminar pedido
         EmpleadosModel::destroy($id_empleado
        );

         //Retornar respuesta json
         return response()->json(array('res' => true));
    
    }

    public function ShowEmpleados(){

        $empleados= EmpleadosModel::select(

            "empleados.id_empleado",
            "empleados.nombre_empleado",
            "empleados.telefono",
            "empleados.fecha_nacimiento",
            "empleados.fecha_ingreso",
            "empleados.direccion",
    
            "users.role as role", 
            "area.nombre_area as area", 
            
        )->join("users", "users.id", "=", "empleados.id")
        ->join("area", "area.id_area", "=", "empleados.id_area")->get();
    
        return view('/Supervisor/ShowEmpleadoSup')->with(['empleados' => $empleados]); 

    }
}
