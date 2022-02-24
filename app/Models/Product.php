<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'name_ar',
        'slug',
        'category_id',
        'tag',
        'color_id',
        'price',
         'discount_price',
         'active_price',
         'short_descriprion',
         'short_descriprion_ar',
         'long_description',
         'long_description_ar',
         'additional_info',
         'additional_info_ar',
         'video',
         'image',
         'vendor_id',
         'status'

    ];

    public function productcategory()
    {
    return $this->belongsTo(ProductCategory::class,'category_id');
    }

    public function productcolor()
    {
    return $this->belongsTo(ProductColor::class,'color_id');
    }

    public function mutiimage()
    {
    return $this->hasMany(ProductMultiImage::class, 'product_id', 'id');
    }
    public function vendor()
    {
    return $this->belongsTo(User::class, 'vendor_id');
    }


}
