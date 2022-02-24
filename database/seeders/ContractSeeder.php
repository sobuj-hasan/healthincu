<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contract::create([
            'name'=>'zilan',
            'email'=>'z@gmail.com',
            'subject'=>'info',
            'message'=>'hello',
            'askquestion'=>0,
        ]);
        Contract::create([
            'name'=>'test2',
            'subject'=>'info',
            'message'=>'hello',
            'askquestion'=>1,
        ]);
        Contract::create([
            'name'=>'test3',
            'email'=>'z@gmail.com',
            'subject'=>'info',
            'message'=>'hello',
            'askquestion'=>0,
        ]);
    }
}
