 <header class="navbar navbar-header navbar-header-fixed bg-gray">
      <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="{{ route('system.dashboard')}}" class="df-logo" style="color:#fff">
  
        </a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="{{ route('system.dashboard')}}" class="df-logo">
           {{--  <img src="{{asset('logo/oriedecon-MS.png')}}" class="logo-size mt-2 mb-2" alt="logo"> --}}
          </a>
          <a id="mainMenuClose" href="#"><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu d-block d-md-none ml-3" style="overflow-y: scroll;">
          <li class="nav-label mg-b-15 mt-3">Overview</li>
          <li class="nav-item mt-2 navbar-hover">
            <a href="{{ route('system.dashboard')}}" class="nav-link font-small  navbar-hover--text p-2 rounded">
              <i class="icon-white--hover" data-feather="bar-chart-2"></i> Dashboard</a>
          </li>
        
          <li class="nav-item mt-2 navbar-hover">
            <a href="{{ route('system.account_management.system_user.create')}}" class="nav-link font-small navbar-hover--text p-2 rounded">
              <i class="icon-white--hover" data-feather="users"></i> Create Acccount</a>
          </li>  
        
          <li class="nav-label mg-b-15 mt-3">Account Management</li>
          <li class="nav-item mt-2 navbar-hover">
            <a href="#" class="nav-link font-small  navbar-hover--text p-2 rounded">
              <i class="icon-white--hover" data-feather="user"></i> User</a>
          </li>
          <li class="nav-item mt-2 navbar-hover">
            <a href="#" class="nav-link font-small  navbar-hover--text p-2 rounded">
              <i class="icon-white--hover" data-feather="user"></i> System User</a>
          </li>

           
        </ul>
      </div><!-- navbar-menu-wrapper -->
      <div class="navbar-right">
        <div class="dropdown dropdown-profile">

          <a href="#" class="dropdown-link" data-toggle="dropdown" data-display="static">
           <div class="avatar avatar-sm"><img src="{{ asset('assets/img/img1.png') }}" class="rounded-circle" alt=""></div>
          </a><!-- dropdown-link -->
          <div class="dropdown-menu dropdown-menu-right tx-13">
            <div class="avatar avatar-lg mg-b-15"><img src="{{ asset('assets/img/img1.png') }}" class="rounded-circle" alt=""></div>
            <h6 class="tx-semibold mg-b-5">Administrator</h6>

            <div class="dropdown-divider"></div>
           {{--  <a href="{{ route('system.profile.edit_password',[Auth::user()->id])}}" class="dropdown-item"><i data-feather="settings"></i>Update Password</a> --}}
          
            <a href="{{ route('system.logout')}}" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- navbar-right -->
    </header><!-- navbar -->

