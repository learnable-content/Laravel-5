<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

        for($i = 1; $i <= 100; $i++) {
            Post::create(
                [
                    'title' => $faker->name,
                    'body' => $faker->paragraph
                ]
            );
        }
    }
}
