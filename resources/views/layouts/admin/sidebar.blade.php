<div class="page-sidebar-wrapper">

        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

        <div class="page-sidebar navbar-collapse collapse">

            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start active open">
                    <a href="javascript:;">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="active">
                            <a href="/administration/stats">
                            <i class="icon-bar-chart"></i>
                            Stats</a>
                        </li>
                        <li>
                            <a href="/administration/activity">
                            <i class="icon-bulb"></i>
                            Activity</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">CRM</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <!-- TODO: Overview of users revenue 

                        <li>
                            <a href="/administration/overview">
                            <i class="icon-home"></i>
                            Overview</a>
                        </li>

                        -->
                        
                        <li>
                            <a href="/administration/orders">
                            <i class="icon-basket"></i>
                            Orders</a>
                        </li>
                        <li>
                            <a href="/administration/invoices">
                            <i class="icon-tag"></i>
                            Invoices</a>
                        </li>
                        <li>
                            <a href="/administration/products">
                            <i class="icon-handbag"></i>
                            Products</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                    <i class="icon-rocket"></i>
                    <span class="title">CMS</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/administration/posts">
                            Posts</a>
                        </li>
                        <li>
                            <a href="/administration/categories">
                            Categories</a>
                        </li>
                        <li>
                            <a href="/administration/media">
                            Media</a>
                        </li>
                    </ul>
                </li>
           
                <li class="heading">
                    <h3 class="uppercase">Settings</h3>
                
                <li>
                    <a href="javascript:;">
                    <i class="icon-settings"></i>
                    <span class="title">Global Settings</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/global/settings">
                            General Setup</a>
                        </li>
                        <li>
                            <a href="/administration/users">
                            Users and Privileges </a>
                        </li>
                        <li>
                            <a href="/global/languages">
                            Languages </a>
                        </li>
                        <li>
                            <a href="/global/authentication">
                            Authentication</a>
                        </li>
                    </ul>
                </li>
                <li class="last">
                    <a href="javascript:;">
                    <i class="icon-envelope-open"></i>
                    <span class="title">Exports & Imports</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/administration/exports">
                            Time Specific Export</a>
                        </li>
                        <li>
                            <a href="/administration/calculation">
                            Calculations</a>
                        </li>
                        <li>
                            <a href="/administration/goods">
                            State Of Goods</a>
                        </li>
                        <li>
                            <a href="/administration/accounts">
                            Issued Accounts</a>
                        </li>
                        <li>
                            <a href="/administration/items">
                            Account Items</a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>