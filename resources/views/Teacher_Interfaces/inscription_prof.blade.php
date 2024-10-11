<!doctype html>
<html lang="en">

<head>
<title>Ajouter un prof</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendor/dropify/css/dropify.min.css">
<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/main.css">

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


                            
                          
                           
                            <li>
                                <a href="{{URL::to('/loginProf')}}"></i><span>Se connecter</span></a>
                               
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

   

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Inscription proffesseur</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Professors</li>
                            <li class="breadcrumb-item active">inscription</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-secondary"> Send report</button>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Formulaire d'inscription</strong> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{URL::to('/saveteacher')}}" method="post">
                           
                                @csrf
                                <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Entrez votre nom">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="adresse" placeholder="Entrez votre adresse">
                                    </div>
                                </div>
                               
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="departement" class="form-control" placeholder="Département">
                                    </div>
                                </div>
                              
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="telephone" class="form-control" placeholder="Numéro de téléphone">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="password" class="form-control" placeholder="Mot de passe">
                                    </div>
                                </div>
                               
                            
                                <div class="col-sm-12">
                                    <input type="submit" value="Enregistrer" class="btn primary" style="background-color: aqua">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
<!-- Javascript -->
<script src="bundles/libscripts.bundle.js"></script>
<script src="bundles/vendorscripts.bundle.js"></script>

<script src="vendor/dropify/js/dropify.min.js"></script>
<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- page js file -->
<script src="bundles/mainscripts.bundle.js"></script>
<script src="js/pages/forms/dropify.js"></script>
</body>
</html>
