<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
        [
            'nombre_area' => 'departamento1',
            'created_at' =>Carbon::now()
        ],
        [
            'nombre_area' => 'departamento2',
            'created_at' =>Carbon::now()
        ],
        [
            'nombre_area' => 'departamento3',
            'created_at' =>Carbon::now()
        ],
        [
            'nombre_area' => 'departamento4',
            'created_at' =>Carbon::now()
        ],
        [
            'nombre_area' => 'departamento5',
            'created_at' =>Carbon::now()
        ],
        [
            'nombre_area' => 'departamento6',
            'created_at' =>Carbon::now()
        ]
    );
            //Insert data into table
            DB::table('area')->insert($data);
    }
}
