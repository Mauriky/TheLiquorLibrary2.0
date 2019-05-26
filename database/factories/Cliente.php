<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstNameMale,
        'apellido' => $faker->lastName,
        'rfc' => $faker->regexify('[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{6}[A-Z]{2}\d'),
        'direccion' => $faker->streetName,
        'email' => $faker->unique()->email
    ];
});
