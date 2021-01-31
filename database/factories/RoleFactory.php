<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;


$factory->define(Role::class, function (Faker $faker) {
    return [
        'key' => $faker->text,
        'name' => $faker->name,
        'description' => $faker->optional()->text(1024),
    ];
});
