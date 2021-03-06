<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Date;
use Faker\Generator as Faker;

$factory->define(Date::class, function (Faker $faker) {
    return [
        'event_id' => rand(1, 4),
        'datetime' => $faker->dateTime(),
    ];
});
