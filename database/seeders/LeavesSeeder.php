<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LeavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leaves')->insert([
            'userID' => "1",
            'leaveType' => 1,
            'leaveDate' => "2022-12-05",
            'status' => 0,
        ]);

        DB::table('leaves')->insert([
            'userID' => "2",
            'leaveType' => 2,
            'leaveDate' => "2022-12-06",
            'status' => 0,
        ]);

        DB::table('leaves')->insert([
            'userID' => "3",
            'leaveType' => 1,
            'leaveDate' => "2022-12-07",
            'status' => 2,
        ]);

        DB::table('leaves')->insert([
            'userID' => "4",
            'leaveType' => 1,
            'leaveDate' => "2022-12-07",
            'status' => 2,
        ]);

        DB::table('leaves')->insert([
            'userID' => "5",
            'leaveType' => 0,
            'leaveDate' => "2022-12-08",
            'status' => 1,
        ]);

        DB::table('leaves')->insert([
            'userID' => "1",
            'leaveType' => 0,
            'leaveDate' => "2022-12-08",
            'status' => 1,
        ]);

        DB::table('leaves')->insert([
            'userID' => "2",
            'leaveType' => 0,
            'leaveDate' => "2022-12-09",
            'status' => 0,
        ]);
    }
}
