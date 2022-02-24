@extends('account.layouts.app',['title' => 'Slider All'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Sliders</h5></div>
        <div class="ms-auto">
            <a href="{{route('admin.slider.create')}}" class="btn btn-primary"> <i class="lni lni-circle-plus custom-head-link"></i> Create Slider</a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sliders as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        <img src="{{asset($item->image)}}" alt="Slider Photo" style="width: 150px;">
                    </td>
                    <td>
                        @if ($item->status == 1)
                            <span class="btn btn-success status-btn">Active</span>
                        @elseif($item->status == 2)
                            Dactive
                        @endif
                    </td>
                    <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                       
                        <a href="{{route('admin.slider.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <form action="{{route('admin.slider.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="delete-admin">
                            <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                        </button>
                        </form>
                            
                    </div>
                    </td>
                </tr>
                
                @endforeach

                </tbody>
            </table>
            </div>
        </div>
        </div>

    </main>
<!--end page main-->
@endsection