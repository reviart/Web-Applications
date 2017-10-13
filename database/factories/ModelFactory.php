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

/*$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'ADMIN_ID' => $faker->swiftBicNumber(),
        'NAME' => $faker->name(),
        'EMAIL' => $faker->safeEmail(),
        'JOB_TITLE' => $faker->jobTitle(),
        'PASSWORD' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    $key = ['PRIA','WANITA'];
    $tag = ['HOME', 'WORK', 'SCHOOL'];
    return [
        'ADMIN_ID' => App\Admin::all()->random()->id,
        'USER_ID' => $faker->swiftBicNumber(),
        'NAME_CUST' => $faker->name(),
        'EMAIL_CUST' => $faker->safeEmail(),
        'GENDER_CUST' => $faker->randomElement($key),
        'PASSWD_CUST' => $password ?: $password = bcrypt('secret'),
        'ADDRESS_CUST' => $faker->address(),
        'ADDRESS_TAG_CUST' => $faker->randomElement($tag),
        'PHONENUMB_CUST' => $faker->phoneNumber(),
        'remember_token' => str_random(10),
    ];
});

/*$factory->define(App\Curtner::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'CURTNER_ID' => $faker->swiftBicNumber(),
        'ADMIN_ID' => App\Admin::all()->random()->id,
        'NAME_CURT' => $faker->name(),
        'EMAIL_CURT' => $faker->safeEmail(),
        'PASSWD_CURT' => $password ?: $password = bcrypt('secret'),
        'ADDRESS_CURT' => $faker->address(),
        'PHONENUMB_CURT' => $faker->phoneNumber(),
        'OWNERNAME_CURT' => $faker->name(),
        'NAME_CURT' => $faker->name(),
        'OWNERIDNUMB_CURT' => $faker->creditCardNumber(),
        'remember_token' => str_random()
    ];
});*/

/*
$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    $key = ['AVAILABLE','NOT AVAILABLE'];
    return [
        'MENU_ID' => $faker->swiftBicNumber(),
        'CATEGORY_MENU_ID' => App\CategoryMenu::all()->random()->id,
        'ORIGIN_ID' => App\OriginMenu::all()->random()->id,
        'NAME_MENU' => $faker->sentence,
        'many_menus' => $faker->numberBetween(0,100),
        'status' => $faker->numberBetween(0,1),
        'price' => $faker->numberBetween(5000, 1000000),
    ];
});
*/
