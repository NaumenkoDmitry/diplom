<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MediaTypes;
use Faker\Generator as Faker;

$factory->define(MediaTypes::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text
    ];
});
