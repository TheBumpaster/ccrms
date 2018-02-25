<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categories

        for ( $i = 0; $i < 7; $i++) {

        	DB::table('categories')->insert([
        	'name' => 'Items '. $i,
        	'description' => str_random(10),
        	'icon' => 'fa fa-coffee'
        	]);

        }

        for ( $j = 0; $j < 30; $j++ ) {

        	DB::table('products')->insert([
        		'name' => 'Item ' .$j,
        		'description' => str_random(30),
        		'image' => '',
        		'price' => 3.50,
        		'quantity' => 100,
        		'category' => 1
        		]);

        }

        for ( $k = 0; $k < 2; $k++ ) {

        	DB::table('seats')->insert([
        		'name' => 'Table '. $k,
        		'number' => $k,
        		'status' => 'Active'
        		]);

        }

        for ( $k = 0; $k < 7; $k++ ) {

            DB::table('orders')->insert([
                'purchased_on' => date("Y/m/d"),
                'base_price' => '300',
                'purchased_price' => '350',
                'status' => 'Accepted',
                'user' => '1',
                'created_at' => date("Y/m/d h:i:s"),
                'updated_at' => date("Y/m/d h:i:s")
                ]);

        }

    }
}
