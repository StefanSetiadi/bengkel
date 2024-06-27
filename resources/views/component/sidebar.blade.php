<nav class="sidebar-wrapper">

    <!-- Sidebar brand starts -->
    <div class="sidebar-brand">
        <a href="{{ route("index")}}" class="logo">
            <img src="assets/images/logo.svg" alt="Admin Dashboards" />
        </a>
    </div>
    <!-- Sidebar brand starts -->

    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li class="sidebar-dropdown">
                    <a href="{{ route("index")}}">
                        <i class="bi bi-house"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route("reports") }}">Reports</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Transaction</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route("orders") }}">Order History</a>
                            </li>
                            <li>
                                <a href="{{ route("products") }}">Products</a>
                            </li>
                            <li>
                                <a href="{{ route("orders") }}">Billing Details</a>
                            </li>
                            <li>
                                <a href="{{ route("customers") }}">Customers</a>
                            </li>
                            <li>
                                <a href="{{ route("orders") }}">Add Product</a>
                            </li>
                            <li>
                                <a href="{{ route("reviews") }}">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-stickies"></i>
                        <span class="menu-text">Pages</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route("profile")}}">Profile</a>
                            </li>
                            <li>
                                <a href="{{route("account-settings")}}">Account Settings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-x-diamond"></i>
                        <span class="menu-text">Authentication</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route("login")}}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route("signup")}}">Signup</a>
                            </li>
                            <li>
                                <a href="{{ route("error")}}">Error</a>
                            </li>
                            <li>
                                <a href="{{ route("maintenance")}}">Maintenance</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->

</nav>