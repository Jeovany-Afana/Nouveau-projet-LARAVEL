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
   <!-- main left menu -->
   <div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenue,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pro. Chandler Bing</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="doctor-profile.html"><i class="icon-user"></i>Mon profile</a></li>

                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Se déconnecter</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Exp</small>
                    <h6>14</h6>
                </li>
                <li class="col-4">
                    <small>Awards</small>
                    <h6>13</h6>
                </li>
                <li class="col-4">
                    <small>Clients</small>
                    <h6>213</h6>
                </li>
            </ul>
        </div>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
        </ul>

                  <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu li_animation_delay">
                        <li class="active"><a href="{{URL::to('/index')}}"><i class="fa fa-dashboard"></i><span>Accueil</span></a></li>
                       
                        @if (Auth::check())
                        <li>
                            <a href="{{URL::to('/loginStudent')}}"></i><span>Se connecter</span></a>
                           
                        </li>
                        @else
                            
                        @endif
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

    <!-- mani page content body part -->
    <div id="main-content">
      @yield('contenu')

      @yield('formulaire')
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