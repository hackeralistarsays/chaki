<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Profile</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                        <div class="image">
                        @if (Session::get('profile_pic') != null)
                        <a href="/users/profile"><img class="img-circle elevation-2" style="width: 80px; height: 80px;" src="{{URL::asset('images/'.session::get('profile_pic'))}}" alt="image"></a> 
                        @else
                        <a href="/users/profile"><img class="img-circle elevation-2"style="width: 80px; height: 80px;" src="{{URL::asset('images/default_profile_pic.png')}}" alt="image"></a> 

                        @endif
                        </div>
                          
                            <div class="detail">
                                <h4>{{ Session::get('username') }}</h4>
                                @if (Session::get('is_student'))
                                <small>Student</small>
                                @endif
                                @if (Session::get('is_applicant'))
                                <small>Applicant</small>
                                @endif
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li class=" open"><a href="/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    @if (Session::get('is_student'))
                    <li class=" open"><a href="/finance"><i class="zmdi zmdi-money"></i><span>Finance Registration</span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Accomodation</span> </a>
                        <ul class="ml-menu">
                            <li><a href="/portal/all_students">Book Room</a></li>
                            <li><a href="/portal/add_student">Clear Room</a></li>
                            <li><a href="students-profile.html">Accomodation History</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-alt"></i><span>My Fees</span> </a>
                        <ul class="ml-menu">
                            <li><a href="/portal/professors">Structure</a></li>
                            <li><a href="/portal/add_professor">Statement</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="/units"><i class="zmdi zmdi-account"></i><span>Unit Registration</span> </a></li>                    
                    <li><a href="/portal/parents"><i class="zmdi zmdi-account"></i><span>Late Unit Registration</span> </a></li>                    
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Results Slip</span> </a>
                        <ul class="ml-menu">
                            <li><a href="sign-in.html">Semester Results</a> </li>
                            <li><a href="sign-up.html">End Year Results</a> </li>
                            
                        </ul>
                    </li>
                    <li class="header">UNIVERSITY</li>
                    <li><a href="/portal/events"><i class="zmdi zmdi-calendar-check"></i><span>All Units</span> </a></li>
                    <li><a href="/portal/library"><i class="zmdi zmdi-book"></i><span>Disciplinary Cases</span> </a></li>
                    <li><a href="/portal/classroom"><i class="zmdi zmdi-device-hub"></i><span>Deferment</span> </a></li>
                    <li><a href="/portal/noticeboard"><i class="zmdi zmdi-alert-circle"></i><span>Noticeboard</span> </a></li>
                    <li><a href="/portal/centers"><i class="zmdi zmdi-pin"></i><span>My Time Table</span></a></li>                 
                    @endif
                   <!-- <li class="header">EXTRA COMPONENTS</li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                            <li><a href="blog-post.html">New Post</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span> </a>
                        <ul class="ml-menu">
                            <li><a href="file-dashboard.html">All File</a></li>
                            <li><a href="file-documents.html" >Documents</a></li>
                            <li><a href="file-media.html">Media</a></li>
                            <li><a href="file-images.html">Images</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu">
                            <li><a href="/portal/inbox">Inbox</a></li>
                            <li><a href="/portal/chat">Chat</a></li>                                                        
                            <li><a href="/portal/contact">Contact list</a></li>                            
                        </ul>
                    </li>                    
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                        <ul class="ml-menu">
                            <li><a href="widgets-app.html">Apps Widgetse</a></li>
                            <li><a href="widgets-data.html">Data Widgetse</a></li>
                        </ul>
                    </li>                    
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                        <ul class="ml-menu">
                            <li><a href="blank.html">Blank Page</a> </li>
                            <li><a href="dashboard-rtl.html">RTL Support</a> </li>
                            <li><a href="index2.html">Horizontal Menu</a> </li>
                            <li><a href="image-gallery.html">Image Gallery</a> </li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="timeline.html">Timeline</a></li>                            
                            <li><a href="invoice.html">Invoices</a></li>
                            <li><a href="search-results.html">Search Results</a></li>
                        </ul>
                    </li>
-->
                   
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                        <div class="image">
                        @if (Session::get('profile_pic') != null)
                       <a href="/users/profile"> <img class="img-circle elevation-2" style="width: 80px; height: 80px;" src="{{URL::asset('images/'.session::get('profile_pic'))}}" alt="image"> </a>
                        @else
                        <a href="/users/profile"> <img class="img-circle elevation-2"style="width: 80px; height: 80px;" src="{{URL::asset('images/default_profile_pic.png')}}" alt="image"></a>

                        @endif
                        </div>
                          
                            <div class="detail">
                                <h4>{{ Session::get('username') }}</h4>
                                @if (Session::get('is_student'))
                                <small>Student</small>
                                @endif
                                @if (Session::get('is_applicant'))
                                <small>Applicant</small>
                                @endif
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                                <div class="col-4 p-r-0">
                                    <h5 class="m-b-5">13</h5>
                                    <small>Exp</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">33</h5>
                                    <small>Awards</small>
                                </div>
                                <div class="col-4 p-l-0">
                                    <h5 class="m-b-5">237</h5>
                                    <small>Class</small>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Location: </small>
                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>Charlotte@example.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>                        
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">89% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Illustrator</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Art & Design</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">78% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>CSS</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </li>
                        </ul>                        
                    </li>                    
                </ul>
            </div>
        </div>
    </div>    
</aside>