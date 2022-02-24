@extends('account.layouts.app',['title' => 'Update Product'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Product Update</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.product.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Product</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">

        <form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label"> Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>


                <div class="col-12 col-md-6 py-2">
                    <label> Vendor Name</label>
                    <select name="vendor_id" class="form-control">
                        <option value="">select</option>
                        @foreach($vendor as $item)
                            <option value="{{ $item->id }}" {{$item->id ==$product->vendor_id ? 'selected' : ''}} >{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Arabic Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name_ar" value="{{$product->name_ar}}">
                    <span class="text-danger">{{$errors->first('name_ar')}}</span>

                </div>



                <div class="col-12 col-md-6 py-2">
                    <label> Product Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">select</option>
                        @foreach($product_categories as $item)
                            <option value="{{ $item->id }}" {{$item->id ==$product->category_id ? 'selected' : ''}} >{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>

                </div>


                {{-- <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">tag <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tag" value="{{$product->tag}}">
                    <span class="text-danger">{{$errors->first('tag')}}</span>

                </div> --}}

                {{-- <div class="col-12 col-md-6 py-2">
                    <label> Color ID</label>
                    <select name="color_id" class="form-control">
                        <option value="">select</option>
                        @foreach($product_colors as $item)
                            <option value="{{ $item->id }}"{{$item->id ==$product->color_id ? 'selected' : ''}}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('color_id') }}</small>

                </div> --}}


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Product Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                    <span class="text-danger">{{$errors->first('price')}}</span>

                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Discount Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="discount_price" value="{{$product->discount_price}}">
                    <span class="text-danger">{{$errors->first('discount_price')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Active Price <span class="text-danger">*</span></label>
                    <select name="active_price" class="form-control">
                            <option value="1">Regular Price</option>
                            <option value="2">Discount Price</option>

                    </select>
                    <span class="text-danger">{{$errors->first('active_price')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image <span class="text-danger">*</span> <img src="{{asset($product->image)}}" style="width:100px;" alt=""></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>

                </div>







                {{-- <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Video <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="video" value="{{$product->video}}">
                    <span class="text-danger">{{$errors->first('video')}}</span>

                </div> --}}

                {{-- <div class="col-12  py-2">
                    <label for="" class="form-label">Additional Information <span class="text-danger">*</span></label>
                   <textarea name="additional_info" id="" cols="30" rows="10" class="form-control summernote">{{$product->additional_info}}</textarea>
                    <span class="text-danger">{{$errors->first('additional_info')}}</span>

                </div> --}}


                <div class="col-12 py-2">
                    <label for="" class="form-label">Short Description <span class="text-danger">*</span></label>
                    <textarea name="short_descriprion" cols="30" rows="10" class="form-control summernote"> {{$product->short_descriprion}}</textarea>
                    <span class="text-danger">{{$errors->first('short_descriprion')}}</span>

                </div>

                <div class="col-12 py-2">
                    <label for="" class="form-label">Short Description Arabic <span class="text-danger">*</span></label>
                    <textarea name="short_descriprion_ar" cols="30" rows="10" class="form-control summernote"> {{$product->short_descriprion_ar}}</textarea>
                    <span class="text-danger">{{$errors->first('short_descriprion_ar')}}</span>
                </div>

                <div class="col-12 py-2">
                    <label for="" class="form-label">Long Description <span class="text-danger">*</span></label>
                    <textarea name="long_description" cols="30" rows="10" class="form-control summernote"> {{$product->long_description}}</textarea>

                    <span class="text-danger">{{$errors->first('long_description')}}</span>
                </div>

                <div class="col-12 py-2">
                    <label for="" class="form-label">Long Description Arabic <span class="text-danger">*</span></label>
                    <textarea name="long_description_ar" cols="30" rows="10" class="form-control summernote"> {{$product->long_description_ar}}</textarea>

                    <span class="text-danger">{{$errors->first('long_description_ar')}}</span>
                </div>







                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.product.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>

                </div>
            </div>
        </form>
    </div>
    </div>


</main>
<!--end page main-->
@endsection
