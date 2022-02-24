<?php

namespace Database\Seeders;

use App\Models\Billing;
use Illuminate\Database\Seeder;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Billing::create([

            'user_id' => 3,
            'name'=>'zilan',
            'company_name'=>'abc',
            'country_id'=>'+88',
            'street_address'=>'badda link road',
            'apartment_address'=>'5/a',
            'district_id'=>1,
            'town'=>'dhaka-north',
            'city'=>'dhaka',
            'zip_code'=> '1200',
            'contract_number'=>'012345678',
            'email'=>'example@gmail.com',
            'notes'=>'hello',


        ]); Billing::create([

            'user_id' => 3,
            'name'=>'kkk',
            'company_name'=>'abc',
            'country_id'=>'+88',
            'street_address'=>'badda link road',
            'apartment_address'=>'5/a',
            'district_id'=>1,
            'town'=>'comilla-north',
            'city'=>'comilla',
            'zip_code'=> '1200',
            'contract_number'=>'012345678',
            'email'=>'example@gmail.com',
            'notes'=>'hey',


        ]);
    }
}
