<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {

    return [
        'message' => $faker->word,
        'name' => $faker->word,
        'email' => $faker->word,
        'text' => $faker->text,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
