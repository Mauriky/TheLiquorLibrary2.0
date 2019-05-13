<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstNameMale,
        'apellido' => $faker->lastName,
        'rfc' => $faker->swiftBicNumber($min=12,$max=13),
        'direccion' => $faker->streetName,
        'email' => $faker->unique()->email
    ];
});
