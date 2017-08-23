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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'curtner_id' => App\Menu::all()->random()->id,
        'name' => $faker->name,
        'menu_name' => $faker->sentence,
        'many_menus' => $faker->many_menus(random_int(0,100)),
        'status' => $faker->status(random_int(0,1)),
        'price' => $faker->price(random_double(5000, 1000000)),
    ];
});
