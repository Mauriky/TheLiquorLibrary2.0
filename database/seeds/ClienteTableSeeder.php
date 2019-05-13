<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cliente::class, 20)->create();

        DB::table('clientes')->insert([
            'nombre' => 'Mauricio',
            'apellido' => 'Romero Tinajero',
            'rfc' => 'ROTM970823NM6',
            'direccion' => 'Emiliano Zapata #141',
            'email' => 'MRT@gmail.com'
        ]);
    }
}
