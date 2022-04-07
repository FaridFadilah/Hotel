    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Dashboard</li>
            <!-- End Title -->
            <!-- Dashboard -->
            <li class="side-nav-menu-item {{ request()->is("resepsionis") ? "active" : "" }}">
                <a class="side-nav-menu-link media align-items-center" href="{{ route("resepsionis") }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fa fa-bed"></i>
                </span>
                    <span class="side-nav-fadeout-on-closed media-body">Data Reservasi</span>
                </a>
            </li>
            <!-- End Dashboard -->
        </ul>
    </aside>