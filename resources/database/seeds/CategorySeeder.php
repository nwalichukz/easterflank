<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          DB::table('categories')->insert([
            ['name' => 'Politics',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'News',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Sports',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            
            ['name' => 'Breaking',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Finance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Business',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Leadership',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Foreign',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
           
            ['name' => 'Opinion',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            
            ['name' => 'Interview',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Education',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            
            ['name' => 'Religion',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Romance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Technology',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Entertainment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            ['name' => 'Culture',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
             ['name' => 'Travel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            
              ['name' => 'Tourism',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
             
               ['name' => 'World',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
                ['name' => 'Events',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
                ['name' => 'Movies',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
                ['name' => 'Fashion',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
                 ['name' => 'Health',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
                 ['name' => 'Job',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
                ['name' => 'Programming',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            
                ['name' => 'Entrepreneurship',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
        ]);
  
    }
}