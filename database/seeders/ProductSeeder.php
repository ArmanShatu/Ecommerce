<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Sony',
            'price'=>'700',
            'description'=>'A Smart TV',
            'category'=>'SmartTV',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71VC9cPNy6L._AC_SL1080_.jpg'
            ],

            [
            'name'=>'Hitachi Refregerator',
            'price'=>'800',
            'description'=>'A Cooler with cool facilities',
            'category'=>'Fridge',
            'gallery'=>'https://static.clickbd.com/global/classified/item_img/2537875_0_original.jpg'
            ],
            [
            'name'=>'MSI Laptop',
            'price'=>'1200',
            'description'=>'A gaming laptop with super graphics',
            'category'=>'Laptop',
            'gallery'=>'https://gamespot1.cbsistatic.com/uploads/screen_kubrick/1551/15511094/3649375-msilaptop.jpg'
            ]
        ]);
    }
}
