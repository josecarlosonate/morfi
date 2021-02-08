<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Servicios;
use Faker\Generator as Faker;


$factory->define(Servicios::class, function (Faker $faker) {
    return [
        'key' => $faker->text,
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
