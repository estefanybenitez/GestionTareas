<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
        [
            'name'=>'Estefany01A',
            'email'=>'estefany.benitez22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Administrador',
            'created_at'=>Carbon::now()
        ],
        [
            'name' =>'Tannia01S',
            'email' => 'tannia.arevalo22@itca.edu.sv',
            'password' =>bcrypt('123456'),
            'role'=>'Supervisor',
            'created_at'=>Carbon::now()
        ],
        [
            'name' =>'Graciela01E',
            'email' => 'graciela.talavera22@itca.edu.sv',
            'password' =>bcrypt('123456'),
            'role'=>'Empleado',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Vanessa01A',
            'email'=>'vanessa.amaya22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Supervisor',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Rosario01D',
            'email'=>'rosario.dominguez22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Empleado',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Luis01R',
            'email'=>'luis.rodriguez22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Empleados',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Pedro01P',
            'email'=>'pedro.perez22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Empleados',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Evelyn01D',
            'email'=>'evelyn.duran22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Empleado',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Karina01A',
            'email'=>'karina.alas22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Empleado',
            'created_at'=>Carbon::now()
        ],
        [
            'name'=>'Roberto01P',
            'email'=>'roberto.palacios22@itca.edu.sv',
            'password'=>bcrypt('123456'),
            'role'=>'Empleado',
            'created_at'=>Carbon::now()
        ]
    );
        DB::table('users')->insert($data);
    }
}
