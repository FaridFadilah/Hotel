<body class="has-sidebar has-fixed-sidebar-and-header">
    <!-- Header -->
    <header class="header bg-body">
        <nav class="navbar flex-nowrap p-0">
            <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
                <!-- Logo For Mobile View -->
                <a class="navbar-brand navbar-brand-mobile" href="/">
                    <img class="img-fluid w-100" src="{{ asset("storage/img/hotel.png") }}" alt="Graindashboard">
                </a>
                <!-- End Logo For Mobile View -->
    
                <!-- Logo For Desktop View -->
                <a class="navbar-brand navbar-brand-desktop" href="/">
                    <h3 class="side-nav-hide-on-closed" style="padding-top: .5rem;">Hotel Hebat</h3>
                    <img class="side-nav-show-on-closed" src="{{ asset("storage/img/hotel.png") }}" style="width: auto; height: 33px;"> 
                </a>
                <!-- End Logo For Desktop View -->
            </div>
    
            <div class="header-content col px-md-3">
                <div class="d-flex align-items-center">
                    <!-- Side Nav Toggle -->
                    <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                        data-close-invoker="#sidebarClose"
                        data-target="#sidebar"
                        data-target-wrapper="body">
                        <i class="fa fa-align-left"></i>
                    </a>
                    <!-- End Side Nav Toggle -->
    
                    <!-- User Notifications -->
                    <div class="dropdown ml-auto">
                        <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden" aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                            <div class="card">
                                <div class="card-header d-flex align-items-center border-bottom py-3">
                                    <h5 class="mb-0">Notifications</h5>
                                    <a class="link small ml-auto" href="#">Clear All</a>
                                </div>
    
                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10000</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                        </div>
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10001</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End User Notifications -->
                    <!-- User Avatar -->
                    <div class="dropdown mx-3 dropdown ml-2">
                        <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                            <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                            <span class="mr-md-2 avatar-placeholder">G</span>
                            <span class="d-none d-md-block">{{ Auth::user()->name }}</span>
                            <i class="fa fa-angle-down d-none d-md-block ml-2"></i>
                        </a>
    
                        <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                            
                            <li class="unfold-item">
                                <a class="unfold-link d-flex align-items-center text-nowrap"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <span class="unfold-item-icon mr-3">
                          <i class="fa fa-arrow-circle-o-left"></i>
                        </span>
                                    Sign Out
                                </a>
                    <form action="{{ route('logout') }}"  id="logout-form" method="POST" >
                        @csrf
                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- End User Avatar -->
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->