<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //the seeds for the database
        $faker = Faker\Factory::create();
        
        // add 50 rows of random data        
        for ($i=0; $i < 100; $i++) {            
        	DB::table('people')->insert([
            'fullname' => $faker->name,
            'email' => $faker->safeEmail,
            'username' => $faker->userName,
            'bio' => $faker->paragraphs(3, true), // 3 paragraphs
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $faker->address,
            'city' => $faker->city,
            'country' => $faker->country,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
             ]);
        }
    }
}
