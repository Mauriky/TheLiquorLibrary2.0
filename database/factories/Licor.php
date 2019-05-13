<?php

use Faker\Generator as Faker;

$factory->define(App\Licor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'pais_origen' => $faker->country,
        'sabor' => $faker->word,
        'color' => $faker->colorName,
        'porcentaje_alcohol' => $faker->numberBetween($min=1,$max=60),
        'precio' => $faker->numberBetween($min=90,$max=1000),
        'stock' => $faker->numberBetween($min=1,$max=100)
    ];
});
