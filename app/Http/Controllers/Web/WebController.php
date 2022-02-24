<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ProductCategory;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function homepage(){

        $data['products'] =Product::where('status',1)->limit(10)->get();
        $data['todayproducts'] =Product::where('created_at', '=', Carbon::now())->where('status',1)->limit(10)->get();
        $data['productscategories'] =ProductCategory::where('status',1)->limit(10)->get();
        $data['todayproduct'] =ProductCategory::where('status',1)->limit(10)->get();
        return view('web.homepage',$data);
    }
    public function about(){
        return view('web.about');
    }
    public function contact(){
        return view('web.contact');
    }
    public function contactStore(Request $request){
           $request->validate([
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'your_need' => 'required',
           ]);

           
           $data = new Contract();
           $input = $request->except('_token','_method');
           $data->fill($input)->save();
   
           Notify::success('Contact Submit Successfully!');
           return redirect()->back();

          
    }
    public function productCategory($slug){

        $product_cat = ProductCategory::where('slug',$slug)->first();
        $data['fetureproducts'] =Product::where('status',1)->limit(10)->get();
        $data['products'] = Product::where('status',1)->where('category_id',$product_cat->id)->get();
        return view('web.product-category',$data);
    }
}
