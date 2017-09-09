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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'curtner_id' => App\Curtner::all()->random()->id,
        'menu_name' => $faker->sentence,
        'many_menus' => $faker->numberBetween(0,100),
        'status' => $faker->numberBetween(0,1),
        'price' => $faker->numberBetween(5000, 1000000),
    ];
});
