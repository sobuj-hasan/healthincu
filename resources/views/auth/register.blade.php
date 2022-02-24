
@extends('web.layouts.app', ['title' => 'Register'])


@section('content')

<div class="login-part sign-up-page my-5">
  <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-10 col-xm-12">
              <div class="login">
                  <div class="row justify-content-center">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-xm-12">
                          <div class="login-section">
                              <h4 class="text-center">Welcome to</h4>
                              <p class="text-center mb-5">User Sign Up</p>
                              <form action="{{route('register')}}" method="POST">
                                @csrf
                                  <div class="mt-4 login">
                                      <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{old('name')}}">
                                      <img src="{{asset('/')}}assets/images/icon/login-user.png" alt="user">
                                  </div>
                                  <span class="text-danger">{{$errors->first('name')}}</span>
                                  
                                  <div class="mt-4 login">
                                      <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{old('email')}}">
                                      <img width="20" height="25" src="{{asset('/')}}assets/images/icon/email-icon.svg" alt="lock">
                                  </div>
                                  <span class="text-danger">{{$errors->first('email')}}</span>
                                  <div class="mt-4 login">
                                      <input type="phone" class="form-control" placeholder="Phone" name="phone" value="{{old('phone')}}">
                                      <img width="18" height="25" src="{{asset('/')}}assets/images/icon/phone.png" alt="lock">
                                  </div>
                                  <span class="text-danger">{{$errors->first('phone')}}</span>
                                  <div class="mt-4 login">
                                      <input type="password" class="form-control" placeholder="Password" name="password">
                                      <img src="{{asset('/')}}assets/images/icon/lock.png" alt="lock">
                                  </div>
                                  <span class="text-danger">{{$errors->first('password')}}</span>
                                  <div class="mt-4 login">
                                      <input type="password" class="form-control" placeholder="Re-enter-password" name="password_confirmation">
                                      <img src="{{asset('/')}}assets/images/icon/lock.png" alt="lock">
                                  </div>
                                  <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                                  <div class="mt-4 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                  </div>
                                  <button class="w-100 mt-4" type="submit">Register</button>
                                  <span class="form-text">Already Have a Account? <a class="text-bolder" href="login.html">Log In</a></span>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection


                  {{-- <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5>
                    <form class="form-body" method="post" action="{{ route('register') }}">
                        @csrf

                      </div>
                        <div class="row g-3">
                          <div class="col-12 ">
                            <label for="inputName" class="form-label">Username</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <input type="text" class="form-control radius-30 ps-5" name="username" value="{{ old('username') }}" placeholder="jhon121..">
                            </div>
                          </div>
                          <div class="col-12 ">
                            <label for="inputName" class="form-label">Name</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <input type="text" class="form-control radius-30 ps-5" name="name" value="{{ old('name') }}" placeholder="jhon deo">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="form-control radius-30 ps-5" name="email" value="{{ old('email') }}" placeholder="jhon@gmail.com">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" name="password" placeholder="Enter New Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" name="password_confirmation" placeholder="Enter Confirm Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                              <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign Up</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign in here</a></p>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main> --}}
       <!--end page main-->

         
        <!--end page main-->
    {{-- <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{ asset('account') }}/assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $error }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                @endforeach
                            @endif
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                    
                                </div>
								<div class="form-group">
									<input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
								<div class="form-group">
									<input class="form-control"  type="password"
                                    name="password"
                                    required autocomplete="new-password" placeholder="Password" />
                                 </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

