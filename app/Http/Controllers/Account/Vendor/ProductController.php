<?php

namespace App\Http\Controllers\Account\Vendor;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductMultiImage;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::where('status','!=','3')->where('vendor_id','=',Auth::user()->id)->get();

        return view('account.vendor.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $data['product_categories'] = ProductCategory::get();
        $data['product_colors'] = ProductColor::get();
        $data['vendor']= User::where('role',2)->get();

        return view('account.vendor.product.create',$data);
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
            'category_id'=>'required|numeric',
            // 'tag'=>'required',
            // 'color_id'=>'required|numeric',
            'price'=>'required|numeric',
            'discount_price'=>'required|numeric',
            'active_price'=>'required|numeric',
            'short_descriprion'=>'required',
            'short_descriprion_ar'=>'required',
            'long_description'=>'required',
            'long_description_ar'=>'required',
            // 'additional_info'=>'required',
            // 'additional_info_ar'=>'required',
            // 'video'=>'required',
            'image'=>'required',


        ]);




        $data=new Product();

        $input = $request->except('_token','image','_method');

        $image = $request->image;
            if($image){

                @unlink($data->image);
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'uploads/products/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $image->move($filepath,$imagename);



                $input['image'] = $imagename;

            }

        $input['vendor_id'] =  Auth::user()->id;
        $input['slug'] = Str::slug($request->name,'-');


        $data->fill($input)->save();


        if ($request->hasFile('multi_image')) {
            foreach ($request->multi_image as $image) {
                $photo_name = time().rand(1, 100).'.'.$image->extension();
                $image->move(public_path('upload/product'), $photo_name);
                $imagesave = 'upload/product/'.$photo_name;

                ProductMultiImage::create([
                    'product_id' => $data->id,
                    'multi_image' => $imagesave,
                ]);
            }
        }

        Notify::success('Product Create Successfully!');
        return redirect()->route('vendor.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data['product']= Product::find($id);


        // $single_case = Casee::find($id);
        // $data['case_solutions'] = Case_Solution::where('casee_id',$single_case->id)->get();

        return view('account.vendor.product.show',$data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product']= Product::find($id);
        $data['product_categories'] = ProductCategory::get();
        $data['product_colors'] = ProductColor::get();
        $data['vendor']=User::where('role',2)->get();

        return view('account.vendor.product.edit',$data);
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
            'name' => 'required',
            'category_id'=>'required|numeric',
            // 'tag'=>'required',
            // 'color_id'=>'required|numeric',
            'price'=>'required|numeric',
            'discount_price'=>'required|numeric',
            'active_price'=>'required|numeric',
            'short_descriprion'=>'required',
            'long_description'=>'required',
            // 'additional_info'=>'required',
            // 'video'=>'required',



        ]);




        $data= Product::find($id);

        $input = $request->except('_token','image','_method');

        $image = $request->image;
            if($image){

                @unlink($data->image);
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'uploads/products/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $image->move($filepath,$imagename);



                $input['image'] = $imagename;

            }







        $input['slug'] = Str::slug($request->name,'-');

        $data->fill($input)->save();

        Notify::success('Product Update Successfully!');
        return redirect()->route('vendor.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $products = Product::find($id);

        $products->status = 3;

        $products->save();

        Notify::success('Product Delete Successfully!');
        return redirect()->route('vendor.product.index');
    }
}
