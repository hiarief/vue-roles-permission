<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($count = 0; $count < 10; $count++) {
            DB::table('posts')->insert([
                'title' => $faker->text($maxNbChars = 50),
                'description' => $faker->text($maxNbChars = 200),
            ]);
        }

    }
}