<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

function myrandomFloat($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

$factory->define(App\Map::class, function (Faker $faker) {

    return [
        'address' => $faker->streetName,
        'latitude' => myrandomFloat($min = -3.704635408143426, $max = -3.816317631532091),
        'longitude' => myrandomFloat($min = -38.4733757894595, $max = -38.622721187408786),
        'user_id' => $faker->numberBetween(1,10)
    ];
});
