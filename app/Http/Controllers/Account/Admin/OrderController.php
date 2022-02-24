<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Order;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderAll()
    {
        $data['orderall']=Order::get();
        return view('account.admin.order.all',$data);

    }

    public function orderCancel()
    {

        $data['ordercancel']=Order::where('status','=',0)->get();
        return view('account.admin.order.cancel',$data);


    }
    public function orderConfirmed()
    {
        $data['orderconfirmed']=Order::where('status','=',1)->get();
        return view('account.admin.order.confirmed',$data);

    }
    public function orderDelivered()
    {

        $data['orderdelivered']=Order::where('status','=',5)->get();
        return view('account.admin.order.delivered',$data);


    }
    public function orderFailed()
    {
        $data['orderfailed']=Order::where('status','=',7)->get();
        return view('account.admin.order.failed',$data);

    }
    public function orderOutofDelivery()

    {
        $data['orderoutofdelivery']=Order::where('status','=',4)->get();
        return view('account.admin.order.outofdelivery',$data);



    }
    public function orderPending()
    {
        $data['orderpending']=Order::where('status','=',2)->get();
        return view('account.admin.order.pending',$data);

    }
    public function orderProcessing()
    {
        $data['orderprocessing']=Order::where('status','=',3)->get();
        return view('account.admin.order.processing',$data);
    }

    public function orderReturn()
    {
        $data['orderreturn']=Order::where('status','=',6)->get();
        return view('account.admin.order.returned',$data);
    }

    public function orderShow($id)
    {
        $data['ordershow']=Order::find($id);
        return view('account.admin.order.show',$data);

    }


    public function paymentUpdate(Request $request, $id)
    {



        $request->validate([
            'payment_status' => ['required'],

        ]);

        $data = Order::find($id);
        $data->payment_status = $request->payment_status;
        $data->save();


        Notify::success('Payment Update Successfully!');
        return redirect()->back();


    }

    public function orderUpdate(Request $request, $id)
    {



        $request->validate([
            'status' => ['required'],

        ]);

        $order = Order::find($id);
        $input = $request->except('_token','_method');



        $order->fill($input)->save();

        Notify::success('Order Update Successfully!');
        return redirect()->back();


    }

    ################################# Billing Controller###############################


    public function Billing($id)
    {

        $data['order']=Order::find($id);
        return view('account.admin.order.billing',$data);


    }







}
