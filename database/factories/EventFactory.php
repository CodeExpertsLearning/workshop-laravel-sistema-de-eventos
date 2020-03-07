<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'body'        => $faker->paragraph(5),
        'start_date'  => $faker->dateTimeThisMonth('now', 'America/Sao_Paulo'),
        'end_date'    => $faker->dateTimeThisMonth('now', 'America/Sao_Paulo'),
        'is_active'   => $faker->boolean,
        'owner_id'     => 1
    ];
});
