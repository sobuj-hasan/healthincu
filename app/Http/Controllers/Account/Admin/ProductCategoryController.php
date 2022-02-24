<?php

namespace App\Http\Controllers\Account\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['products'] = ProductCategory::where('status','!=','3')->get();
        return view('account.admin.product-category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('account.admin.product-category.create');
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
            'commission'=>'required'

        ]);


        $data=new ProductCategory();

        $input = $request->except('_token','_method','image');

        $image = $request->image;
            if($image){
                @unlink($data->image);
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'uploads/product-category/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $image->move($filepath,$imagename);
                $input['image'] = $imagename;

            }

        $input['slug'] = Str::slug($request->name,'-');
        $data->fill($input)->save();

        Notify::success('Product Category Create Successfully!');
        return redirect()->route('admin.product-category.index');
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


        $data['products'] = ProductCategory::find($id);

        return view('account.admin.product-category.edit',$data);
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
            'commission'=>['required']

        ]);

        $products = ProductCategory::find($id);
        $input = $request->except('_token','_method','image');

        $image = $request->image;
            if($image){
                @unlink($products->image);
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'uploads/product-category/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $image->move($filepath,$imagename);
                $input['image'] = $imagename;

            }

        $products->fill($input)->save();

        Notify::success('Product Category Update Successfully!');
        return redirect()->route('admin.product-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $products = ProductCategory::find($id);

        $products->status = 3;

        $products->save();

        Notify::success('Product Category Delete Successfully!');
        return redirect()->route('admin.product-category.index');
    }
}
