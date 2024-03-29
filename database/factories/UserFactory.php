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
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Slider::class, 'Slider' function (Faker $faker) {
    return [
        'title' => 'The TEST test test test test test.',
        'body' => 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.',
        'image' => '/sliders/May2019/2XokKzuDdSdHVjgrRD24.jpg',
    ];
});