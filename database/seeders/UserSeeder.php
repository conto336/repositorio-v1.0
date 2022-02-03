<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = DB::table('users')->insert([
            'name' => strtoupper('Carlos Jerónimo'),
            'lastname' => strtoupper('López Conto'),
            'role' => strtoupper('admin'),
            'initials' => strtoupper('cc'),
            'carrer' => strtoupper('electronica'),
            'carnet' => 15047113,
            'email' => 'admin@admin',
            'password' =>Hash::make('facultativa2021'),
        ]);
    }
}
