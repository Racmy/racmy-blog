<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_num = DB::table('users')->count();
        if ($user_num === 0) {
            DB::table('users')->insert([
                [
                    'name' => 'tomo',
                    'password' => Hash::make('password'),
                ],
                [
                    'name' => 'yuto',
                    'password' => Hash::make('password'),
                ]
            ]);
        }
    }
}