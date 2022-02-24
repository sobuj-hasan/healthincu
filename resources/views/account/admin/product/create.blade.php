@extends('account.layouts.app',['title' => 'Create Product'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Product Create</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.product.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Product</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif


        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label"> Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Arabic Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name_ar" value="{{old('name_ar')}}">
                    <span class="text-danger">{{$errors->first('name_ar')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label> Vendor Name</label>
                    <select name="vendor_id" class="form-control">
                        <option value="">select</option>
                        @foreach($vendor as $item)
                            <option value="{{ $item->id }}" {{old('vendor_id') == $item->id ? 'selected' : ''}}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>

                </div>


                <div class="col-12 col-md-6 py-2">
                    <label> Product Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">select</option>
                        @foreach($product_categories as $item)
                            <option value="{{ $item->id }}" {{old('category_id') == $item->id ? 'selected' : ''}}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>

                </div>


                {{-- <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">tag <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tag" value="{{old('tag')}}">
                    <span class="text-danger">{{$errors->first('tag')}}</span>

                </div> --}}

                {{-- <div class="col-12 col-md-6 py-2">
                    <label> Color ID</label>
                    <select name="color_id" class="form-control">
                        <option value="">select</option>
                        @foreach($product_colors as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('color_id') }}</small>

                </div> --}}


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Product Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="price" value="{{old('price')}}">
                    <span class="text-danger">{{$errors->first('price')}}</span>

                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Discount Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="discount_price" value="{{old('discount_price')}}">
                    <span class="text-danger">{{$errors->first('discount_price')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Active Price <span class="text-danger">*</span></label>
                    <select name="active_price" class="form-control">
                            <option value="1" {{old('active_price') == 1 ? 'selected' : ''}}>Regular Price</option>
                            <option value="2" {{old('active_price') == 2 ? 'selected' : ''}}>Discount Price</option>
                    </select>
                    <span class="text-danger">{{$errors->first('active_price')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>

                </div>

                {{-- <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Multi Image</label>
                    <input type="file" class="form-control" name="multi_image[]" multiple>

                </div> --}}









                {{-- <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Video <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="video" value="{{old('video')}}">
                    <span class="text-danger">{{$errors->first('video')}}</span>

                </div> --}}

                {{-- <div class="col-12  py-2">
                    <label for="" class="form-label">Additional Information <span class="text-danger">*</span></label>
                   <textarea name="additional_info" id="" cols="30" rows="10" class="form-control summernote">{{old('additional_info')}}</textarea>
                    <span class="text-danger">{{$errors->first('additional_info')}}</span>

                </div> --}}

                {{-- <div class="col-12  py-2">
                    <label for="" class="form-label">Arabic Additional Information <span class="text-danger">*</span></label>
                   <textarea name="additional_info_ar" id="" cols="30" rows="10" class="form-control summernote">{{old('additional_info_ar')}}</textarea>
                    <span class="text-danger">{{$errors->first('additional_info_ar')}}</span>

                </div> --}}


                <div class="col-12 py-2">
                    <label for="" class="form-label">Short Description <span class="text-danger">*</span></label>
                    <textarea name="short_descriprion" cols="30" rows="10" class="form-control summernote"> {{old('short_descriprion')}}</textarea>
                    <span class="text-danger">{{$errors->first('short_descriprion')}}</span>

                </div>


                <div class="col-12 py-2">
                    <label for="" class="form-label">Arabic Short Description <span class="text-danger">*</span></label>
                    <textarea name="short_descriprion_ar" cols="30" rows="10" class="form-control summernote"> {{old('short_descriprion_ar')}}</textarea>
                    <span class="text-danger">{{$errors->first('short_descriprion_ar')}}</span>

                </div>





                <div class="col-12 py-2">
                    <label for="" class="form-label">Long Description <span class="text-danger">*</span></label>
                    <textarea name="long_description" cols="30" rows="10" class="form-control summernote"> {{old('long_description')}}</textarea>

                    <span class="text-danger">{{$errors->first('long_description')}}</span>

                </div>

                <div class="col-12 py-2">
                    <label for="" class="form-label">Arabic Long Description <span class="text-danger">*</span></label>
                    <textarea name="long_description_ar" cols="30" rows="10" class="form-control summernote"> {{old('long_description_ar')}}</textarea>

                    <span class="text-danger">{{$errors->first('long_description_ar')}}</span>

                </div>

                <div class="col-12 py-2">
                    <label for="" class="form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                            <option value="1" {{old('status') == 1 ? 'selected' : ''}}>Active</option>
                            <option value="2" {{old('status') == 2 ? 'selected' : ''}}>Pending</option>
                    </select>
                    <span class="text-danger">{{$errors->first('active_price')}}</span>
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
