<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ app()->getLocale() }}"> <!--<![endif]-->

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- Meta Description -->
    <meta name="description" content="Coffee Shop & Restaurants Management System">
    <!-- Meta Keyword -->
    <meta name="keywords" content="crms, coffee shop, restaurant, management, system">
    <!-- meta character set -->
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- CSS -->

        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="css/helper.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/salvattore.css">
        <link rel="stylesheet" href="css/jquery.countdown.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/revolution.css">
        <link rel="stylesheet" href="css/revolution-extralayers.css">

        <link rel="stylesheet" href="css/main.css">
                

        <!-- Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">


    
</head>


<body>

     <!-- PRELOADING --> 
        <div id="preload">
            <div class="preload">
                <div class="spinner"></div>
            </div>
        </div>
	
        <!-- NAVIGATION -->
        <nav id="nav-primary" class="navbar navbar-custom" role="navigation">
          <div class="container">
            
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="index.html"><img src="img/logo.png" alt="logo"></a>
            </div>
    
            <div class="collapse navbar-collapse" id="nav">
              <ul class="nav navbar-nav navbar-right uppercase">
                <li><a data-toggle="elementscroll" href="#info">About</a></li>
                <li><a data-toggle="elementscroll" href="#program">Program</a></li>
                <li><a data-toggle="elementscroll" href="#download">Brochure</a></li>
                <li><a data-toggle="elementscroll" href="#register">Register</a></li>
                <li><a data-toggle="elementscroll" href="#gallery">Gallery</a></li>
                <li><a data-toggle="elementscroll" href="#venue">Contact</a></li>
              </ul>
            </div>
            
          </div>
        </nav>
        


	@yield('content')

	
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
        
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script src="js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.themepunch.revolution.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>

        <script src="js/salvattore.js"></script>

        <script src="js/jquery.countdown.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/retina.js"></script>
        
        <script src="js/main.js"></script>

</body>

</html>