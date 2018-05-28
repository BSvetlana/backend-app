<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {

    $automatic = collect([
        'Yes',
        'No'
    ]);

    $engine = collect([
        'diesel',
        'petrol',
        'electric',

    ]);

    $brand = collect ([
        'BMW',
        'Mercedes',
        'Audi',
        'Fiat',
        'AlfaRomeo',
        'Toyota',
        'Mazda'
    ]);
    return [
        'brand' => $brand[rand(0, count($brand) - 1)],
        'model' => $faker->asciify('Model ***'),
        'year' => $faker->year($max = 'now'),
        'maxSpeed' => $faker->numberBetween($min = 150, $max = 300),
        'isAutomatic' => $faker->boolean,
        'engine' => $engine[rand(0, count($engine) - 1)],
        'numberOfDoors' => $faker->numberBetween($min = 3, $max = 6)

    ];
});
