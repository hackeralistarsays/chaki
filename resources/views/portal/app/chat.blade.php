<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:59 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo University Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/chatapp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/color_skins.css') }}">
</head>

<body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/assets/images/logo.svg') }}" width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Top Bar -->
    @include('portal.layouts.app')

    

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Chat
                        <small>Welcome to Oreo</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                        <li class="breadcrumb-item active">Chat</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-xl-12">
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                            </div>
                            <ul class="nav nav-tabs p-l-0 p-r-0" role="tablist">
                                <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#people">People</a></li>
                                <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#groups">Groups</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane stretchRight active" id="people">
                                    <ul class="chat-list list-unstyled m-b-0">
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar1.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Vincent Porter</div>
                                                <div class="status"> <i class="zmdi zmdi-circle offline"></i> left 7 mins ago </div>
                                            </div>
                                        </li>
                                        <li class="clearfix active">
                                            <img src="{{ asset('assets/assets/images/xs/avatar2.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Aiden Chavez</div>
                                                <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar3.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Mike Thomas</div>
                                                <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar4.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Erica Hughes</div>
                                                <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar5.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Ginger Johnston</div>
                                                <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar6.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Tracy Carpenter</div>
                                                <div class="status"> <i class="zmdi zmdi-circle offline"></i> left 30 mins ago </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar7.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Christian Kelly</div>
                                                <div class="status"> <i class="zmdi zmdi-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar8.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Monica Ward</div>
                                                <div class="status"> <i class="zmdi zmdi-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar9.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                <div class="status"> <i class="zmdi zmdi-circle offline"></i> offline since Oct 28 </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane stretchRight" id="groups">
                                    <ul class="chat-list list-unstyled">
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar6.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">PHP Lead</div>
                                                <div class="status">6 People </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar7.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">Design Faculty</div>
                                                <div class="status">10 People </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="{{ asset('assets/assets/images/xs/avatar8.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">TL Groups</div>
                                                <div class="status">2 People </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="{{ asset('assets/assets/images/xs/avatar2.jpg') }}" alt="avatar" />
                                <div class="chat-about">
                                    <div class="chat-with">Aiden Chavez</div>
                                    <div class="chat-num-messages">already 8 messages</div>
                                </div>
                                <a href="javascript:void(0);" class="list_btn btn btn-primary btn-round float-md-right"><i class="zmdi zmdi-comments"></i></a>
                            </div>
                            <div class="chat-history xl-slategray">
                                <ul class="m-b-0">
                                    <li class="clearfix">
                                        <div class="message-data text-right"> <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp; <span class="message-data-name">Charlotte</span> <i class="zmdi zmdi-circle me"></i> </div>
                                        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name"><i class="zmdi zmdi-circle online"></i> Aiden</span> <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>Are we meeting today? Project has been already finished and I have results to show you.</p>
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-4 m-t-10">
                                                    <a href="javascript:void(0);"><img src="{{ asset('assets/assets/images/image2.jpg') }}" alt="" class="img-fluid img-thumbnail"></a>
                                                </div>
                                                <div class="col-sm-6 col-lg-4 m-t-10">
                                                    <a href="javascript:void(0);"> <img src="{{ asset('assets/assets/images/image3.jpg') }}" alt="" class="img-fluid img-thumbnail"></a>
                                                </div>
                                                <div class="col-sm-6 col-lg-4 m-t-10">
                                                    <a href="javascript:void(0);"> <img src="{{ asset('assets/assets/images/image4.jpg') }}" alt="" class="img-fluid img-thumbnail"> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-circle online"></i> <i class="zmdi zmdi-circle online" style="color: #AED2A6"></i> <i class="zmdi zmdi-circle online" style="color:#DAE9DA"></i> </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group p-t-15">
                                    <input type="text" class="form-control" placeholder="Enter text here...">
                                    <span class="input-group-addon">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </span>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-raised btn-warning btn-round"><i class="zmdi zmdi-camera"></i></a>
                                <a href="javascript:void(0);" class="btn btn-raised btn-info btn-round"><i class="zmdi zmdi-file-text"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('assets/assets/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="{{asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
    <!-- Custom Js -->

    <script>
        $(".list_btn").on('click', function() {
            $("#plist").toggleClass("open");
        });
    </script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:59 GMT -->

</html>