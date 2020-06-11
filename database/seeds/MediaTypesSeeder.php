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
            'name' => "Опубликован",
            'description' => "Материал разрешен для публикации"
        ], [
            'name' => "На рассмотрении",
            'description' => "Материал находится на  рассмторении"
        ], [
            'name' => "Отключен",
            'description' => "Материал снят с публикации"
        ]];
        collect($data)->each(function ($item) {
            DB::table('media_types')->insert($item);
        });
    }
}
