<!-- Tab Mobile View Header -->
<header class="tabMobileView header navbar fixed-top d-lg-none">
    <div class="nav-toggle">
            <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                <i class="flaticon-menu-line-2"></i>
            </a>
    </div>
    <!-- <ul class="nav navbar-nav">
        <li class="nav-item d-lg-none">
            <form class="form-inline justify-content-end" role="search">
                <input type="text" class="form-control search-form-control mr-3">
            </form>
        </li>
    </ul> -->
</header>
<!-- Tab Mobile View Header -->

<!--  BEGIN NAVBAR  -->
<div style="position: relative">
    <x:notify-messages />
</div>
<header class="header navbar fixed-top navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>

    <ul class="navbar-nav flex-row ml-lg-auto">
        <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-user-12"></span>
            </a>
            <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                <!-- <a class="dropdown-item" href="{{route('coming-soon')}}">
                    <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                </a> -->
                <a class="dropdown-item" href="{{route('polls')}}">
                    <i class="flaticon-stack"></i> <span>My Polls</span>
                </a>
                <!-- <a class="dropdown-item" href="{{route('coming-soon')}}">
                    <i class="mr-1 flaticon-email-fill-1"></i> <span>My Todos</span>
                </a> -->
                <div class="dropdown-divider"></div>
                <!-- <span><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">></a></span> -->
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                </a>
            </div>
        </li>
    </ul>
</header>
<!--  END NAVBAR  -->

