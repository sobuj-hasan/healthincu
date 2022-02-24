<body class="antialiased">
    <div id="app">
        <!-- ==========================================================================
          HEADER SECTION START
          ==========================================================================  -->

        <header class="header-area cols">
            <!-- ===========================================================================
          TOP BAR SECTION START
         ============================================================================ -->
            <div class="topbar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 topbar">
                            <p class="text-center"><a href="#"> Discover the details</a> Black Friday Sale Up to 30% with coupon Hl21 </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===========================================================================
          TOP BAR SECTION END
         ============================================================================ -->

            <!-- ======================= 
           SECOND TOP BAR END
           ======================= -->

            <div class="sec-topbar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 sec-topbar">
                            <div class="sec-topbar-left">
                                <div class="topbar-menu">
                                    @if (Auth::check())
                                        <a href="{{route('dashboard')}}" class="side-b">
                                            <i class="fas fa-user-circle mx-2" aria-hidden="true"></i>
                                            Account 
                                        </a>
                                    @endif

                                    @if (!Auth::check())
                                    <a href="{{route('login')}}" class="side-b">
                                        <i class="fas fa-user-circle mx-2" aria-hidden="true"></i>
                                        Login
                                    </a>
                                    @endif
                                    <span class="mx-2"></span>
                                    {{-- <ul class="c-header-nav ml-auto btn-group">
                                        <li class="c-header-nav-item dropdown d-md-down-none">
                                            <a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="c-header-nav-link">
                                                <span>Registration</span>
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{route('register')}}" class="dropdown-item">User Registration</a>
                                                <!-- <a href="#" class="dropdown-item">Doctor Registration</a> -->
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{route('vendor.register')}}" class="dropdown-item">Vendor Registration</a>
                                                <!-- <a href="#" class="dropdown-item">Doctor Registration</a> -->
                                            </div>
                                        </li>
                                    </ul> --}}

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                          Register 
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                          <a class="dropdown-item" href="{{route('register')}}">User Registration</a>
                                          <a class="dropdown-item" href="{{route('vendor.register')}}">Doctor Registration</a>
                                        </div>
                                    </div>
                                    <span class="mx-2"></span>
                                    <div class="lang ml-3 mt-3">
                                        @if ($locale == 'ar')
                                            <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">@lang('trans.english')</a>
                                        @else
                                            <a href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">@lang('trans.arabic')</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="sec-topbar-right">
                                <div class="sec-topbar-menu">
                                    <ul class="icones-color">
                                        <li>
                                            <a href="#"><i class="fas fa-headphones-alt"></i> <span class="mx-1">Hotline: </span> <span dir="ltr">+966 551175959</span></a>
                                        </li>

                                        <li>
                                            <a href="#"><i class="fas fa-envelope"></i><span class="mx-1" dir="ltr">info@healthincu.com</span></a>

                                        <li>
                                            <a href="#"><i class="fab fa-facebook mx-2" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="#"><i class="fab fa-google mx-2" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="#"><i class="fab fa-instagram mx-2" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="#"><i class="fab fa-whatsapp mx-2" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <span class="mx-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======================= 
           SECOND TOP BAR END
           ======================= -->

            <!-- ======================= 
           SEARCH & BRAND START
           ======================= -->

            <div class="navbar-area">
                <div class="container search-b-area">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <div class="logo">
                                <a href="{{route('homepage')}}"><img src="{{asset('/')}}assets/images/logo.png" alt="Site Logo"></a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="navbar-content">

                                <form action="#" method="GET" class="searchbar">
                                    <div class="search-box">
                                        <div class="search-inputs">
                                            <div class="search-input">
                                                <input type="text" placeholder="What Are You Looking For?" name="q">
                                            </div>
                                            <div class="search-category">
                                                <select name="in" id="">
                                                    <option value="product" selected="selected">ALL Categories</option>
                                                    <option value="supplier">Medical Equipment</option>
                                                </select>
                                            </div>

                                            <div class="search-category">

                                                <select name="in" id="">
                                                    <option value="product" selected="selected">Product</option>
                                                    <option value="supplier">Suppliers</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="search-button">
                                            <button type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 px-0">
                            <div class="navbar-menus-b">
                                <div class="btn-group search-b-btn" role="group" aria-label="Basic example">
                                    <button type="button" class="btn b-btn"> <img src="{{asset('/')}}assets/images/Compare.png" alt="" width="18px"> Compare
                                        (0)</button>
                                    <a href="{{route('product.cart')}}" type="button" class="btn b-btn"><i class="fas fa-cart-plus"></i> <span class="cart_count"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ======================= 
           SEARCH & BRAND END
           ======================= -->

            <!-- ======================= 
           MENU BAR START
           ======================= -->

            <div class="menubar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-expand-lg navbar-light px-0 py-1">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse text-center justify-content-lg-center justify-content-sm-end" id="navbarNav">
                                    <ul class="navbar-nav nav-menu-c d-flex">
                                        <li class="nav-item active">
                                            <a  class="nav-link dropdown-toggle" href="{{route('homepage')}}">Home</a>
                                        </li>

                                        <li class="nav-item dropdown ">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                All Categories
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#category">Category Products</a>
                                                <a class="dropdown-item" href="#featured">Featured Products</a>
                                                <a class="dropdown-item" href="#todays">Todays Deal Products</a>
                                                <a class="dropdown-item" href="addcart.html">Add Cart</a>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#featured">Featured Products</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#todays">Todays Deal</a>
                                        </li>

                                        <li class="nav-item dropdown ">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                All Brand
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Brand-1</a>
                                                <a class="dropdown-item" href="#">Brand-2</a>
                                                <a class="dropdown-item" href="#">Brand-3</a>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link pr-0" href="{{route('about')}}">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======================= 
           MENU BAR END
           ======================= -->

        </header>

    </div>
    <!-- ==========================================================================
HEADER SECTION END
==========================================================================  -->