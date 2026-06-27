<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
        [
            'nombre_tarea'=>'realizar registros',
            'descripcion'=>'de nuevos empleados',
            'id_estado' => 1,
            'created_at'=>Carbon::now()
        ],
        [
            'nombre_tarea'=>'ordenar registros',
            'descripcion'=>'de todos los empleados',
            'id_estado' => 2,
            'created_at'=>Carbon::now()
        ],
        [
            'nombre_tarea'=>'actualizar registros',
            'descripcion'=>'de todos los empleados',
            'id_estado' => 3,
            'created_at'=>Carbon::now()
        ]
    );
        DB::table('tareas')->insert($data);

    }
}

