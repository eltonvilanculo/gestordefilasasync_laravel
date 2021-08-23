<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // $this->singleUser('Elton Vilanculo','eltonvillas10@gmail.com','12345678') ;


    }


    public function singleUser($name , $email,$password){


        DB::table('users')->insert([
            'name' => $name,
            'email' => $email ,
            'email_verified_at' => now(),
            'password' => bcrypt($password), // password
            'remember_token' => Str::random(10),
        ]);
    }

}
