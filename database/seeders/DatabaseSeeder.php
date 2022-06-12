<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\curriculum\School;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
        //     SchoolSeeder::class,
        //      YearSeeder::class,
        //    SemesterSeeder::class,
        //      TypeSeeder::class,

        //     DepartmentSeeder::class,
        //     CourseSeeder::class,
            RolePermissionSeeder::class,
            UserSeeder::class
        ]);





    }
}
