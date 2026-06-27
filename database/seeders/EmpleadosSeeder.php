<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'nombre_empleado' => 'Juan Perez',
                'telefono' => '7748-2022',
                'fecha_nacimiento' => '2003-10-01',
                'fecha_ingreso' => '2023-09-10',
                'direccion' => 'calle principal',
                'id' => '1',
                'id_area' => '1',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Rocío Durcal',
                'telefono' => '7657-1131',
                'fecha_nacimiento' => '2002-05-16',
                'fecha_ingreso' => '2023-07-20',
                'direccion' => 'calle principal',
                'id' => '2',
                'id_area' => '2',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Luis Guerra',
                'telefono' => '6566-0040',
                'fecha_nacimiento' => '2002-10-25',
                'fecha_ingreso' => '2023-08-15',
                'direccion' => 'calle principal',
                'id' => '3',
                'id_area' => '3',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Evelyn Campos',
                'telefono' => '7446-2524',
                'fecha_nacimiento' => '1999-10-12',
                'fecha_ingreso' => '2023-05-03',
                'direccion' => 'calle principal',
                'id' => '4',
                'id_area' => '4',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'María Flores',
                'telefono' => '7926-4011',
                'fecha_nacimiento' => '2001-01-09',
                'fecha_ingreso' => '2023-10-11',
                'direccion' => 'calle principal',
                'id' => '5',
                'id_area' => '5',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Marta Hernández',
                'telefono' => '7655-5736',
                'fecha_nacimiento' => '1995-07-03',
                'fecha_ingreso' => '2023-01-24',
                'direccion' => 'calle principal',
                'id' => '6',
                'id_area' => '6',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'José López',
                'telefono' => '6280-3427',
                'fecha_nacimiento' => '1997-07-15',
                'fecha_ingreso' => '2023-04-13',
                'direccion' => 'calle principal',
                'id' => '7',
                'id_area' => '1',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Diego Aguirre',
                'telefono' => '6970-6923',
                'fecha_nacimiento' => '2002-04-20',
                'fecha_ingreso' => '2023-03-01',
                'direccion' => 'calle principal',
                'id' => '8',
                'id_area' => '2',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Lucía Torres',
                'telefono' => '7877-1452',
                'fecha_nacimiento' => '2003-11-02',
                'fecha_ingreso' => '2023-05-26',
                'direccion' => 'calle principal',
                'id' => '9',
                'id_area' => '3',
                'created_at' =>Carbon::now()
            ],
            [
                'nombre_empleado' => 'Paola Domínguez',
                'telefono' => '7528-7866',
                'fecha_nacimiento' => '1998-12-21',
                'fecha_ingreso' => '2023-09-17',
                'direccion' => 'calle principal',
                'id' => '10',
                'id_area' => '4',
                'created_at' =>Carbon::now()

            ]
    );
        DB::table('empleados')->insert($data);

    }
}
