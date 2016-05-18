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
        'company_name' => $faker->company,
        'email' => $faker->email,
        'cnpj' => random_cnpj(),
        'address' => $faker->address,
        'city' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(100),
    ];
});

$factory->define(App\Domains\Plans\Plan::class, function (Faker\Generator $faker) {
    $users = [10, 20, 50, 100, 125];
    return [
        'name'=>'Plan '.$faker->unique()->numberBetween(1,5),
        'qt_users'=> $users[array_rand($users)],
        'description' => $faker->paragraph,
        'value' => $faker->randomFloat()
    ];
});