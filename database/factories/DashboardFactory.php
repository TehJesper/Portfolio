<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dashboard;
use Faker\Generator as Faker;

$factory->define(Dashboard::class, function (Faker $faker) {
    return [
        'cursus' => $faker->word,
        'toets' => $faker->word,
        'ec' => $faker->numberBetween(0,15),
        'resultaat' => $faker->numberBetween(0,10),
    ];
});
