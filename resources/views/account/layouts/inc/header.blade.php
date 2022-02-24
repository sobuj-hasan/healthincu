    <!--start top header-->
    <header class="top-header">        
		<nav class="navbar navbar-expand gap-3">
		  <div class="mobile-toggle-icon fs-3">
			  <i class="bi bi-list"></i>
			</div>
			<form class="searchbar">
				<div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
				<input class="form-control" type="text" placeholder="Type here to search">
				<div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
			</form>
			<div class="top-navbar-right ms-auto">
			  <ul class="navbar-nav align-items-center">
				<li class="nav-item search-toggle-icon">
				  <a class="nav-link" href="#">
					<div class="">
					  <i class="bi bi-search"></i>
					</div>
				  </a>
			  </li>
			  <li class="nav-item dropdown dropdown-user-setting">
				<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
				  <div class="user-setting d-flex align-items-center">
					<img src="{{asset(Auth::user()->image ? Auth::user()->image : 'uploads/userprofile/default.png')}}" class="user-img" alt="">
				  </div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
				  <li>
					 <a class="dropdown-item" href="#">
					   <div class="d-flex align-items-center">
						  <img src="{{asset(Auth::user()->image ? Auth::user()->image : 'uploads/userprofile/default.png')}}" alt="" class="rounded-circle" width="54" height="54">
						  <div class="ms-3">
							<h6 class="mb-0 dropdown-user-name">{{Auth::user()->name}}</h6>
							<small class="mb-0 dropdown-user-designation text-secondary">
								@if (Auth::user()->role == 1)
									Admin
								@elseif(Auth::user()->role == 2)
									Vendor
								@elseif(Auth::user()->role == 3)
									Genarel User
								@endif
							</small>
						  </div>
					   </div>
					 </a>
				   </li>
				   <li><hr class="dropdown-divider"></li>
				   <li>
					  <a class="dropdown-item" href="{{route('account.profile.index')}}">
						 <div class="d-flex align-items-center">
						   <div class=""><i class="bi bi-person-fill"></i></div>
						   <div class="ms-3"><span>Profile</span></div>
						 </div>
					   </a>
					</li>
					
					<li><hr class="dropdown-divider"></li>
					<li>
						<form action="{{route('logout')}}" method="POST">
							@csrf
							<a class="dropdown-item" href="javascript:void(0)">
								<button type="submit" class="logout-button-admin">
									<div class="d-flex align-items-center">
										<div class=""><i class="bi bi-lock-fill"></i></div>
										<div class="ms-3"><span>Logout</span></div>
										</div>
								</button>
							</a>
					</form>
					</li>
				</ul>
			  </li>
			  <li class="nav-item dropdown dropdown-large">
				<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
				  <div class="projects">
					<i class="bi bi-grid-3x3-gap-fill"></i>
				  </div>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
				   <div class="row row-cols-3 gx-2">
					  <div class="col">
						<a href="ecommerce-orders.html">
						 <div class="apps p-2 radius-10 text-center">
							<div class="apps-icon-box mb-1 text-white bg-gradient-purple">
							  <i class="bi bi-basket2-fill"></i>
							</div>
							<p class="mb-0 apps-name">Orders</p>
						 </div>
						</a>
					  </div>
					  <div class="col">
						<a href="javascript:;">
						<div class="apps p-2 radius-10 text-center">
						   <div class="apps-icon-box mb-1 text-white bg-gradient-info">
							<i class="bi bi-people-fill"></i>
						   </div>
						   <p class="mb-0 apps-name">Users</p>
						</div>
					  </a>
					 </div>
					 <div class="col">
					  <a href="ecommerce-products-grid.html">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-success">
						  <i class="bi bi-trophy-fill"></i>
						 </div>
						 <p class="mb-0 apps-name">Products</p>
					  </div>
					  </a>
					</div>
					<div class="col">
					  <a href="component-media-object.html">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
						  <i class="bi bi-collection-play-fill"></i>
						 </div>
						 <p class="mb-0 apps-name">Media</p>
					  </div>
					  </a>
					</div>
					<div class="col">
					  <a href="pages-user-profile.html">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
						  <i class="bi bi-person-circle"></i>
						 </div>
						 <p class="mb-0 apps-name">Account</p>
					   </div>
					  </a>
					</div>
					<div class="col">
					  <a href="javascript:;">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
						  <i class="bi bi-file-earmark-text-fill"></i>
						 </div>
						 <p class="mb-0 apps-name">Docs</p>
					  </div>
					  </a>
					</div>
					<div class="col">
					  <a href="ecommerce-orders-detail.html">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
						  <i class="bi bi-credit-card-fill"></i>
						 </div>
						 <p class="mb-0 apps-name">Payment</p>
					  </div>
					  </a>
					</div>
					<div class="col">
					  <a href="javascript:;">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
						  <i class="bi bi-calendar-check-fill"></i>
						 </div>
						 <p class="mb-0 apps-name">Events</p>
					  </div>
					</a>
					</div>
					<div class="col">
					  <a href="javascript:;">
					  <div class="apps p-2 radius-10 text-center">
						 <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
						  <i class="bi bi-book-half"></i>
						 </div>
						 <p class="mb-0 apps-name">Story</p>
						</div>
					  </a>
					</div>
				   </div><!--end row-->
				</div>
			  </li>
			  </ul>
			  </div>
		</nav>
	  </header>
	   <!--end top header-->