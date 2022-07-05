<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit')->insert([
            [
            'unit'=>'web development',
            'image'=> 'https://downloader.la/temp/[Downloader.la]-62b00f9c5633f.jpg',
            'amount'=>'Ksh 200'
            ],
            [
                'unit'=>'mobile App development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b01191bb431.jpg',
                'amount'=>'Ksh 100'
            ],
            [
                'unit'=>'graphic design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b0112661e60.jpg',
                'amount'=>'Ksh 300'
            ],
            [
                'unit'=>'software development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b0120296c2f.jpg',
                'amount'=>'Ksh 150'
            ],
            [
                'unit'=>'data analysis',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b012a2f1e62.jpg',
                'amount'=>'Ksh 100'
            ],
            [
                'unit'=>'cyber security',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b012eb4279f.jpg',
                'amount'=>'ksh 250'
            ],
            
            [
                'unit'=>'web design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b00c87ab71b.jpg',
                'amount'=>'Ksh 180'
            ]
                

        ]);
    }
}
