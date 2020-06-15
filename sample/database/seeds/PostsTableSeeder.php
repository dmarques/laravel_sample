<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate existing records to start from scratch.
        Posts::truncate();
        
        $faker = \Faker\Factory::create();

        //Create a few posts in database
        for ($i=0; $i < 50; $i++) { 
            Posts::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,    
            ]);
        }
    }
}
