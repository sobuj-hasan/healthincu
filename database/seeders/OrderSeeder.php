<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 3,
            'billing_id' => 1,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '500',
            'shipping' => '50',
            'vat' => '',
            'total' => '550',
            'status' => 2,
            'payment_status'=> 1,

        ]);

        Order::create([
            'user_id' => 3,
            'billing_id' => 2,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '600',
            'shipping' => '50',
            'vat' => '',
            'total' => '650',
            'status' => 2,
            'payment_status'=> 0,

        ]);

        Order::create([
            'user_id' => 3,
            'billing_id' => 3,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '700',
            'shipping' => '50',
            'vat' => '',
            'total' => '750',
            'status' => 2,
            'payment_status'=> 1,
        ]);
        Order::create([
            'user_id' => 3,
            'billing_id' => 4,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '800',
            'shipping' => '50',
            'vat' => '',
            'total' => '850',
            'status' => 2,
            'payment_status'=> 0,
        ]);
        Order::create([
            'user_id' => 3,
            'billing_id' => 5,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '900',
            'shipping' => '50',
            'vat' => '',
            'total' => '950',
            'status' => 2,
            'payment_status'=> 1,

        ]);

        Order::create([
            'user_id' => 3,
            'billing_id' => 6,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '100',
            'shipping' => '50',
            'vat' => '',
            'total' => '150',
            'status' => 2,
            'payment_status'=> 0,

        ]);
        Order::create([
            'user_id' => 3,
            'billing_id' => 7,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '200',
            'shipping' => '50',
            'vat' => '',
            'total' => '250',
            'status' => 2,
            'payment_status'=> 1,
        ]);
        Order::create([
            'user_id' => 3,
            'billing_id' => 8,
            'coupon' => '',
            'discount' => '',
            'subtotal' => '300',
            'shipping' => '50',
            'vat' => '',
            'total' => '350',
            'status' => 2,
            'payment_status'=> 0,

        ]);


    }
}
