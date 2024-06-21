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
            <li class="sidebar-dropdown active">
                <a href="#">
                    <i class="bi bi-house"></i>
                    <span class="menu-text">Dashboards</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('indexdashboard')}}" class="current-page">Analytics</a>
                        </li>
                        <li>
                            <a href="{{route('reports')}}">Reports</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-handbag"></i>
                    <span class="menu-text">Product</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('orders')}}">Order History</a>
                        </li>
                        <li>
                            <a href="{{route('products')}}">Products</a>
                        </li>
                        <li>
                            <a href="{{route('view-cart')}}">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="{{route('checkout')}}">Billing Details</a>
                        </li>
                        <li>
                            <a href="{{route('customers')}}">Customers</a>
                        </li>
                        <li>
                            <a href="{{route('add-product')}}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{route('reviews')}}">Reviews</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-gem"></i>
                    <span class="menu-text">Widgets</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('widgets')}}">Widgets</a>
                        </li>
                        <li>
                            <a href="{{route('graph-widgets')}}">Graph Widgets</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-collection"></i>
                    <span class="menu-text">UI Elements</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('accordions')}}">Accordions</a>
                        </li>
                        <li>
                            <a href="{{route('alerts')}}">Alerts</a>
                        </li>
                        <li>
                            <a href="{{route('buttons')}}">Buttons</a>
                        </li>
                        <li>
                            <a href="{{route('badges')}}">Badges</a>
                        </li>
                        <li>
                            <a href="{{route('cards')}}">Cards</a>
                        </li>
                        <li>
                            <a href="{{route('carousel')}}">Carousel</a>
                        </li>
                        <li>
                            <a href="{{route('dropdowns')}}">Dropdowns</a>
                        </li>
                        <li>
                            <a href="{{route('icons')}}">Icons</a>
                        </li>
                        <li>
                            <a href="{{route('modals')}}">Modals</a>
                        </li>
                        <li>
                            <a href="{{route('offcanvas')}}">Off Canvas</a>
                        </li>
                        <li>
                            <a href="{{route('progress')}}">Progress Bars</a>
                        </li>
                        <li>
                            <a href="{{route('spinners')}}">Spinners</a>
                        </li>
                        <li>
                            <a href="{{route('tabs')}}">Tabs</a>
                        </li>
                        <li>
                            <a href="{{route('tooltips')}}">Tooltips</a>
                        </li>
                        <li>
                            <a href="{{route('typography')}}">Typography</a>
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
                            <a href="{{route('profile')}}">Profile</a>
                        </li>
                        <li>
                            <a href="{{route('account-settings')}}">Account Settings</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{route('calendar')}}">
                    <i class="bi bi-calendar4"></i>
                    <span class="menu-text">Calendar</span>
                </a>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-columns-gap"></i>
                    <span class="menu-text">Forms</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('form-inputs')}}">Form Inputs</a>
                        </li>
                        <li>
                            <a href="{{route('form-checkbox-radio')}}">Checkbox &amp; Radio</a>
                        </li>
                        <li>
                            <a href="{{route('form-file-input')}}">File Input</a>
                        </li>
                        <li>
                            <a href="{{route('form-validations')}}">Validations</a>
                        </li>
                        <li>
                            <a href="{{route('bs-select')}}">Bootstrap Select</a>
                        </li>
                        <li>
                            <a href="{{route('date-time-pickers')}}">Date Time Pickers</a>
                        </li>
                        <li>
                            <a href="{{route('input-mask')}}">Input Masks</a>
                        </li>
                        <li>
                            <a href="{{route('editor')}}">Editor</a>
                        </li>
                        <li>
                            <a href="{{route('form-layout1')}}">Form Layout</a>
                        </li>
                        <li>
                            <a href="{{route('form-layout2')}}">Form Layout 2</a>
                        </li>
                        <li>
                            <a href="{{route('form-layout3')}}">Form Layout 3</a>
                        </li>
                        <li>
                            <a href="{{route('form-layout4')}}">Form Horizontal</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-window-split"></i>
                    <span class="menu-text">Tables</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('tables')}}">Tables</a>
                        </li>
                        <li>
                            <a href="{{route('data-tables')}}">Data Tables</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-pie-chart"></i>
                    <span class="menu-text">Graphs &amp; Maps</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('apex')}}">Apex</a>
                        </li>
                        <li>
                            <a href="{{route('morris')}}">Morris</a>
                        </li>
                        <li>
                            <a href="{{route('maps')}}">Maps</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <i class="bi bi-layout-sidebar"></i>
                    <span class="menu-text">Layouts</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('layout')}}">Default Layout</a>
                        </li>
                        <li>
                            <a href="{{route('layout-grid')}}">Grid Layout</a>
                        </li>
                        <li>
                            <a href="{{route('layout-welcome')}}">Welcome Layout</a>
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
                            <a href="{{route('login')}}">Login</a>
                        </li>
                        <li>
                            <a href="{{route('signup')}}">Signup</a>
                        </li>
                        <li>
                            <a href="{{route('error')}}">Error</a>
                        </li>
                        <li>
                            <a href="{{route('maintenance')}}">Maintenance</a>
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