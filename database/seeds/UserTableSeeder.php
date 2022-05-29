<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i <20 ; $i++) { 
            $newUser = new User; 
            $newUser-> name=$faker->userName();
            $newUser->email=$faker->email();
            $newUser->password= Hash::make("carmine". $i);
            $newUser->save();
        }
    }
}
