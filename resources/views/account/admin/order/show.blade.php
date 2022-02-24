@extends('account.layouts.app',['title' => 'Show Order'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0"> Show Order </h5></div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">

            <div class="panel-body">
                <div class="order-top-box">
                   <div class="row">
                      <div class="col-12 col-lg-6">
                         <div class="order-top-left">
                            <div class="order-id">
                               <h4>Order #9 </h4>
                               <span class="calander">
                                  <i class="fa fa-calendar"></i>
                                  Thu 12, 2021
                               </span>
                            </div>
                            <div>
                                @if ($ordershow->payment_status == 1 )
                                <span  class="btn btn-xs paid">  paid</span>
                                @elseif ($ordershow->payment_status == 0 )
                                <span  class="btn btn-xs paid">  Unpaid</span>
                                 @endif
                               <span class="btn btn-xs status">
                                        @if ($ordershow->status == 0)
                                                 <span class="btn btn-danger status-btn ">Cancel</span>
                                                @elseif($ordershow->status == 1)
                                                <span class="btn btn-success status-btn">Confirmed</span>
                                                @elseif($ordershow->status == 2)
                                                <span class="btn btn-warning status-btn">Pending</span>
                                                @elseif($ordershow->status == 3)
                                                <span class="btn btn-info status-btn">Processing</span>
                                                @elseif($ordershow->status == 4)
                                                <span class="btn btn-primary status-btn">Out Of Delivery</span>
                                                @elseif($ordershow->status == 5)
                                                <span class="btn btn-warning status-btn">Delivered</span>
                                                @elseif($ordershow->status == 6)
                                                <span class="btn btn-secondary status-btn">Returned</span>
                                                @elseif($ordershow->status == 7)
                                                <span class="btn btn-dark status-btn">Failed</span>

                                        @endif
                               </span>
                               <span class="btn btn-sm print">
                                  <a href="http://127.0.0.1:8000/en/admin/products/order/invoice/9">
                                     <i class="fa fa-file-text-o"></i>
                                     Invoice
                                  </a>
                               </span>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-lg-6">
                         <div class="order-top-left d-lg-flex justify-content-end">

                               <div class="d-flex">
                                  <form action="{{route('admin.payment.update',$ordershow->id)}}" class="form-order" method="post">
                                    @csrf

                                     <select name="payment_status">
                                        <option value="1" {{$ordershow->payment_status == 1 ? 'selected' : ''}}>Paid</option>
                                        <option value="0"  {{$ordershow->payment_status == 0 ? 'selected' : ''}}>Unpaid</option>
                                     </select>      
                                     <button type="submit" class="btn btn-sm paid-btn">Save</button>
                                  </form>


                                  <form action="{{route('admin.order.update',$ordershow->id)}}" class="form-order" method="post">
                                    @csrf

                                       <select name="status" >
                                        <option value="2" {{$ordershow->status == 2 ? 'selected' : ''}}>Pending</option>
                                        <option value="1"{{$ordershow->status == 1 ? 'selected' : ''}}>Confirmed</option>
                                        <option value="3"{{$ordershow->status == 3 ? 'selected' : ''}}>Processing</option>
                                        <option value="4"{{$ordershow->status == 4 ? 'selected' : ''}}>Out Of Delivery</option>
                                        <option value="5"{{$ordershow->status == 5 ? 'selected' : ''}}>Delivered</option>
                                        <option value="6"{{$ordershow->status == 6 ? 'selected' : ''}}>Returned</option>
                                        <option value="7"{{$ordershow->status == 7 ? 'selected' : ''}}>Failed</option>
                                        <option value="0"{{$ordershow->status == 0 ? 'selected' : ''}}>Canceled</option>
                                     </select>
                                     <button type="submit" class="btn btn-sm pending-btn">Save</button>
                                  </form>
                               </div>

                         </div>
                      </div>
                   </div>
                </div>
                <div class="order-main-box mt-5">
                   <div class="row">
                      <div class="col-12 col-lg-8">
                         <div class="order-main-left h-100">
                            <h4>Order Details</h4>
                            <div class="order-payment-box">
                               <p>Payment Method :

                                     Cash on Delivery

                                 </p>
                            </div>

                            <div class="order-main-table">
                               <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">SL</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Price</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Subtotal</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                                                  <tr>
                                      <th scope="row">1</th>


                                      <td>
                                         <img src="http://127.0.0.1:8000/public/images/products/61cae8400df7d.png" style="width: 100px" alt="Product Photo">
                                      </td>

                                      <td>
                                                                            Women Skin care Lotion
                                                                       </td>
                                      <td>
                                        200 SAR
                                      </td>
                                      <td>2</td>
                                      <td>400.00 SAR</td>
                                    </tr>


                                  </tbody>
                                </table>


                            </div>
                            <div class="order-main-tatal mt-4">
                               <div class="row">
                                  <div class="col-6"></div>
                                  <div class="col-12 col-sm-6">
                                     <table class="table">
                                        <tbody><tr>
                                           <th>Sub Total</th>
                                           <td>400.00 SAR</td>
                                        </tr>
                                        <tr>
                                           <th>Shipping</th>
                                           <td>0 SAR</td>
                                        </tr>
                                        <tr>
                                           <th>Vat</th>
                                           <td>84.00 SAR</td>
                                        </tr>
                                         <tr>
                                           <th>Discount</th>
                                           <td>0.00 SAR</td>
                                        </tr>
                                         <tr>
                                        <th>TOTAL</th>
                                           <td>484.00 SAR</td>
                                        </tr>
                                     </tbody></table>
                                  </div>

                               </div>

                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                         <div class="order-main-right h-100">
                           <div class="order-main-right-box py-3">
                               <h4>Customer</h4>
                               <p> <i class="fa fa-user"></i> MD. BOKUL </p>

                               <p> <i class="fa fa-cart-arrow-down mr-3"></i><b>01 Orders</b></p>
                           </div>
                           <div class="order-main-right-box py-3">
                            <h4>Contact</h4>
                            <p> <i class="fa fa-phone"></i>0145345345</p>
                            <p> <i class="fa fa-envelope-o"></i> admin@admin.com</p>
                        </div>
                        <div class="order-main-right-box py-3">
                         <h4>Shipping Address</h4>

                         <p>  <b>Country :</b> Bangladesh</p>
                         <p>  <b>City :</b> Rangpur</p>
                         <p>  <b>Street Address :</b> Shobotpur, Sadar, Dinajpur</p>
                         <p>  <b>Apartment Address :</b> Shobotpur, Sadar, Dinajpur</p>
                         <p>  <b>Zip Code :</b> 5200</p>
                     </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="order-footer-box mt-4 text-center">
                   <a href="">
                      <i class="fa fa-globe"></i>
                      beautyincu.com
                   </a>
                   <span>
                      <i class="fa fa-volume-control-phone"></i>
                      T:+966551175959
                   </span>
                   <span>
                      <i class="fa fa-envelope-o"></i>
                      info@beautyincu.com
                   </span>
                </div>




             </div>



        </div>
    </div>


    </main>
<!--end page main-->
@endsection
