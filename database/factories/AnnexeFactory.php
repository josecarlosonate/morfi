<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Annexe;
use Faker\Generator as Faker;


$factory->define(Annexe::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'telephone' => $faker->randomDigit,
        'direction' => $faker->optional()->text,
        'document' => $faker->randomDigit,
        'photo' => $faker->imageUrl(640,480,'people'),
        'profile' => $faker->optional()->text(1024),
        'certificate' => $faker->text,
        'diploma' => $faker->text,
        'qualification' => $faker->optional()->randomFloat(),
    ];
});
