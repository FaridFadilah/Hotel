    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Dashboard</li>
            <!-- End Title -->

            <!-- Dashboard -->
            <li class="side-nav-menu-item {{ request()->is("admin") ? "active" : "" }}">
                <a class="side-nav-menu-link media align-items-center" href="{{ route("admin.") }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fa fa-bed"></i>
                </span>
                    <span class="side-nav-fadeout-on-closed media-body">info kamar</span>
                </a>
            </li>
            <!-- End Dashboard -->
{{-- 
            <li class="side-nav-menu-item {{ request()->is("kamar/create") ? "active" : "" }}">
                <a class="side-nav-menu-link media align-items-center" href="/kamar/create">
                <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fa fa-envelope"></i>
                </span>
                    <span class="side-nav-fadeout-on-closed media-body">Tambah</span>
                </a>
            </li> --}}
            <li class="side-nav-menu-item {{ request()->is("admin/user") ? "active" : "" }}">
                <a class="side-nav-menu-link media align-items-center" href="/admin/user">
                <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fa fa-envelope"></i>
                </span>
                    <span class="side-nav-fadeout-on-closed media-body">info user</span>
                </a>
            </li>
        </ul>
    </aside>