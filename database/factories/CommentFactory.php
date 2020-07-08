<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'uid'=>$faker->uuid,
        'title'=>$faker->text(),
        'text'=>$faker->realText(),
        'comment_approved' =>$faker->numberBetween(0,1),
        'user_name'=>$faker->name,
        'user_email'=>$faker->email,
    ];
});
