<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {

    return [
        'title' => $faker->text(50),
        'short_text' => $faker->text,
        'text' => $faker->text,
        'status_id' => $faker->randomFloat(0,1,3),
        'user_id' => $faker->randomFloat(0,1,10),

    ];
});
