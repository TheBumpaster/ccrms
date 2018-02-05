<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href="/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">

    <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{route('app')}}">
            <img src="/admin/layout2/img/logo-default.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
            <form class="search-form search-form-expanded" action="extra_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                    </span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="/admin/layout2/img/avatar3_small.jpg"/>
                        <span class="username username-hide-on-mobile">
                        {{Auth::user()->name}} </span>
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            <li>
                                <a href="#">
                                <i class="icon-user"></i> My Profile </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                3 </span>
                                </a>
                            </li>

                            
                            <li class="divider">
                            </li>

                            <li>
                                <a href="#">
                                <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}">
                                <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
    </div>

    <div class="clearfix">
    </div>

    <!-- YIELD CONTENT -->
    @yield('content')
    <!-- END YIELD CONTENT -->


    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="/global/plugins/respond.min.js"></script>
    <script src="/global/plugins/excanvas.min.js"></script> 
    <![endif]-->
    <script src="/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <script src="/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
    <script src="/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
    <script src="/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/global/plugins/ckeditor/ckeditor.js"></script>


    <script src="/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="/admin/layout2/scripts/layout.js" type="text/javascript"></script>
    <script src="/admin/layout2/scripts/demo.js" type="text/javascript"></script>
    <script src="/admin/pages/scripts/components-form-tools.js"></script>



    <script>

    jQuery(document).ready(function() {       
       // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        
    });

    </script>

    <script src="/application.js"></script>

    <!-- END JAVASCRIPTS -->

</body>
</html>
