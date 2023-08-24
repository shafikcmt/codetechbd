<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => 'admin',
            'email'             => 'admin@gmail.com',
            'phone'             => '01732805218',
            'designation'       => 'Web Application Developer',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin123@#'),
            'remember_token'    => Str::random(10),
        ]);
    }
}
