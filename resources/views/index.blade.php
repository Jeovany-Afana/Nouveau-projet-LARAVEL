<!doctype html>
<html lang="en">

<head>
<title>:: Iconic University :: Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="thememakker, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="vendor/jvectormap/jquery-jvectormap-2.0.3.min.css"/>

<!-- MAIN Project CSS file -->
<link rel="stylesheet" href="css/main.css">

<style>
a{
font-family: "Joe";
}
</style>

</head>

<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
    @include('layouts.navbar')

    <!-- main left menu -->
   @include('layouts.sidebar');
    <!-- rightbar icon div -->
    <div class="right_icon_bar">
        <ul>
            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
            <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
            <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
            <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
            <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
            <li><a href="blog-list.html"><i class="fa fa-globe"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>

    <!-- mani page content body part -->
    <div id="main-content">

    </div>

</div>
<!-- Javascript -->
<script src="bundles/libscripts.bundle.js"></script>
<script src="bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="bundles/apexcharts.bundle.js"></script>
<script src="bundles/c3.bundle.js"></script>
<script src="bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<!-- page js file -->
<script src="bundles/mainscripts.bundle.js"></script>
<script src="js/university/index.js"></script>
</body>
</html>
