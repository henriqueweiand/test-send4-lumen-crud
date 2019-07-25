<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Users::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'telephone' => $faker->phoneNumber,
    ];
});

/**
 * Factory definition for model App\Task.
 */
$factory->define(App\Messages::class, function ($faker) {
    $user = factory('App\Users')->create();

    return [
        'user_id' => $user['id'],
        'description' => $faker->text,
    ];
});
