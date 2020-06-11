<?php

use Illuminate\Database\Seeder;

class MediasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            array([
                'name' => "Sport",
                'title' => "s",

            ])
        );
    }
}
