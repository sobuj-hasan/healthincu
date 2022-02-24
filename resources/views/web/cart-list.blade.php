@extends('web.layouts.app', ['title' => 'Shopping Cart LIst'])


@section('content')

  <!-- ======================= 
BILLING INFO TITLE SECTION START
=======================  -->

<section class="billing-info">
    <div class="container">
      <div class="browse-m-title">
        <ul>
          <li><a href="#">Home Page</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>

          <li><a href="#">Checkout Page</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="item-price-q">
            <table class="table table-light">
              <thead class="i-p-q">
                <tr class="text-center">
                  <th scope="col">Items</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                </tr>
              </thead>
            </table>
          </div>
          
          <div class="product-i-p-q clearfix">
            <table class="table table-light" id="carttable">
              



            </table>
            <p class="text-center last-t">VAT Included, Where Applicable</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 ship-b-a">
          <div class="shipping-bill-area">
            <div class="shipping-a">
              <p>Shipping & Billing</p>
            </div>
            <span>Please enter your billing info</span>

            <div class="contact-form-body ">
              <form action="{{route('product.cart.store')}}" method="post">
                @csrf
                <div class="row">

                  <div class="col">
                    <div class="form-group button-content">
                      <label for="name">Your Name</label>
                      <input type="text" class="form-control contact-f-b" placeholder="" id="name" value="{{old('name')}}">
                      <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>

                    <div class="form-group button-content">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control contact-f-b" placeholder="" name="email" value="{{old('email')}}">
                      <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>

                    <div class="form-group button-content">
                      <label for="email">Country</label>
                      <input type="text" class="form-control contact-f-b" placeholder="" name="country" value="{{old('country')}}">
                      <span class="text-danger">{{$errors->first('country')}}</span>
                    </div>

                    <div class="form-group button-content">
                      <label for="country">Town/City</label>
                      <input type="text" class="form-control contact-f-b" placeholder="" name="city" value="{{old('city')}}">
                      <span class="text-danger">{{$errors->first('city')}}</span>
                    </div>

                    <div class="form-group button-content">
                      <label for="number">Phone Number</label>
                      <input type="text" class="form-control contact-f-b" name="contract_number" value="{{old('contract_number')}}">
                      <span class="text-danger">{{$errors->first('city')}}</span>
                    </div>


                    <div class="billing-method">
                      <h4>Billing Method</h4>
                      <span>Please enter your billing info</span>
                      <div class="btns-area">
                        <div class="form-group radio-btns">
                          <img src="{{asset('/')}}assets/images/billing-1.png" alt="">
                          <input type="radio" class="form-control" placeholder="" id="radio" name="billing_method" checked>
                        </div>

                        <div class="form-group radio-btns">
                          <img class="dhl" src="{{asset('/')}}assets/images/dhl.png" alt="">
                          <input type="radio" class="form-control" placeholder="" id="radio" name="billing_method">
                        </div>
                      </div>
                    </div>

                    <div class="payment-method">
                      <h4>Payment Method</h4>
                      <span>Please enter your payment method info</span>
                      <div class="payment-btns-area">
                        <div class="payment-l-radio">
                          <input type="radio" class="form-control" placeholder="" id="radio">
                          <label for="html">Credit Card</label>
                          <div class="payment-r-img">
                            <img src="assets/images/visa.png" alt="">
                          </div>
                        </div>


                        <div class="form-group button-content">
                          <input type="text" class="form-control contact-f-b" placeholder="Card Number" id="number">
                        </div>

                        <div class="form-group button-content">
                          <input type="text" class="form-control contact-f-b" placeholder="Card Holder Name"
                            id="number">
                        </div>

                        <div class="form-group button-content">
                          <input type="date" class="form-control contact-f-b" placeholder="DD/MM/YY" id="number">
                        </div>

                        <div class="form-group button-content">
                          <input type="text" class="form-control contact-f-b" placeholder="CVC" id="number">
                        </div>

                        <div class="btns-area">
                          <div class="form-group radio-btns">
                            <img class="paypal" src="{{asset('/')}}assets/images/paypal.png" alt="">
                            <input type="radio" class="form-control" placeholder="" id="radio" name="payment_method" checked>
                          </div>

                          <div class="form-group radio-btns">
                            <img class="bitcoin" src="{{asset('/')}}assets/images/bitcoin.png" alt="" name="payment_method">
                            <input type="radio" class="form-control" placeholder="" id="radio">
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="form-group con-o-p">
                      <div class="order-btn">
                        <button type="submit">Confirm Order</button>
                      </div>
                    </div>


                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  </section>

  <!-- ======================= 
BILLING INFO TITLE SECTION END
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
            <img src="assets/images/d.png" alt="download-image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= 
  CATEGORIES SECTION END
  =======================  -->

@endsection



