<?php

namespace App\Http\Controllers\Account\Vendor;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function dashboard(){

        $data['user'] = User::find(Auth::user()->id);
        $data['total_product']=Product::where('status','!=',3)->count();
        $data['total_order']=Order::count();
        return view('account.vendor.dashboard',$data);
    }

    public function orderAll()
    {
        $data['orderall']=Order::where('user_id','=',Auth::user()->id)->get();
        return view('account.vendor.order.index',$data);
    }

    public function orderBilling($id)
    {
        $data['order']=Order::find($id);
        return view('account.vendor.order.billing',$data);
    }





}


