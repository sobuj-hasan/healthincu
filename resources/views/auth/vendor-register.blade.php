
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
                              <p class="text-center mb-5">Vendor Sign Up</p>
                              <form action="{{route('vendor.register')}}" method="POST">
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