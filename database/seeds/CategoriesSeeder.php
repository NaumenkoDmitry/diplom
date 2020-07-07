<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => "Спорт",
            'slug'=>"sport",
            'description' => "Категория спорт"
        ], [
            'name' => "Музыка",
            'slug'=>"music",
            'description' => "Категория музыки"
        ], [
            'name' => "Искусство",
            'slug'=>"culture",
            'description' => "Категория исскуства"
        ]];
        collect($data)->each(function ($item) {
            (new \App\Models\Categories($item))->save();
        });
    }
}
