<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([
           'order_id' => 1,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 500,
            'total_price' =>500,
            'status' => 2,

        ]);
        OrderDetail::create([
           'order_id' => 2,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 600,
            'total_price' =>600,
            'status' => 2,

        ]);
         OrderDetail::create([
           'order_id' => 3,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 700,
            'total_price' =>700,
            'status' => 2,

        ]);
         OrderDetail::create([
           'order_id' => 4,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 800,
            'total_price' =>800,
            'status' => 2,

        ]);
        OrderDetail::create([
           'order_id' => 5,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 900,
            'total_price' =>900,
            'status' => 2,

        ]);
         OrderDetail::create([
           'order_id' => 6,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 500,
            'total_price' =>100,
            'status' => 2,

        ]);
         OrderDetail::create([
           'order_id' => 7,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 200,
            'total_price' =>200,
            'status' => 2,

        ]);
        OrderDetail::create([
           'order_id' => 8,
            'vendor_id' => 2,
            'product_id' => 1,
            'qty' => 1,
            'price' => 300,
            'total_price' =>300,
            'status' => 2,
            
        ]);
    }
}
