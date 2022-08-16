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
            'image'=> 'https://downloader.la/temp/[Downloader.la]-62ea2bc1d141d.jpg',
            'amount'=>'200'
            ],
            [
                'unit'=>'mobile App development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62ea2c4ba67dc.jpg',
                'amount'=>'100'
            ],
            [
                'unit'=>'graphic design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62ea2ceb7c276.jpg',
                'amount'=>'300'
            ],
            [
                'unit'=>'software development',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62ea2d8bd448b.jpg',
                'amount'=>'150'
            ],
            [
                'unit'=>'data analysis',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62ea2e1af0246.jpg',
                'amount'=>'100'
            ],
            [
                'unit'=>'cyber security',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62ea2b5a1fc27.jpg',
                'amount'=>'250'
            ],
            
            [
                'unit'=>'web design',
                'image'=>'https://downloader.la/temp/[Downloader.la]-62ea122a6bdd1.jpg',
                'amount'=>'180'
            ]
                

        ]);
    }
}
