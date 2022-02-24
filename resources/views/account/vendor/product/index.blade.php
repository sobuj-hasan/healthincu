@extends('account.layouts.app',['title' => 'Product  List'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Product List</h5></div>
        <div class="ms-auto">
            <a href="{{route('vendor.product.create')}}" class="btn btn-primary custom-head-link"> <i class="lni lni-circle-plus custom-head-link"></i> Create Product</a>
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
                    <th>Name</th>


                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Active Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->productcategory ? $item->productcategory->name:''}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->discount_price}}</td>
                    <td>

                        @if ($item->active_price == 1)
                            <span class="btn btn-primary status-btn">Regular Price</span>
                        @elseif($item->active_price == 2)
                        <span class="btn btn-warning status-btn">Discount Price</span>
                        @endif



                    </td>







                    <td>
                        @if ($item->status == 1)
                            <span class="btn btn-success status-btn">Active</span>
                        @elseif($item->status == 2)
                        <span class="btn btn-danger status-btn">Deactive</span>
                        @endif
                    </td>

                    <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">

                        <a href="{{route('vendor.product.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                        <a href="{{route('vendor.product.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>


                        <form id="delete-form" action="{{route('vendor.product.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="delete-admin" onClick="deleteItem()">
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
