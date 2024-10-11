<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Administration</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                    <li class="breadcrumb-item">Profile</li>
                    <li class="breadcrumb-item active">Administrateur</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex flex-row-reverse">
                    
                    <div class="p-2 d-flex">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card member-card">
                <div class="header primary-bg">
                    @if (Auth::guard('membre__administrations')->check())
                    <h4 class="m-t-10 text-light">{{ Auth::guard('membre__administrations')->user()->name }}</h4>
                @else
                    <h4 class="m-t-10 text-light">Invité</h4>
                @endif
                </div>
                <div class="member-img">
                    <a href="javascript:void(0);"><img src="images/lg/avatar2.jpg" class="rounded-circle" alt="profile-image"></a>
                </div>
              
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
           
            <div class="card">
                <div class="header">
                    @if(Auth::guard('membre__administrations')->check())
                    <h2>Contact: <br> <b>{{Auth::guard('membre__administrations')->user()->phone_number }}</b></h2>
                    @else
                    <h2>Aucun contact à afficher</h2>
                   @endif
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
             
            </div>
          
        
        <div class="card" id="timeline">
          
            </i>
        </div>
        
        </div>
    </div>
</div>

{{-- <script>
    document.querySelector('form').addEventListener('submit',function () {

        document.querySelector('form').style.display = 'none';
        
    })
</script> --}}