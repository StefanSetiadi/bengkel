<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

    <!-- Sidebar brand starts -->
    <div class="sidebar-brand">
        <a href="{{route('indexdashboard')}}" class="logo">
            <img src="assets/images/logo.svg" alt="Admin Dashboards" />
        </a>
    </div>
    <!-- Sidebar brand starts -->
  
    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li class="sidebar-dropdown {{ request()->is('indexdashboard') || request()->is('reports') ? 'active' : '' }}">
                    <a href="#">
                        <i class="bi bi-house"></i>
                        <span class="menu-text">Dashboards</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{route('indexdashboard')}}" class="{{ request()->is('indexdashboard') ? 'current-page' : '' }}">Analytics</a>
                            </li>
                            <li>
                                <a href="{{route('reports')}}" class="{{ request()->is('reports') ? 'current-page' : '' }}">Reports</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown {{ request()->is('orders') || request()->is('spareparts') || request()->is('view-cart') || request()->is('checkout') || request()->is('add-product') ? 'active' : '' }}">
                    <a href="#">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Sparepart</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{route('orders')}}" class="{{ request()->is('orders') ? 'current-page' : '' }}">Order History</a>
                            </li>
                            <li>
                                <a href="{{route('spareparts')}}" class="{{ request()->is('spareparts') ? 'current-page' : '' }}">Spareparts</a>
                            </li>
                            <li>
                                <a href="{{route('view-cart')}}" class="{{ request()->is('view-cart') ? 'current-page' : '' }}">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="{{route('checkout')}}" class="{{ request()->is('checkout') ? 'current-page' : '' }}">Billing Details</a>
                            </li>
                            <li>
                                <a href="{{route('spareparts')}}" class="{{ request()->is('add-product') ? 'current-page' : '' }}">Add Product</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown {{ request()->is('bookings') || request()->is('customers') || request()->is('reviews') ? 'active' : '' }}">
                    <a href="#">
                        <i class="bi bi-calendar2-week"></i>
                        <span class="menu-text">Transactions</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{route('customers')}}" class="{{ request()->is('customers') ? 'current-page' : '' }}">Customers</a>
                            </li>
                            <li>
                                <a href="{{route('bookings')}}" class="{{ request()->is('bookings') ? 'current-page' : '' }}">Booking</a>
                            </li>
                            <li>
                                <a href="{{route('reviews')}}" class="{{ request()->is('reviews') ? 'current-page' : '' }}">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown {{ request()->is('profile') || request()->is('account-settings') ? 'active' : '' }}">
                    <a href="#">
                        <i class="bi bi-stickies"></i>
                        <span class="menu-text">Pages</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{route('profile')}}" class="{{ request()->is('profile') ? 'current-page' : '' }}">Profile</a>
                            </li>
                            <li>
                                <a href="{{route('account-settings')}}" class="{{ request()->is('account-settings') ? 'current-page' : '' }}">Account Settings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown {{ request()->is('login') || request()->is('signup') || request()->is('error') || request()->is('maintenance') ? 'active' : '' }}">
                    <a href="#">
                        <i class="bi bi-x-diamond"></i>
                        <span class="menu-text">Authentication</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{route('login')}}" class="{{ request()->is('login') ? 'current-page' : '' }}">Login</a>
                            </li>
                            <li>
                                <a href="{{route('signup')}}" class="{{ request()->is('signup') ? 'current-page' : '' }}">Signup</a>
                            </li>
                            <li>
                                <a href="{{route('error')}}" class="{{ request()->is('error') ? 'current-page' : '' }}">Error</a>
                            </li>
                            <li>
                                <a href="{{route('maintenance')}}" class="{{ request()->is('maintenance') ? 'current-page' : '' }}">Maintenance</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="starter-page.html">
                        <i class="bi bi-hand-index-thumb"></i>
                        <span class="menu-text">Link</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->
  
  </nav>
  <!-- Sidebar wrapper end -->
  