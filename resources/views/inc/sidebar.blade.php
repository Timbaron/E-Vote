 <!--  BEGIN SIDEBAR  -->

 <div class="sidebar-wrapper sidebar-theme">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item d-flex">
                <a href="/" class="navbar-brand">
                    <img src="assets/img/logo-32.png" class="img-fluid" alt="logo">
                </a>
                <p class="border-underline"></p>
            </li>
            <li class="nav-item theme-text">
                <a href="/" class="nav-link"> B-Vote </a>
            </li>
        </ul>


        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="/dashboard" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-computer-6 ml-3"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#polls" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-stack"></i>
                        <span>Polls</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="polls" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('polls')}}"> All polls </a>
                    </li>
                    <li>
                        <a href="{{route('poll.create')}}"> Create </a>
                    </li>
                    <li>
                        <a href="{{route('poll.cast.new')}}"> Cast </a>
                    </li>
                </ul>
                <a href="#mailing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-mail-19"></i>
                        <span>Apps</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="mailing" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('coming-soon')}}"> Chat </a>
                    </li>
                    <li>
                        <a href="{{route('coming-soon')}}"> Mailbox </a>
                    </li>
                    <li>
                        <a href="{{route('coming-soon')}}"> Newsletter </a>
                    </li>
                    <li>
                        <a href="{{route('coming-soon')}}"> Todo </a>
                    </li>
                    <li>
                        <a href="{{route('coming-soon')}}"> Blog </a>
                    </li>
                </ul>
                <a href="#account" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-user-9"></i>
                        <span>My Account</span>
                    </div>
                    <div>
                        <i class="flaticon-right-arrow"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="account" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('polls')}}">Loading....  </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                {{-- POLLS --}}
            </li>

        </ul>
    </nav>

</div>

<!--  END SIDEBAR  -->
