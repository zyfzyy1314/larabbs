<?php

use Faker\Generator as Faker;

$factory->define(App\Reply::class, function (Faker $faker) {

    $time = $faker->dateTimeThisMonth();

    return [
        'content' => $faker->sentence(),
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
