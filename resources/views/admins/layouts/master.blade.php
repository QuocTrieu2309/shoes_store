<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yashadmin.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jan 2024 03:58:16 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="https://yeshadmin.dexignzone.com/">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Yash Admin Sales Management System</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{asset('xhtml/css/style.css')}}" rel="stylesheet">
	
</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div>
			<img src="images/pre.gif" alt=""> 
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('admins.layouts.header')
        @include('admins.layouts.sidebar')
		
        @yield('content')
		
        <!--**********************************
            Content body end
        ***********************************-->
        @include('admins.layouts.footer')
	</div>
    <script src="{{asset('xhtml/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('xhtml/js/custom.js')}}"></script>
	<script src="{{asset('xhtml/js/deznav-init.js')}}"></script>
	<script src="{{asset('xhtml/js/demo.js')}}"></script>
</body>
</html>