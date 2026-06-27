<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstadoTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
        [
            'estado' => 'Creada',
            'created_at' =>Carbon::now()
        ],
        [
            'estado' => 'Asignada',
            'created_at' =>Carbon::now()
        ],
        [
            'estado' => 'Finalizada',
            'created_at' =>Carbon::now()
        ]
    );
           //Insert data into table
           DB::table('estado_tarea')->insert($data);

    }
}
