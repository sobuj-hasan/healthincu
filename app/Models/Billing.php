<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;



protected $fillable = [


        'user_id',
        'name',
        'company_name',
        'company_id',
        'street_address',
        'apartment_address',
        'district_id',
        'town',
        'city',
        'zip_code',
        'contract_number',
        'email',
        'notes',


];


}
