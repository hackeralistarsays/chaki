@extends('layouts.main')

@section('title')
<title>Login</title>
@endsection

@section('content')
   
    <div id="contact" class="contact-us section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 wow fadeInRight" style="margin-left: 50%" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <form action="/forgot_password_submit" method="post" id="contact" class="login100-form validate-form" name="forgot_password_form">
					@csrf
					<span >
						Reset password
					</span><br>

					<div>
                        
    
                        @if ( Session::get('invalid_user') != null)
                            <p style="color: red;">{{ Session::get('invalid_user')  }}</p>
                        @endif
				 </div>
				 
				 <div class="offset-lg-1 offset-xl-1">
					@if( Session::get('no_user') != null)
					<p style="color: red;">{{ Session::get('no_user') }}</p>
					@endif

			 </div>

			 <div class="validate-input" data-validate="Select user category">
				 <label>Select user category</label>
				 <ul>
					 <li>
						 <input type="radio" id="staff" name="user_category" value="staff">
						<label for="staff">Staff</label></li>
					 <li>
						<input type="radio" id="parent" name="user_category" value="parent">
						<label for="parent">Parent</label>
					 </li>
				 </ul>
				 <div id="user_category_error" style="margin-bottom: 15px;"></div>
				 
			 </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c" style="margin-bottom: 0; padding-bottom: 0;" >
						<input class="input100" type="email" name="email" id="email" value="{{ Session::get('email') }}" @if(Session::get('email') != null) placeholder="Enter email address" @endif/>
						@if (Session::get('email') == "")
						<span class="focus-input100" data-placeholder="Enter email address"  id="email_div"  data-symbol="&#xf206;"></span>
						
						@else
						
						@endif
					</div>
					<div id="email_error" style="margin-top: 0; padding-top: 0;"></div>
					


					<div class="container-login100-form-btn" style="margin-top: 25px;">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" onclick="return validateLogin()">
								Send
							</button>
						</div>
					</div>

					<div class="text-center p-t-30">
						<p>Are you a staff? Click <a href="/signin" style="color: blue;">here</a> to login</p>
						{{-- <span class="txt1">
							Forgor your password? Click 
						</span>

						<a href="#">
							here
						</a> --}}
					</div>

					<div class="text-center p-t-30">
						<p>Are you a parent? Click <a href="/parentlogin" style="color: blue;">here</a> to log in as a parent</p>
						{{-- <span class="txt1">
							Forgor your password? Click 
						</span>

						<a href="#">
							here
						</a> --}}
					</div>
					<div class="text-center p-t-30">
						 <a href="/" style="color: blue;">Back home</a>
						{{-- <span class="txt1">
							Forgor your password? Click 
						</span>

						<a href="#">
							here
						</a> --}}
					</div>
				</form>

            </div>
          </div>
        </div>
      </div>
@endsection