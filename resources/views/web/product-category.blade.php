@extends('web.layouts.app', ['title' => 'Home'])


@section('content')



<!-- ======================= 
WEBSITE TITLE TODAYS DEAL SECTION START
=======================  -->

<section class="web-title-section mt-5" id="todays">
    .<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="web-title-area">
                    <a href="{{route('homepage')}}">Home</a>>
                    <span>Products</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= 
WEBSITE TITLE TODAYS DEAL SECTION END
=======================  -->


<!-- ======================= 
TODAYS DEAL SECTION START
=======================  -->


<section class="products-view-section">
    <div class="carousel slide" id="demo" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active slide-btns"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-dark slide-btns"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-dark slide-btns"></button>
  </div> -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container mt-4 d-block w-100">
                    <div class="row">
                        @foreach ($products as $item)
                        <div class=" col-lg-3 col-md-6 col-sm-12 mt-lg-0 today-deal-item">
                            <div class="card text-center">
                                <img class="card-img-top p-2" src="{{asset($item->image)}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center"> {{$item->name}}

                                        <button type="submit" data-id="{{ $item->id }}" class="product_id">
                                            <i class="fas fa-cart-plus" id="heart1" font-size:="" 20px;color:="" black;transform:="" translate(-852%,="" -284%);=""></i>
                                        </button>

                                    </h4>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-alt"></span>
                                    <span class="fa fa-star-half-alt"></span>
                                    <p id="cardpara"> SAR {{$item->price}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        {{-- <button class="carousel-control-prev d-flex justify-content-end" id="btnslidone" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" id="mostslid"></span>
        </button>

        <button class="carousel-control-next d-flex justify-content-start" id="btnslidtwo" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" id="mostslid"></span>
        </button> --}}

    </div>
</section>

<!-- ======================= 
TODAYS DEAL SECTION END
=======================  -->



<!-- ======================= 
WEBSITE TITLE FEATURED SECTION START
=======================  -->

<section class="web-title-section">
    .<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="web-title-area">
                    <h4>FEATURED PRODUCTS</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= 
WEBSITE TITLE FEATURED SECTION END
=======================  -->


<!-- ======================= 
FEATURED SECTION START
=======================  -->


<section class="products-view-section" id="featured">
    <div class="carousel slide" id="demo" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active slide-btns"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-dark slide-btns"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-dark slide-btns"></button>
  </div> -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container mt-4 d-block w-100">
                    <div class="row featured-product-autoplay">
                        @foreach ($fetureproducts as $item)
                        <div class=" col-lg-3 col-md-6 col-sm-12 mt-lg-0 today-deal-item">
                            <div class="card text-center">
                                <img class="card-img-top p-2" src="{{asset($item->image)}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center"> {{$item->name}}

                                        <button type="submit" data-id="{{ $item->id }}" class="product_id">
                                            <i class="fas fa-cart-plus" id="heart1" font-size:="" 20px;color:="" black;transform:="" translate(-852%,="" -284%);=""></i>
                                        </button>

                                    </h4>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-alt"></span>
                                    <span class="fa fa-star-half-alt"></span>
                                    <p id="cardpara"> SAR {{$item->price}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        {{-- <button class="carousel-control-prev d-flex justify-content-end" id="btnslidone" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" id="mostslid"></span>
        </button>
        <button class="carousel-control-next d-flex justify-content-start" id="btnslidtwo" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" id="mostslid"></span>
        </button> --}}

    </div>
</section>

<!-- ======================= 
FEATURED SECTION END
=======================  -->



@endsection

