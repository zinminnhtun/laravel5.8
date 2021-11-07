<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        "userId"=>$faker->numberBetween(1,25),
        'title'=>$faker->sentence(7),
        'completed'=>$faker->boolean,
    ];
});
