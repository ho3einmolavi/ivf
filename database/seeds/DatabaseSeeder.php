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
        factory(\App\User::class , 10)->create();
        factory(\App\News::class , 10)->create();
        factory(\App\Blog::class , 10)->create();
        factory(\App\Conference::class , 10)->create();
    }
}
