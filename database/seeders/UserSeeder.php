<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [
                'name' => 'Inthania Nadicika Kurniawan',
                'email' => 'nadacika17@gmail.com',
                'password' => Hash::make('1234')
            ], 
            [
                'name' => 'Tesya Eriana',
                'email' => 'tesyaeriana00@gmail.com',
                'password' => Hash::make('5678')
            ]
            ]);
    }
}
