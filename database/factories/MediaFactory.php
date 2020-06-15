<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {

    $mediaType = $faker->numberBetween(1, 2);
    echo "$mediaType\n";
    if ($mediaType == 1) {
        $files = [
            "fake_images/1.jpg",
            "fake_images/2.jpg",
        ];
        $file = \Illuminate\Support\Facades\Storage::path($faker->randomElement($files));
        $src = md5(time() . $file) . ".jpg";
        $service = \Illuminate\Support\Facades\App::make(\App\Services\Images\IImageService::class);
        $service->save($file, $src);
    } else {
        $videoUrls = [
            "fePKrRXe63E",
            "fePKrRXe63E",
        ];
        $src = $faker->randomElement($videoUrls);
    }
    return [
        'name' => $faker->word,
        'title' => $faker->text(50),
        'src' => $src,
        'description' => $faker->text,
        'media_types_id' => $mediaType,
    ];
});
