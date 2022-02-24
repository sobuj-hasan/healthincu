@extends('account.layouts.app',['title' => 'Create Slider'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Slider</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.slider.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Slider</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Slider Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
              
                <div class="col-12 col-md-12 py-2">
                    <label for="" class="form-label">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" {{$user->status == 1 ? 'selected' : ""}}>Active</option>
                        <option value="2" {{$user->status == 2 ? 'selected' : ""}}>Dactive</option>
                    </select>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.slider.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>

                </div>
            </div>
        </form>
    </div>
    </div>
        

</main>
<!--end page main-->
@endsection