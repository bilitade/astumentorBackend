<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'id' => "First Semester",
            'name' => "First Semester",

        ]);
        DB::table('semesters')->insert([
            'id' => "Second Semester",
            'name' => "Second Semester",

        ]);

        DB::table('semesters')->insert([
            'id' =>"Thrid Semester",
            'name' => "Thrid Semester",

        ]);

    }
}
