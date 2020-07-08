<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {

    return [
        'title' => $faker->text(50),
        'slug'=> $faker->slug(),
        'short_text' => $faker->text,
        'text' => $faker->text(3000),
        'status_id' => $faker->randomFloat(0,1,3),
        'user_id' => $faker->randomFloat(0,1,10),
        'created_at'=>$faker->dateTimeBetween('-2 years')->format("Y-m-d")
    ];
});
$factory->afterCreating(Article::class, function (Article $article, Faker $faker) {
    $ids = $faker->randomElements([1,2,3]);
    $article->categories()->sync($ids);
    $ids = $faker->randomElements([1,2,3,4,5,6,7,8],4);
    $article->media()->sync($ids);

});
