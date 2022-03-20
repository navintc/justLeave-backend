<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//hash is used for the password
use Illuminate\Support\Facades\Hash;

class WebUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('web_users')->insert([
                    'name' => "Bileka Karunarathne",
                    'email' => "bileka@bileka.com",
                    'password' => Hash::make('password'),
                    'userType' => 0,
                ]);

                DB::table('web_users')->insert([
                    'name' => "Ruby Windowsinghe",
                    'email' => "ruby@bileka.com",
                    'password' => Hash::make('password'),
                    'userType' => 1,
                ]);

                DB::table('web_users')->insert([
                    'name' => "Digitalia Javarathne",
                    'email' => "talia@bileka.com",
                    'password' => Hash::make('password'),
                    'userType' => 1,
                ]);

                DB::table('web_users')->insert([
                    'name' => "Jenkins Kontrolean",
                    'email' => "jenkins@bileka.com",
                    'password' => Hash::make('password'),
                    'userType' => 1,
                ]);

                DB::table('web_users')->insert([
                    'name' => "Applein MacTavish",
                    'email' => "applein@bileka.com",
                    'password' => Hash::make('password'),
                    'userType' => 1,
                ]);

    }
}
