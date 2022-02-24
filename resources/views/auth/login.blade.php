@extends('web.layouts.app', ['title' => 'Login'])


@section('content')
    <!-- LOGIN PART START -->
    <div class="login-part my-5">
      <div class="container py-5">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-10 col-xm-12">
                  <div class="login">
                      <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12 col-xm-12">
                              <div class="login-section">
                                  <h4 class="text-center">Welcome to</h4>
                                  <p class="text-center mb-5">Sign In</p>
                                  
                                  <form action="{{route('login')}}" method="post">
                                    @csrf
                                      <div class="login mt-4">
                                          <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                                          <img src="assets/images/icon/login-user.png" alt="user">
                                      </div>
                                      <span class="text-danger mt-2">{{$errors->first('email')}}</span>
                                      <div class="mt-4 login">
                                          <input type="password" class="form-control" placeholder="Password" name="password">
                                          <img src="assets/images/icon/lock.png" alt="lock">
                                      </div>
                                      <span class="text-danger mt-2">{{$errors->first('password')}}</span>
                                      <div class="mt-4 form-check d-flex align-items-center">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                      </div>
                                      
                                      <button class="mt-4 w-100 mb-2" type="submit" class="btn btn-primary">Log In</button>
                                      <span class="mt-4 form-text">Haven’t any Account <a class="text-bolder" href="register.html">Sign Up</a></span>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- LOGIN PART END -->
@endsection
    


    {{-- <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{ asset('account') }}/assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                                </div>
								<div class="form-group">
									<input class="form-control" placeholder="Password"  type="password"
                                    name="password" required autocomplete="current-password">
                                </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a> </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
