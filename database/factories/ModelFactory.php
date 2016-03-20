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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => $faker->randomElement(['autor','suporte']),
    ];
});


$factory->define('App\Post', function ($faker) {
    return [
        'titulo' => $faker->sentence,
        'nome' => $faker->name,
        'data' => $faker->date('d-m-Y'),
        'conteudo' => $faker->paragraph
    ];
});