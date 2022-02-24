<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $data['user'] = User::find(Auth::user()->id);
        $data['user_count'] = User::count();
        $data['total_product']=Product::where('status','!=',3)->count();
        $data['total_categories']=ProductCategory::count();
        $data['total_color']=ProductColor::count();
        $data['total_order']=Order::count();
        
        $data['cancel']=Order::where('status','=',0)->count();
        $data['Confirmed']=Order::where('status','=',1)->count();
        $data['pending']=Order::where('status','=',2)->count();
        $data['processing']=Order::where('status','=',3)->count();
        $data['outofdelivery']=Order::where('status','=',4)->count();
        $data['delivered']=Order::where('status','=',5)->count();
        $data['returned']=Order::where('status','=',6)->count();
        $data['failed']=Order::where('status','=',7)->count();
        return view('account.admin.dashboard',$data);
    }

    public function dashboardd(){
        dd('asdfasf');
    }

    public function index()
    {
        $data['contract']=Contract::get();
        return view('account.admin.contract.index',$data);
    }
    public function destroy($id)
    {

        Contract::find($id)->delete();

        Notify::success('Contract Delete Successfully!');
        return redirect()->route('admin.contract.index');

    }


}
