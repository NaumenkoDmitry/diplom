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
            'description' => "Категория спорт"
        ], [
            'name' => "Музыка",
            'description' => "Категория музыки"
        ], [
            'name' => "Искусство",
            'description' => "Категория исскуства"
        ]];
        collect($data)->each(function ($item) {
            DB::table('categories')->insert($item);
        });
    }
}
