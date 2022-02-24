@extends('web.layouts.app', ['title' => 'Home'])


@section('content')



  <!-- ======================= 
HOME SECTION START
=======================  -->

<section class="home-section" id="home">
    <div class="container">
        <div class="row">
            @foreach ($productscategories as $item)
            <div class="col-lg-2 col-md-6 col-sm-12 home-area">
                <div class="home-pr-s">
                    <div class="card home-product">
                        <a href="{{route('product.category',$item->slug)}}">
                            <img class="card-img-top w-100" src="{{asset($item->image)}}">
                        </a>
                    </div>
                    <div class="home-p">
                        <p>{{$item->name}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<!-- ======================= 
HOME SECTION END
=======================  -->

<!-- ======================= 
WEBSITE TITLE TODAYS DEAL SECTION START
=======================  -->

<section class="web-title-section" id="todays">
    .<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="web-title-area">
                    <h4>TODAYS DEAL PRODUCTS</h4>
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
                    <div class="row today-deal-autoplay">
                        @foreach ($todayproduct as $item)
                        <div class=" col-lg-3 col-md-6 col-sm-12 mt-lg-0 today-deal-item">
                            <div class="card text-center">
                                <img class="card-img-top" src="{{asset($item->image)}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center"> {{$item->name}}</h4>
                                    <button type="submit" data-id="{{ $item->id }}" class="product_id">
                                        <i class="fas fa-cart-plus" id="heart1" black;transform:="" translate(-852%,="" -284%);=""></i>
                                    </button><br>
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
                        @foreach ($products as $item)
                        <div class=" col-lg-3 col-md-6 col-sm-12 mt-lg-0 today-deal-item">
                            <div class="card text-center">
                                <img class="card-img-top p-2" src="{{asset($item->image)}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center"> {{$item->name}}</h4>
                                    <button type="submit" data-id="{{ $item->id }}" class="product_id">
                                        <i class="fas fa-cart-plus" id="heart1" font-size:="" 20px;color:="" black;transform:="" translate(-852%,="" -284%);=""></i>
                                    </button><br>
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



<!-- ======================= 
WEBSITE TITLE FEATURED SECTION START
=======================  -->

<section class="web-title-section">
    .<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="web-title-area">
                    <h4>PRODUCTS BY CATEGORY</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= 
WEBSITE TITLE FEATURED SECTION END
=======================  -->



<!-- ======================= 
CATEGORIES SECTION START
=======================  -->


<section class="products-view-section" id="category">
    <div class="carousel slide" id="demo" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active slide-btns"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-dark slide-btns"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-dark slide-btns"></button>
  </div> -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container mt-4 d-block w-100">
                    <div class="row category-product-autoplay">
                        @foreach ($products as $item)
                        <div class=" col-lg-3 col-md-6 col-sm-12 mt-lg-0 today-deal-item">
                            <div class="card text-center">
                                <img class="card-img-top p-2" src="{{asset($item->image)}}">
                                <div class="card-body">
                                    <h4 class="card-title text-center"> {{$item->name}}</h4>
                                    <button type="submit" data-id="{{ $item->id }}" class="product_id">
                                        <i class="fas fa-cart-plus" id="heart1" font-size:="" 20px;color:="" black;transform:="" translate(-852%,="" -284%);=""></i>
                                    </button><br>
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

        <button class="carousel-control-prev d-flex justify-content-end" id="btnslidone" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" id="mostslid"></span>
        </button>
        <button class="carousel-control-next d-flex justify-content-start" id="btnslidtwo" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" id="mostslid"></span>
        </button>

    </div>
</section>

<!-- ======================= 
CATEGORIES SECTION END
=======================  -->


<!-- ======================= 
WEBSITE TITLE FEATURED SECTION START
=======================  -->

<section class="web-title-section clearfix">
    .<div class="container">
        <div class="row">
            <div class="col-12 clearfix">
                <div class="web-title-area text-left advan">
                    <h4>OUR ADVANTAGES <i class="fa fa-bullseye" aria-hidden="true"></i></h4>
                </div>

                <div class="web-title-area text-right download">
                    <h4>DOWNLOAD APP NOW! <i class="fa fa-download" aria-hidden="true"></i></h4>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ======================= 
WEBSITE TITLE FEATURED SECTION END
=======================  -->



<!-- ======================= 
CATEGORIES SECTION START
=======================  -->


<section class="products-view-section" id="advan-download">
    .<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="advantage">
                    <h4>Website Is Available In 2 Language</h4>
                    <p>As a B2B manufacturer or supplier you want to be sure your company has an online visibility and a strong
                        reputation. Health Incubator B2B Advertising Solutions will help you to promote your products & your brand
                        position in B2B medical marketplace globally with 1M unique visitors per year, it is more than MEDICAL
                        Trade Fair Dusseldorf visits at 4x.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="download-image">
                    <img src="{{asset('assets/images/d.png')}}" alt="download-image">
                </div>
            </div>
        </div>
    </div>


</section>

<!-- ======================= 
CATEGORIES SECTION END
=======================  -->

@endsection

