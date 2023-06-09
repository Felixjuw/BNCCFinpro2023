<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'username' => 'bintang',
            'password' => 'welcome',
            'IsAdmin' => 'yes',
        ]);
        DB::table('users')->insert([
            'username' => 'abdul',
            'password' => 'welcome',
            'IsAdmin' => 'yes',
        ]);
        DB::table('users')->insert([
            'username' => 'dewi',
            'password' => 'welcome',
            'IsAdmin' => 'yes',
        ]);
    }
}