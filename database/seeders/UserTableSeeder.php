<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){

            DB::table('users')->insert([

                'name' => 'JohnDoe'.$i,
                'email' => "jhon'.$i'@doe.fr",
                'password' => bcrypt('password')
            ]);
        }
    }
}
