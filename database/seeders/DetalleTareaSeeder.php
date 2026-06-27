<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetalleTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
        [
            'fecha_inicio' => '2023-06-01',
            'fecha_fin' => '2023-12-01',
            'id_area' => 1,
            'id_empleado' => 1,
            'id_tarea' => 1,
            // 'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-06-10',
            'fecha_fin' => '2023-12-10',
            'id_area' => 2,
            'id_empleado' => 2,
            'id_tarea' => 2,
            // 'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-07-12',
            'fecha_fin' => '2023-11-12',
            'id_area' => 3,
            'id_empleado' => 3,
            'id_tarea' => 3,
            // 'id_estado' => 2,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-07-15',
            'fecha_fin' => '2023-10-15',
            'id_area' => 4,
            'id_empleado' => 4,
            'id_tarea' => 1,
            // 'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-07-21',
            'fecha_fin' => '2023-12-21',
            'id_area' => 5,
            'id_empleado' => 5,
            'id_tarea' => 2,
            // 'id_estado' => 2,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-07-22',
            'fecha_fin' => '2023-11-22',
            'id_area' => 6,
            'id_empleado' => 6,
            'id_tarea' => 3,
            // 'id_estado' => 2,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-07-27',
            'fecha_fin' => '2023-11-27',
            'id_area' => 5,
            'id_empleado' => 7,
            'id_tarea' => 1,
            // 'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-08-01',
            'fecha_fin' => '2023-12-01',
            'id_area' => 4,
            'id_empleado' => 8,
            'id_tarea' => 2,
            // 'id_estado' => 2,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-08-05',
            'fecha_fin' => '2023-11-05',
            'id_area' => 3,
            'id_empleado' => 9,
            'id_tarea' => 3,
            // 'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ],
        [
            'fecha_inicio' => '2023-08-10',
            'fecha_fin' => '2023-10-10',
            'id_area' => 2,
            'id_empleado' => 10,
            'id_tarea' => 1,
            // 'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ]
    );

            //Insert data into table
            DB::table('tarea_detalle')->insert($data);
    }
}
