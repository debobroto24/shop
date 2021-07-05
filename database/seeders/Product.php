<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')
            ->insert([
                [
                    'name' => 'vivo',
                    'price' => '200',
                    'brand' => 'vivo',
                    'catagory' => 'mobile',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'vivo2.jpg'
                ],
                [
                    'name' => 'vivo',
                    'brand' => 'vivo',
                    'price' => '300',
                    'catagory' => 'mobile',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'vivo3.jpg'
                ],
                [
                    'name' => 'vivo',
                    'brand' => 'vivo',
                    'price' => '2030',
                    'catagory' => 'mobile',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'vivo4.jpg'
                ],

                [
                    'name' => 'vivo',
                    'brand' => 'vivo',
                    'price' => '20330',
                    'catagory' => 'mobile',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'vivo5.jpg'
                ],
                [
                    'name' => 'hp',
                    'brand' => 'hp',
                    'price' => '200',
                    'catagory' => 'leptop',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'leptop1.jpg'
                ],
                [
                    'name' => 'hp',
                    'brand' => 'hp',
                    'price' => '200',
                    'catagory' => 'leptop',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'leptop2.jpg'
                ],
                [
                    'name' => 'leptop',
                    'brand' => 'hp',
                    'price' => '2e00',
                    'catagory' => 'leptop',
                    'detail' => 'this is a mobile of vlaue for money every feature is in it',
                    'img' => 'leptop3.jpg'
                ]
            ]);
    }
}
