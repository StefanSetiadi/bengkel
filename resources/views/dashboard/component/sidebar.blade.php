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
                <li class="{{ request()->is('index') ? 'active' : '' }}">
                    <a href="{{route('indexdashboard')}}" class="{{ request()->is('index') ? 'current-page' : '' }}">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('spareparts') || request()->is('add-sparepart') || request()->is('editSparepart*') ? 'active' : '' }}">
                    <a href="{{ route('spareparts') }}" class="{{ request()->is('spareparts') || request()->is('add-sparepart') || request()->is('editSparepart*') ? 'current-page' : '' }}">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Spareparts</span>
                    </a>
                </li>
                <li class="{{ request()->is('bookingDashboard') ? 'active' : '' }}">
                    <a href="{{route('bookingDashboard')}}" class="{{ request()->is('bookingDashboard') ? 'current-page' : '' }}">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Booking</span>
                    </a>
                </li>
                <li class="{{ request()->is('servicesDashboard') ? 'active' : '' }}">
                    <a href="{{route('servicesDashboard')}}" class="{{ request()->is('servicesDashboard') ? 'current-page' : '' }}">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Services</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->
  
  </nav>
  <!-- Sidebar wrapper end -->
  