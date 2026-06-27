<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EstadoTareaController;


use App\Http\Controllers\DetalleTareaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VistaEmpleadoController;
use App\Models\EmpleadosModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Ruta Inicio*/
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// _________________________________RUTAS USANDO MIDDLEWARE_____________________________________________



//----------------------------- Vistas ADMIN -------------------------

// ver user
    Route::middleware(['auth', 'Administrador'])->group(function () {
        // ...
        Route::get('/readUsers', [App\Http\Controllers\admin\UserController::class, 'index']);
            //Modificar User (FrontEnd)
        Route::get('/CrudUsers/edit/{users}', [App\Http\Controllers\admin\UserController::class, 'edit']);

        //Modificar User (BackEnd)
        Route::put('/CrudUsers/update/{users}', [App\Http\Controllers\admin\UserController::class, 'update']);
        Route::get('/InicioAdmi', function () {
            return view('/Admi/InicioAdmi');
        });
        //reporte empleado por area
        Route::get('/ReportsAreEmpleado', [ReportController::class, 'area_empleadosreport']);


        //------------------CRUD EMPLEADOO------------------------------
         //Ruta para mostrar
        Route::get('/empleado/show', [EmployeesController::class, 'index']); 
         //Ruta para Crear (FrontEnd)
       Route::get('/empleado/create', [EmployeesController::class, 'create']);
        //Ruta para Crear (BackEnd)
       Route::post('/StoreEmpleados', [EmployeesController::class, 'store']); 
         //Ruta para Modificar (FrontEnd)
       Route::get('/empleado/edit/{id_empleado}', [EmployeesController::class, 'edit']);

       Route::put('/empleado/update/{employee}', [EmployeesController::class, 'update']);

       Route::delete('/DestroyEmpleado/{id_empleado}', [EmployeesController::class, 'destroy']); 

        
        //------------------CRUD AREAAAA------------------------------

        //Ruta para mostrar
        Route::get('/area/show',[AreaController::class, 'index']); 
        //Ruta para Crear (FrontEnd)
        Route::get('/area/create', [AreaController::class, 'create']);
        //Ruta para Crear (BackEnd)
        Route::post('/AreaStore', [AreaController::class, 'store']);
        //Ruta para Modificar (FrontEnd)
        Route::get('/Area/edit/{areas}', [AreaController::class, 'edit']);
        //Ruta para Modificar BackEnd)
        Route::put('/AreaUpdate/{areas}', [AreaController::class, 'update']); 
        //Ruta para Eliminar (BackEnd)
        Route::delete('/Area/destroy/{id_area}', [AreaController::class, 'destroy']); 
        
        Route::get('/Dasboard', function () {
            return view('/Dashboard');
        });

    });



//----------------------------- Vistas Empleados -------------------------

    Route::middleware(['auth', 'Empleado'])->group(function () {
        // ...

        Route::get('/TareasShowEm', [DetalleTareaController::class, 'index']);
        Route::get('/empleados', [EmployeesController::class, 'index']);
        
        Route::get('/InicioEmpleado', function () {
            return view('/empleados/InicioEmpleado');
        });
        Route::get('/ReportsTareaEmpleado', [ReportController::class, 'tarea_empleadosreport']);
      
    });





//----------------------------- Vistas VISTA Supervisor  -------------------------

Route::middleware(['auth', 'Supervisor'])->group(function () {

    // ...
    Route::get('/ShowAllEmpleados', [EmployeesController::class, 'ShowEmpleados']); //ver users
    // CRUD TAREAS
    //Show Tarea
    Route::get('/tarea/show',[TareaController::class,'index']);
    //Creacion de tareas
    Route::get('/tarea/create',[TareaController::class,'create']);
    Route::post('/TareaStore',[TareaController::class,'store']);
    //Actualizar tareas
    Route::get('/tarea/edit/{id_tarea}',[TareaController::class,'edit']);
    Route::put('/tarea/update/{tarea}',[TareaController::class,'update']);
    //Borrar Tareas
    Route::delete('/tarea/destroy/{id}',[TareaController::class, 'destroy']);



    //Ver tareas asignadas
    Route::get('/tarea/show/asignar',[DetalleTareaController::class,'indexSup']);
    //Asignacion de tareas
    Route::get('/AsignarTarea/show',[DetalleTareaController::class,'create']);
    Route::post('/asignarStore',[DetalleTareaController::class,'store']);
    //Actualizar Asignacion de tareas
    Route::get('/AsignarTarea/edit/{id_detalle}',[DetalleTareaController::class,'edit']);
    Route::put('/AsignarTarea/update/{detalle}',[DetalleTareaController::class,'update']);
    //Borrar Asignacion
    Route::delete('asignar/destroy/{id}',[DetalleTareaController::class, 'destroy']);


    Route::get('/ReportsAreaTarea', [ReportController::class, 'estadotarea_areareport']);
    Route::get('/ReportsTareaEmpleado', [ReportController::class, 'tarea_empleadosreport']);



    Route::get('/InicioSuper', function () {
        return view('/Supervisor/InicioSuper');
    });

});
// empleadosup 