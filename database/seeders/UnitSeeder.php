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
            'image'=> 'https://downloader.la/temp/[Downloader.la]-62a050b5e9624.jpg'
            ],
            [
                'unit'=>'mobile App development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62a051f2c3659.jpg'
            ],
            [
                'unit'=>'graphic design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62a0588227f58.jpg'
            ],
            [
                'unit'=>'software development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62a0598cd0b0c.jpg'
            ],
            [
                'unit'=>'data analysis',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62a05c494892b.jpg'
            ],
            [
                'unit'=>'cyber security',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62a05d0338f97.jpg'
            ]
            
        


        ]);
    }
}
