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
            'image'=> 'https://downloader.la/temp/[Downloader.la]-62b00f9c5633f.jpg'
            ],
            [
                'unit'=>'mobile App development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b01191bb431.jpg'
            ],
            [
                'unit'=>'graphic design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b0112661e60.jpg'
            ],
            [
                'unit'=>'software development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b0120296c2f.jpg'
            ],
            [
                'unit'=>'data analysis',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b012a2f1e62.jpg'
            ],
            [
                'unit'=>'cyber security',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b012eb4279f.jpg'
            ],
            
            [
                'unit'=>'web design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62b00c87ab71b.jpg'
            ]
                

        ]);
    }
}
