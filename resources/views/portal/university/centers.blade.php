<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/centres.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo University Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/assets/css/main.css')}}">
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
@include('portal.layouts.navbar')
<!-- Left Sidebar -->
@include('portal.layouts.left-sidebar')
<!-- Right Sidebar -->
@include('portal.layouts.right-sidebar')
<!-- Chat-launcher -->
<div class="chat-launcher"></div>
@include('portal.layouts.chat-launcher')


<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Our Location
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>                    
                    <li class="breadcrumb-item active">Centres</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Our</strong> Location <small>Contrary to popular belief, Lorem Ipsum is not simply random text</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="body">                            
                            <ul class="row location_list list-unstyled m-b-20">
                                <li class="col-lg-2 col-md-4 col-6">
                                    <div class="body xl-turquoise">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                        <span>America</span>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-4 col-6">
                                    <div class="body xl-khaki">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4 class="number count-to" data-from="0" data-to="24" data-speed="2500" data-fresh-interval="700">24</h4>
                                        <span>Australia</span>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-4 col-6">
                                    <div class="body xl-parpl">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4 class="number count-to" data-from="0" data-to="15" data-speed="2500" data-fresh-interval="700">15</h4>
                                        <span>Canada</span>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-4 col-6">
                                    <div class="body xl-salmon">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4 class="number count-to" data-from="0" data-to="33" data-speed="2500" data-fresh-interval="700">33</h4>
                                        <span>India</span>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-4 col-6">
                                    <div class="body xl-blue">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4 class="number count-to" data-from="0" data-to="8" data-speed="2500" data-fresh-interval="700">8</h4>
                                        <span>UK</span>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-4 col-6">
                                    <div class="body xl-slategray">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4 class="number count-to" data-from="0" data-to="5" data-speed="2500" data-fresh-interval="700">5</h4>
                                        <span>Other</span>
                                    </div>
                                </li>
                            </ul>
                        </div>                       
                        <div id="world-map-markers" style="height:450px;"></div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{ asset('assets/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->

<script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
<script>
    $(function() {
	"use strict";
	var mapData = {
			"US": 298,			
            "AU": 760,
            "CA": 870,
			"IN": 2000000,
			"GB": 120,
		};
	
	if( $('#world-map-markers').length > 0 ){
		$('#world-map-markers').vectorMap(
		{
			map: 'world_mill_en',
			backgroundColor: 'transparent',
			borderColor: '#fff',
			borderOpacity: 0.25,
			borderWidth: 0,
			color: '#e6e6e6',
			regionStyle : {
				initial : {
				  fill : '#ebebeb'
				}
			  },

			markerStyle: {
                initial: {
                            r: 5,
                            'fill': '#fff',
                            'fill-opacity':1,
                            'stroke': '#000',
                            'stroke-width' : 1,
                            'stroke-opacity': 0.4
                        },
                },
		   
            markers: [
                { latLng: [37.09,-95.71], name: 'America' },                
                { latLng: [-25.27, 133.77], name: 'Australia' },
                { latLng: [56.13,-106.34], name: 'Canada' },
                { latLng: [20.59,78.96], name: 'India' },
                { latLng: [55.37,-3.43], name: 'United Kingdom' },
            ],

			series: {
				regions: [{
					values: {
						"US": '#bdf3f5',						
						"AU": '#f9f1d8',
						"IN": '#ffd4c3',
                        "GB": '#e0eff5',
                        "CA": '#efebf4',
					},
					attribute: 'fill'
				}]
			},
			hoverOpacity: null,
			normalizeFunction: 'linear',
			zoomOnScroll: false,
			scaleColors: ['#000000', '#000000'],
			selectedColor: '#000000',
			selectedRegions: [],
			enableZoom: false,
			hoverColor: '#fff',
		});
    }
});
</script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/centres.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
</html>