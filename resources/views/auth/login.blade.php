@extends("layouts.customlayout")

@section('body')



{{-- <main class="signin-main-section">
  <section>
      <p><a href="{{route('login')}}" class="signin-breadcrumb">Sign In</a></p>
  </section>
   
  <section class="signin-panel">
   <div class="signin-panel-button">
       <a class="signin-button sign-in" href="{{route('login')}}">Sign In</a>
       <a class="signup-button sign-in" href="{{route('register')}}">Sign Up</a>
   </div>
   <form class="form-field" method="POST" action="{{route('login')}}">
    @csrf

       <div class="signin-form-body">

          <label class="form-details" for="email">
            <span class="fa fa-envelope icon"></span>
          <input type="email" 
          class="email-input input @error('email') is-invalid @enderror"
          id="email"
          name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus
          placeholder="Email">
          
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </label>

          <label class="form-details" for="password">
          <span class="fa fa-lock icon"></span>
          <input type="password"
          id="password"
          name="password" required autocomplete="current-password" 
          class="password-input input @error('password') is-invalid @enderror"
          placeholder="Password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </label>
       </div>

       <div class="signin-form-footer">
       <!-- if (Route::has('password.request')) -->
       <p><a href="{{route('password.request')}}">Forgot Password &quest;</a></p>
      <!-- endif -->
       <button class="signin-footer-cta" type="submit">Sign In</button>
       </div>
       <button href="{{route('register')}}" class="create-text-action"> Create An Account </button>
   </form>
  </section>
</main> --}}

<div class="container-fluid page-body-wrapper full-page-wrapper">
  <div class="content-wrapper auth p-0 theme-two">
    <div class="row d-flex align-items-stretch">
      <div class="col-12 col-md-12 h-100 card">
        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
          <div class="nav-get-started">
            <p>Don't have an account?</p>
            <a class="btn get-started-btn" href="{{route('register')}}">GET STARTED</a>
          </div>
            <form method="POST" action="{{route('login')}}">
                @csrf
                <a href='..//'>
                <img alt="" src="../images/logo.png" style='height: 40px; width: auto;'>
                </a>
                
            <h3 class="mt-3 mr-auto">Welcome</h3>
            <p class="mr-auto">Enter your details below.</p>
            
            <div class="alert  alert-solid alert-warning" role="alert">
Please login to continue.          </div>
            
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-user"></i>
                  </span>
                </div>
                <input type="email" 
          class="form-control email-input input @error('email') is-invalid @enderror"
          id="email"
          name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus
          placeholder="Email">
          
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                  </span>
                </div>
                <input type="password"
                id="password"
                name="password" required autocomplete="current-password" 
                class="form-control password-input input @error('password') is-invalid @enderror"
                placeholder="Password">
      
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <p class='text-warning'><a href='{{route('password.request')}}'>Forgot Password?</a></p>
            <div class="form-group">
                <button type="submit"  class="signin-footer-cta btn btn-primary submit-btn">SIGN IN <i class="fa fa-sign-in"></i></button>
            </div>
            <div class="wrapper mt-5 text-gray">
              <p class="footer-text">Copyright © 2022 . All rights reserved.</p>
              <ul class="auth-footer text-gray">
                <li>
                    <a href="{{route('about')}}">About Us</a>
                </li>
                <li>
                  <a href="{{route('terms')}}">Terms & Conditions</a>
                </li>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

@endsection
