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
            'leaveID' => "GX0001",
            'userID' => "SX0001",
            'leaveType' => 1,
            'leaveDate' => "2022-12-05",
            'status' => 0,
        ]);

        DB::table('leaves')->insert([
            'leaveID' => "GX0002",
            'userID' => "SX0001",
            'leaveType' => 2,
            'leaveDate' => "2022-12-06",
            'status' => 2,
        ]);

        DB::table('leaves')->insert([
            'leaveID' => "GX0003",
            'userID' => "SX0001",
            'leaveType' => 1,
            'leaveDate' => "2022-12-07",
            'status' => 2,
        ]);

        DB::table('leaves')->insert([
            'leaveID' => "GX0004",
            'userID' => "SX0002",
            'leaveType' => 1,
            'leaveDate' => "2022-12-07",
            'status' => 2,
        ]);

        DB::table('leaves')->insert([
            'leaveID' => "GX0005",
            'userID' => "SX0002",
            'leaveType' => 0,
            'leaveDate' => "2022-12-08",
            'status' => 1,
        ]);

        DB::table('leaves')->insert([
            'leaveID' => "GX0006",
            'userID' => "SX0003",
            'leaveType' => 0,
            'leaveDate' => "2022-12-08",
            'status' => 1,
        ]);

        DB::table('leaves')->insert([
            'leaveID' => "GX0007",
            'userID' => "SX0004",
            'leaveType' => 0,
            'leaveDate' => "2022-12-09",
            'status' => 1,
        ]);
    }
}
