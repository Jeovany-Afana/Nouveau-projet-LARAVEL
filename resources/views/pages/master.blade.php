<!doctype html>
<html lang="en">

<head>
<title>@yield('title')</title>
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

   @include('layouts.iconbar');

    <!-- mani page content body part -->
    <div id="main-content">
      @yield('contenu')
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