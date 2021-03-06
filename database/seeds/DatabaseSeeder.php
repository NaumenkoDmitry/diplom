<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategoriesSeeder::class,
            MediaTypesSeeder::class,
            StatusesSeeder::class,
            MediasSeeder::class,
            ArticlesTableSeeder::class,

        ]);

    }
}
