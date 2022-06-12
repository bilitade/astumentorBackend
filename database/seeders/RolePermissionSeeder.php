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
            ['name' => "Admin"],

        );
        Role::updateOrCreate(
            ['name' => "Student Union"]

        );
        Role::updateOrCreate(
            ['name' => "Department"]

        );
        Role::updateOrCreate(
            ['name' => "Student"]

        );
        Role::updateOrCreate(
            ['name' => "Teacher"]

        );









    }
}
