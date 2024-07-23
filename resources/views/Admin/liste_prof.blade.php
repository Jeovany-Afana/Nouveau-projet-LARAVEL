<!doctype html>
<html lang="en">

<head>
<title>:: Iconic University :: Add Professors</title>
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
    @include('layouts.sidebar')

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
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Professors List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Professors</li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Permanent</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Consultant</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Permanent">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar1.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. John</h4>
                                                <p class="text-muted">Mathematics</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar2.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Amelia</h4>
                                                <p class="text-muted">Architecture</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar3.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Jack </h4>
                                                <p class="text-muted">Civil Engineering</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar4.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Jessica </h4>
                                                <p class="text-muted">Chemistry</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar5.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Joseph </h4>
                                                <p class="text-muted">Biology</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar6.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Charlie </h4>
                                                <p class="text-muted">Manegment</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar1.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. William </h4>
                                                <p class="text-muted">Computer Engineering</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar4.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Sophie </h4>
                                                <p class="text-muted">Mathematics</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane" id="Consultant">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar2.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Amelia</h4>
                                                <p class="text-muted">Mathematics</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar4.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Jack </h4>
                                                <p class="text-muted">Architecture</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar1.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Joseph </h4>
                                                <p class="text-muted">Chemistry</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/lg/avatar6.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Charlie </h4>
                                                <p class="text-muted">Chemistry</p>
                                                <ul class="social-links list-inline mt-2">
                                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="instagram" href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="bundles/libscripts.bundle.js"></script>    
<script src="bundles/vendorscripts.bundle.js"></script>

<!-- page js file -->
<script src="bundles/mainscripts.bundle.js"></script>
</body>
</html>
