<?php

use Illuminate\Database\Seeder;

class MediaTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => "Img",
            'description' => "Фотографии"
        ], [
            'name' => "Video",
            'description' => "Видеоматериал"
        ], [
            'name' => "Audio",
            'description' => "Аудиоматериал"
        ]];
        collect($data)->each(function ($item) {
            DB::table('media_types')->insert($item);
        });
    }
}
