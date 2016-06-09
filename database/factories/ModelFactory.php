<?php

/*
|--------------------------------------------------------------------------
| Models Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your Models factories. Models factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default Models should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});
