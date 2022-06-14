<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'id' =>1,
            'name' => "CSE",
            "title"=>"Computer Science and Engineering",
            "objective"=>"",
            "description"=>"",
            "school_id"=>2,
            "admin_id"=>5,


        ]);



    }
}
