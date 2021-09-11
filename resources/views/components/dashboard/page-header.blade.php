  <!-- header section start-->
  <div class="header-section">
    <!--logo and logo icon start-->
    <div class="logo">
        <a href="{{route('dashboard')}}">

            <i class="fa fa-maxcdn"></i>
            <span class="brand-name">
                 {{__('Dashboard')}}
            </span>
        </a>
    </div>

    <!--toggle button start-->
    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
    <!--toggle button end-->

    <!--mega menu start-->
    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
        <ul class="nav navbar-nav">
            <!-- Classic dropdown -->


        </ul>
    </div>
    <!--mega menu end-->

    <div class="notification-wrap">
        <!--right notification start-->
        <div class="right-notification">
            <ul class="notification-menu">

                <li>
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="dropdown-item" ><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</button>
                        </form>
                    </div>

                </li>

                <li>
                    <div class="sb-toggle-right">
                        <i class="mdi mdi-apps"></i>
                    </div>
                </li>
            </ul>
        </div><!--right notification end-->
    </div>
</div>
<!-- header section end-->
