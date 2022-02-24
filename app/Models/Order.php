<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
    return $this->belongsTo(User::class,'user_id');
    }
    public function billing()
    {
    return $this->belongsTo(Billing::class,'billing_id');

    }
    public function orderdetails()
    {
    return $this->hasMany(OrderDetail::class,'order_id','id');

    }
    





    protected $fillable = [
        'payment_status',
        'status',

    ];

}
