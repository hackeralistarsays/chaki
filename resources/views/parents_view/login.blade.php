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
              <form id="contact" action="/parents/login" method="post">
				  <h3 class="mb-5">Parents Login</h3>
                <div class="row">
                  @csrf
                  <div class="col-lg-12">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              @foreach ($errors->all() as $error)
                                  <li>{{$error}}</li>
                              @endforeach
                          </div>
                      @endif
                  </div>  
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="password" placeholder="Input Password" name="password" id="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Login</button>
                    </fieldset>
				</div>
			</div>
			<div class="contact-dec">
				<img src="{{asset('test/assets/images/contact-decoration.png')}}" alt="contact">
			</div>
			<div class="col-lg-12 text-center">
				<div class="row justify-content-center">

					<p><a href="/signin">Staff Login</a></p>
					<p><a href="/forgotPassword">Forgot Password?</a></p>
				</div>

			</div>
		</form>
            </div>
          </div>
        </div>
      </div>
@endsection