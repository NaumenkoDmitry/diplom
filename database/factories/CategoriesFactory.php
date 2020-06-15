<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'visible' => $faker->word,
    ];
});
