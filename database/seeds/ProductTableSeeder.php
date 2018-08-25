<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('products')->insert([[
    		'name' => '修臉',
    		'category_id' => 1,
    		'description' => '修臉服務',
    		'price' => 1800,
    		'quantity' => 10,
    		'imageUrl' => "https://i.ytimg.com/vi/ysUBwjiB1Wk/maxresdefault.jpg"
    	],[
    		'name' => '修身',
    		'category_id' => 1,
    		'description' => '修身服務',
    		'price' => 600,
    		'quantity' => 20,
    		'imageUrl' => "data:image/jpeg;base64,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"
    	],[
    		'name' => '隆胸',
    		'category_id' => 1,
    		'description' => '隆胸服務',
    		'price' => 1500,
    		'quantity' => 5,
    		'imageUrl' => "https://i.ytimg.com/vi/9FWgcBfs5A0/maxresdefault.jpg"
    	],[
    		'name' => '隆腳',
    		'category_id' => 1,
    		'description' => '隆腳服務',
    		'price' => 1300,
    		'quantity' => 3,
    		'imageUrl' => "https://www.plasticsurgery.org/images/Blog/plastic-surgery-thin-legs.jpg?width=700"
    	],[
    		'name' => '隆鳥',
    		'category_id' => 1,
    		'description' => '隆鳥服務',
    		'price' => 1100,
    		'quantity' => 7,
    		'imageUrl' => "https://i.ytimg.com/vi/0WdzJSrMkro/hqdefault.jpg?sqp=-oaymwEWCKgBEF5IWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLCYPNdredQc0gBPiL3qs0SO30ZmSg"
    	]]);
    }
}
