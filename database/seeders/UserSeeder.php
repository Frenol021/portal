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
        //
        DB::table('users')->insert([
            [
            'name'=>'Dennis kimathi',
            'email'=>'denniskimathi@gmail.com',
            'password'=>Hash::make('1234'),
            'employer_no'=>'12345',
            'phone_no'=>'0708265388'
            ],
            [
                'name'=>'jonte fresh',
                'email'=>'jonte123@gmail.com',
                'password'=>Hash::make('123'),
                'employer_no'=>'1234',
                'phone_no'=>'0708265380'
            ]


        ]);
    }
}
