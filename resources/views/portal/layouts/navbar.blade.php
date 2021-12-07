<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/"><img src="{{ asset('oreo/assets/images/logo.svg') }}" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li><a href="/portal/events" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="/portal/inbox" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="/portal/contact" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="body">
                    <ul class="menu list-unstyled">
                        
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="{{ asset('oreo/assets/images/xs/avatar1.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">31min ago</span></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>                    
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify">
                <span class="heartbit"></span>
                <span class="point"></span>
            </div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="header">Department</li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-primary">
                                    <span class="progress-badge">Computer</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>                        
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar1.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar1.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar1.jpg') }}" alt="Avatar">
                                        </li>                            
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">Medical</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="progress-value">45%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar1.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar2.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar3.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar4.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar5.jpg') }}" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">Art & Design</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                            <span class="progress-value">29%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar1.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar2.jpg') }}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{ asset('oreo/assets/images/xs/avatar3.jpg') }}" alt="Avatar">
                                        </li>                            
                                    </ul>
                                </div>
                            </a>
                        </li>                    
                    </ul>
                </li>
                <li class="footer"><a href="javascript:void(0);">View All</a></li>
            </ul>
        </li>
        <li>
            <div class="input-group">                
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </li>        
        <li class="float-right">
            
            <a  href="{{ route('logout') }}"  class="mega-menu" data-close="true" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                @csrf
            </form>

            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>
