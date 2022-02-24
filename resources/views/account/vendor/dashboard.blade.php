@extends('account.layouts.app',['title' => 'Vendor Dashboard'])

@section('content')

<main class="page-content">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
        <div class="col">
          <div class="card radius-10 bg-primary">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1 text-white">Self Product</p>
                  <h4 class="mb-0 text-white">{{$total_product}}</h4>
                </div>
                <div class="ms-auto widget-icon bg-white-1 text-white">
                    <a href="{{route('vendor.product.index')}}" class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card radius-10 bg-success">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1 text-white">Total Order</p>
                  <h4 class="mb-0 text-white">{{$total_order}}</h4>
                </div>
                <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('vendor.order.all')}}"class="text-white"><i class="bi bi-currency-dollar"></i></a>
                </div>
              </div>
            </div>
          </div>
         </div>

    </main>

@endsection
