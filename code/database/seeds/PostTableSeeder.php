<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <= 500; $i++) {
            Post::create(
                [
                    'title' => $faker->name,
                    'body' => $faker->paragraph
                ]
            );
        }
    }
}
