<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/mail-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:03:18 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo University Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/inbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/color_skins.css') }}">
</head>

<body class="theme-cyan">
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

    <section class="content inbox">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Compose
                        <small>Welcome to Oreo</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Inbox</a></li>
                        <li class="breadcrumb-item active">Compose</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card action_bar">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-1 col-md-2 col-3">
                                    <div class="checkbox inlineblock delete_all">
                                        <input id="deleteall" type="checkbox">
                                        <label for="deleteall">
                                        All
                                    </label>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-6">
                                    <div class="input-group search">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-3 text-right">
                                    <div class="btn-group d-none d-lg-inline-block d-md-inline-block">
                                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span> </button>
                                        <ul class="dropdown-menu dropdown-menu-right pullDown">
                                            <li><a href="javascript:void(0);">Unread</a></li>
                                            <li><a href="javascript:void(0);">Unimportant</a></li>
                                            <li><a href="javascript:void(0);">Add star</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="javascript:void(0);">Mute</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group d-none d-lg-inline-block d-md-inline-block">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-label"></i>
                                            <span class="caret"></span>
                                        </button>
                                            <ul class="dropdown-menu dropdown-menu-right pullDown">
                                                <li>
                                                    <a href="javascript:void(0);">Family</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Work</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Google</a>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="javascript:void(0);">Create a Label</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-group d-none d-lg-inline-block d-none d-lg-inline-block d-md-inline-block">
                                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-folder"></i> <span class="caret"></span> </button>
                                        <ul class="dropdown-menu dropdown-menu-right pullDown">
                                            <li><a href="javascript:void(0);">Important</a></li>
                                            <li><a href="javascript:void(0);">Social</a></li>
                                            <li><a href="javascript:void(0);">Bank Statements</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="javascript:void(0);">Create a folder</a></li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-neutral d-none d-lg-inline-block d-md-inline-block">
                                    <i class="zmdi zmdi-plus-circle"></i>
                                </button>
                                    <button type="button" class="btn btn-neutral d-none d-lg-inline-block d-md-inline-block">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                    <button type="button" class="btn btn-neutral btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="To:">
                                    </div>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <strong>Content:</strong>
                                    <textarea id="ckeditor">
                                    <h2>WYSIWYG Editor</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                    <h3>Lacinia</h3>
                                    <ul>
                                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                        <li>Praesent non lacinia mi.</li>
                                        <li>Mauris a ante neque.</li>
                                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                    </ul>
                                    <h3>Pellentesque adipiscing</h3>
                                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                </textarea>
                                    <button type="button" class="btn btn-primary btn-round waves-effect m-t-20">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('assets/assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <!-- Ckeditor -->

    <script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/assets/js/pages/forms/editors.js') }}"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/mail-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:03:18 GMT -->

</html>