<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now()->timestamp;
        $user=User::Create([
            'name' => "Bilisuma Tadesse",
            'email'=>"bilitade2022@gmail.com",
            'password'=>Hash::make("password"),
            'email_verified_at'=>$timestamp


        ]);

        $user->assignRole("Admin");

    }
}