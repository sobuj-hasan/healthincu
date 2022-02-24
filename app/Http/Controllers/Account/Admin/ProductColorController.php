<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\ProductColor;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class ProductColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['products'] = ProductColor::where('status','!=','3')->get();

        return view('account.admin.product-color.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.admin.product-color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',

        ]);


          $data=new ProductColor();

        $input = $request->except('_token','_method');

        $data->fill($input)->save();

        Notify::success('Food Color Create Successfully!');
        return redirect()->route('admin.product-color.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['products'] = ProductColor::find($id);
        // $data['blog_categories'] = ProductColor::where('status',1)->get();
        return view('account.admin.product-color.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            'name' => ['required'],

        ]);

        $products = ProductColor::find($id);
        $input = $request->except('_token','_method');



        $products->fill($input)->save();

        Notify::success('Product Color Update Successfully!');
        return redirect()->route('admin.product-color.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $products = ProductColor::find($id);

        $products->status = 3;

        $products->save();

        Notify::success('Product Color Delete Successfully!');
        return redirect()->route('admin.product-color.index');
    }
}
