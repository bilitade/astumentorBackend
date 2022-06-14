<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role ;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(
            ['name' => "admin"],

        );
        Role::updateOrCreate(
            ['name' => "student Union"]

        );
        Role::updateOrCreate(
            ['name' => "department"]

        );
        Role::updateOrCreate(
            ['name' => "school"]

        );
        Role::updateOrCreate(
            ['name' => "Student"]

        );
        Role::updateOrCreate(
            ['name' => "teacher"]

        );









    }
}
