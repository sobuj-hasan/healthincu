@extends('account.layouts.app',['title' => 'Create Blog'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Blog</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.blog.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Blogs</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Category <span class="text-danger">*</span></label>
                    <select name="blog_category_id" id="" class="form-control">
                        @foreach ($blog_categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('blog_category_id')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" {{old('status') == 1 ? 'selected' : ""}}>Active</option>
                        <option value="2" {{old('status') == 2 ? 'selected' : ""}}>Dactive</option>
                    </select>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Blog Details</label>
                    <textarea name="description"  id="summernote" class="form-control"></textarea>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.blog.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
    </div>
        

</main>
<!--end page main-->
@endsection

