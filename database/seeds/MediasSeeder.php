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
        factory(\App\Models\Media::class,10)->state("with_resources")->create();
    }
}
