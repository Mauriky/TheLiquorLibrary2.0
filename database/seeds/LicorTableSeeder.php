<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Licor::class, 20)->create();

        DB::table('licores')->insert([
            'nombre' => 'Countreaut',
            'pais_origen' => 'Francia',
            'sabor' => 'Naranja',
            'color' => 'Transparente',
            'porcentaje_alcohol' => '40',
            'precio' => '250',
            'stock' => '5'
        ]);

        App\Licor::create([
            'nombre' => 'Countreaut1',
            'pais_origen' => 'Francia1',
            'sabor' => 'Naranja1',
            'color' => 'Transparente1',
            'porcentaje_alcohol' => '41',
            'precio' => '251',
            'stock' => '6'
        ]);

    }
}
