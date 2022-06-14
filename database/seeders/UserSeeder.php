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
        User::Create([
            'name' => "Bilisuma Tadesse",
            'email'=>"bilitade2022@gmail.com",
            'password'=>Hash::make("password"),
            'email_verified_at'=>$timestamp


        ])->assignRole("admin");

        User::Create([
            'name' => "Wakoya Kumsa",
            'email'=>"waqo1234567@gmail.com",
            'password'=>Hash::make("password"),
            'email_verified_at'=>$timestamp


        ])->assignRole("school");
        User::Create([
            'name' => "Jitu Geleta",
            'email'=>"geletajitu@gmail.com",
            'password'=>Hash::make("password"),
            'email_verified_at'=>$timestamp


        ])->assignRole("teacher");

        User::Create([
            'name' => "Yerusalem Bayisa",
            'email'=>"yerobayo12@gmail.com",
            'password'=>Hash::make("password"),
            'email_verified_at'=>$timestamp


        ])->assignRole("student");

        User::Create([
            'name' => "John Doe",
            'email'=>"johndoe@gmail.com",
            'password'=>Hash::make("password"),
            'email_verified_at'=>$timestamp


        ])->assignRole("department");




    }
}
