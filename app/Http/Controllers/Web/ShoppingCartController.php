<?php

namespace App\Http\Controllers\Web;


use App\Models\Order;
use App\Models\Billing;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCartController extends Controller
{
    public function store(Request $request)
    {
      
        $input = $request->all();

        $product = Product::find($request->product_id);
        

        $data['qty'] = 1;
        $data['id']  = $request->product_id;
        $data['name']= $product->name;

        if($product->active_price==1){
            $data['price'] = $product->price;
        }else{
            $data['price'] = $product->discount_price;
        }

        $data['weight'] = '1';

        $data['options']['image'] = $product->image;
        $data['options']['slug'] = $product->slug;
        $data['options']['created_at'] = $product->created_at;

        Cart::add($data);

        return response()->JSON();

    }



    public function storesingle(Request $request)
    {
        $input = $request->all();

        $product = Product::find($request->product_id);

        $data['qty']    = $request->qty;
        $data['id']     = $request->product_id;
        $data['name']   = $product->product_title;

        if($product->price_active==1){
            $data['price'] = $product->sell_price;
        }else{
            $data['price'] = $product->discount;
        }

        $data['weight'] = '1';

        $data['options']['image'] = $product->default_image;
        $data['options']['product_slug'] = $product->product_slug;

        Cart::add($data);


        return response()->JSON();
    }



    public function update(Request $request)
    {
        $cart = Cart::content()->where('rowId', $request->rowId)->first();
        return $cart;
        $cart->update([
            'qty' => $request->cart_value
        ]);

       return response([
            'status' => 200,
            'message' => "Cart updated successfully.",
       ]);
    }



   public function decrementCart(Request $request)
   {
       $rowId = $request->rowId;
       $row = Cart::get($rowId);
       $row_item= Cart::update($rowId,$row->qty-1);
        return response()->JSON($row_item);
   }

   public function remove_cart(Request $request)
   {
        $rowId = $request->rowId;
        $row = Cart::remove($rowId);
        return response()->JSON($row);
   }

    public function cartableajax()
    {
         return view('web.component.carttable');
    }



    public function carttotaljax()
    {
         return view('fontend.productscart.cartsummery');
    }




    public function productscart()
    {
        $data['products'] = Cart::content();
        return view('web.cart-list',$data);
    }

    public function showcarttable()
    {
        $data['products'] = Cart::content();
        return view('web.component.carttable',$data);
    }




    // public function productsbilling()
    // {
    //     if(!Auth::user()){
    //         $notification = array(
    //                 'message' => 'Please Login first!',
    //                 'alert-type' => 'error'
    //         );
    //         return redirect()->route('login')->with($notification);
    //     }

    //         $data['countb']  = Billing::where('user_id',Auth::user()->id)->count();
    //         $data['billing'] = Billing::where('user_id',Auth::user()->id)->first();
    //         $data['countries']  = Country::all();

    //         return view('frontend.pages.billing',$data);
       


    // } 



 

    /*cart ajax call */

    public function showcartcount()
    {
        return view('web.component.count-cart');
    }


    

    public function showcartsummery()
    {
        return view('frontend.productscart.cartsummery');
    }



    public function destroy(Request $request)
    {

       Cart::remove($request->rowId);

       return response()->JSON();
    }


    // public function cartStore(Request $request){

    //     return Cart::get();

    //     $request->validate([
    //         'email' => 'required',
    //         'country' => 'required',
    //         'city' => 'required',
    //         'contract_number' => 'required',
    //         'billing_method' => 'required',
    //         'payment_method' => 'required',
    //     ]);

    //     $billing = new Billing();
    //     $billing->email = $request->email;
    //     $billing->country = $request->country;
    //     $billing->city = $request->city;
    //     $billing->contract_number = $request->contract_number;
    //     $billing->save();


    // }


    public function cartStore(Request $request){

        if(Auth::check()){

        $request->validate([
            'email' => 'required',
            'country' => 'required',
            'city' => 'required',
            'contract_number' => 'required',
            'billing_method' => 'required',
            'payment_method' => 'required',

        ]);

        DB::beginTransaction();
        try {
            
            
        $input = $request->all();

           if(!empty($request->billing_id)){
                $billing = Billing::find($request->billing_id);
            }
            else{
                $billing = New Billing();
            }
        
        $billing->email = $request->email;
        $billing->country = $request->country;
        $billing->city = $request->city;
        $billing->contract_number = $request->contract_number;
        $billing->save();



        $order = New Order();
        $order->user_id     = Auth::user()->id;
        $order->billing_id  = $billing->id;
        $order->subtotal    = Cart::subtotal();
        $order->shipping    = $request->shipping?$request->shipping:0;
        $order->vat         = Cart::tax();
        $order->total       = Cart::total();
        // $order->payment_method  = $request->payment_method;
        // $order->billing_method  = $request->billing_method;
        $order->status      = 0;
        $order->save();


        foreach(Cart::content() as $data)
        {
            $product = Product::find($data->id);
            $orderdetail = New OrderDetail();
            $orderdetail->order_id   = $order->id;
            $orderdetail->product_id = $product->id;
            $orderdetail->vendor_id  = $product->vendor_id;
            $orderdetail->qty        = $data->qty;
            $orderdetail->price      = $data->price;
            $orderdetail->total_price= $data->subtotal();
            $orderdetail->status     = 1;
            $orderdetail->save();
        }

 

        // $payment            = New Payment();
        // $payment->user_id   = Auth::user()->id;
        // $payment->order_id  = $order->id;
        // $payment->payment   = $request->payment;
        // $payment->type      = 1;  // for instrument
        // $payment->save();

        cart::destroy();

        DB::commit();
      
        Notify::success('Order Submit Successfully!');
        return redirect()->route('homepage');
        }

        catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

    }else{
        Notify::warning('Opps...Please Login First !!');
        return redirect()->route('login');
    }
    }
}
