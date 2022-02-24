<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        <img src="{{asset($websetting->logo)}}" class="logo-icon" alt="logo icon">
      </div>
      <div>
        <h4 class="logo-text">{{$websetting->website_name}}</h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

      <li>
        <a href="{{route('vendor.dashboard')}}">
          <div class="parent-icon"><i class="bi bi-house-fill"></i>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>s

      <li class="menu-label">Product Menagement</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
          </div>
          <div class="menu-title"> Self Products</div>
        </a>
        <ul>
          <li> <a href="#"><i class="bi bi-circle"></i>Product List</a>
          </li>
          <li> <a href="{{route('vendor.product.create')}}"><i class="bi bi-circle"></i>Create Product</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{route('vendor.order.all')}}" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
            </div>
            <div class="menu-title">Order</div>
          </a>

      </li>


    </ul>
    <!--end navigation-->
 </aside>
 <!--end sidebar -->

 <!--Start Back To Top Button-->
 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
 <!--End Back To Top Button-->
