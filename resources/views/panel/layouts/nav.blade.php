  <div class="content">
    <div class="header">
      <div class="header-left">
        <a href="" class="burger-menu"><i data-feather="menu"></i></a>
      </div><!-- header-left -->

      <div class="header-right">
        <div class="dropdown dropdown-loggeduser">
          <a href="" class="dropdown-link" data-toggle="dropdown">
            <div class="avatar avatar-sm">
              <img src="{{asset('assets/images/user.svg')}}" class="rounded-circle" alt="">
            </div><!-- avatar -->
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-menu-header">
              <div class="media align-items-center">
                <div class="avatar">
                  <img src="{{asset('assets/images/user.svg')}}" class="rounded-circle" alt="">
                </div><!-- avatar -->
                <div class="media-body mg-l-10">
                  <h6>{{Session::get('nama')}}</h6>
                  <span>Link : {{Session::get('link')}}</span>
                </div>
              </div><!-- media -->
            </div>
            <div class="dropdown-menu-body">
              <a href="{{url('/akun/log/out')}}" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
            </div>
          </div><!-- dropdown-menu -->
        </div>
      </div><!-- header-right -->
    </div><!-- header -->