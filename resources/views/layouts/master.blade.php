<div class="main_header">
    <div id="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="left">
                        <ul class="list-unstyled m-b-0">
                            <li><a href="javascript:void(0);" class="btn btn-link"><i class="zmdi zmdi-email m-r-5"></i>ibrentone.alistar@example.com</a>
                                <a href="javascript:void(0);" class="btn btn-link"><i class="zmdi zmdi-phone m-r-5"></i>+254-740-096-095</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="text-right">
                        <ul class="list-unstyled m-b-0">
                            
                            
                        @if (Session::get('username') != null)
                                
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('username')}}</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/users/profile">Profile</a>
                                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                        </div>
                                    </li>
                                    @else
                                    <li>
                                        <a href="/lgin" class="btn btn-link">Sign In</a>

                                        
                                            <a href="/register" class="btn btn-link">Register</a>
                                         
                                    </li>

                                    
                                
                            @endif
                               
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <a href="index.html" class="navbar-brand"><img src="{{ asset('oreo/images/logo.svg') }}" alt="logo"></a>
                </div>
                <div class="col-lg-7 col-sm-7">
                    <div class="text-right">
                        <p class="col-white m-b-0 p-t-5"><i class="zmdi zmdi-time"></i> Mon - Sat: 9:00 - 18:00 Sunday CLOSED </p>
                        <p class="col-white m-b-0"><i class="zmdi zmdi-pin"></i> 1422 1st St. Moi Dr Nairobi. Kenya </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/courses">Courses</a></li>
                        <li class="nav-item"><a class="nav-link" href="/events">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="/teachers">Teachers</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/blog">Blog</a>
                                <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">About Us</a>
                                <a class="dropdown-item" href="/faq">FAQs</a>
                                <a class="dropdown-item" href="/galary">Galary</a>
                                <a class="dropdown-item" href="price-list.html">Price list</a>
                                <a class="dropdown-item" href="404.html">404</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                        <li class="nav-item">
                        @if (Session::get('username') != null)
                                
                            
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
                                <a href="/signin" class="nav-link">Sign in</a>

                               
                            
                        
                    @endif
                </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>