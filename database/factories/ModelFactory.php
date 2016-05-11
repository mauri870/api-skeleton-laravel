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

$factory->define(App\Domains\Users\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Domains\Users\Notification::class, function (Faker\Generator $faker) {
    $types = ['info','success','warning','error'];
    return [
        'title' => $faker->title,
        'type' => $types[array_rand($types)],
        'body' => $faker->paragraph(),
        'user_id' => App\Domains\Users\User::all()->random()->id
    ];
});
