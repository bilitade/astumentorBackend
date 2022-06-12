<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
            'id' =>"First Year",
            'name' => "First Year",
            'YearInNum'=>1,

        ]);

        DB::table('years')->insert([
            'id' => "Second Year",
            'name' => "Second Year",
            'YearInNum'=>2

        ]);

        DB::table('years')->insert([
            'id' => "Thrid Year",
            'name' => "Thrid Year",
            'YearInNum'=>3

        ]);
        DB::table('years')->insert([
            'id' => "Fourth Year",
            'name' => "Fourth Year",
            'YearInNum'=>4

        ]);

        DB::table('years')->insert([
            'id' => "Fifth Year",
            'name' => "Fifth Year",
            'YearInNum'=>5

        ]);


    }
}
