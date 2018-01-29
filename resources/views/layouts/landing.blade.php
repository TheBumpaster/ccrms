<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Site Title -->
    <title>Eydia Landing Page</title>
    
    <link rel="shortcut icon" href="img/icons/favicon.png">
    
    <!--
    Google Fonts
    ============================================= -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,700italic,300italic">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arvo:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:800,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Great+Vibes">

    <!--
    CSS
    ============================================= -->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.bxslider.css">
    <link type="text/css" rel="stylesheet" href="js/vendor/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="css/lightbox.css">
    <link type="text/css" rel="stylesheet" href="css/icomoon.css">
    <link type="text/css" rel="stylesheet" href="css/flaticon.css">
    <link type="text/css" rel="stylesheet" href="css/supersized.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-timepicker.css">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/multiscroll.css">
    <link type="text/css" rel="stylesheet" href="css/selectize.default.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.pagepiling.css">
    <link type="text/css" rel="stylesheet" href="css/bbpress.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.timepicker.css">
    <link type="text/css" rel="stylesheet" href="css/bbp-theme.css">
    <link type="text/css" rel="stylesheet" href="css/buddypress.css">
    <link type="text/css" rel="stylesheet" href="css/buddypress-theme.css">
    <link type="text/css" rel="stylesheet" href="syntax-highlighter/scripts/prettify.min.css">
    <!-- Shortcodes main stylesheet -->
    <link type="text/css" rel="stylesheet" href="shortcodes/css/prettyPhoto.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/eislideshow.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/nivo-slider.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/liteaccordion.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/flexslider.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/iconmoon.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/slicebox.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/camera.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/main.css">
    <link type="text/css" rel="stylesheet" href="shortcodes/css/media-queries.css">
    <!-- Main Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <!-- CSS media queries -->
    <link type="text/css" rel="stylesheet" href="css/media-queries.css">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>


<body data-spy="scroll" data-target=".navbar" >

	<!-- Preloader Two -->
        <div id="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>

    <!-- 
    Fixed Navigation
    ==================================== -->
    <header id="head" class="navbar-default ac-nav navbar-fixed-top opacity-header">
        <div class="container-fluid">
            <div class="mega-menu-wrapper no-beaf clearfix">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    <!-- responsive nav button2 -->
                    <button class="navbar-toggle2 hidden-xs visible-sm hidden-md hidden-lg">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                    <!-- logo -->
                    <a class="navbar-brand" href="#start">
                        <img src="img/icons/logo.png" alt="Eydia">
                    </a>
                    <!-- /logo -->
                </div>

                <div class="social-links navbar-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="current"><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->   
            </div>   
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->


	@yield('content')

	<!-- back to top -->
        <a href="javascript:;" id="go-top">
            <i class="fa fa-angle-up"></i>
            top
        </a>
        <!-- end #go-top -->

        <!--
        JavaScripts
        ========================== -->
        <!-- main jQuery -->
        <script type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.singlePageNav.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/vendor/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/jquery-validation.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/form.min.js"></script>
        <script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/jquery.multiscroll.min.js"></script>
        <script type="text/javascript" src="js/jquery-countTo.js"></script>
        <script type="text/javascript" src="js/jquery.mb.YTPlayer.min.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
        <script type="text/javascript" src="js/tweetie.min.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <!--
        <script type="text/javascript" src="js/okvideo.min.js"></script>
        -->
        <script type="text/javascript" src="js/bootstrap-progressbar.min.js"></script>
        <script type="text/javascript" src="js/jquery.circliful.min.js"></script>
        <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.js"></script>
        <script type="text/javascript" src="js/jquery.tubular.1.0.js"></script>
        <script type="text/javascript" src="js/kenburned.min.js"></script>
        <script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
        <!-- shortcode scripts -->
        <script type="text/javascript" src="shortcodes/js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="shortcodes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="shortcodes/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="shortcodes/js/jquery.slicebox.min.js"></script>
        <script type="text/javascript" src="shortcodes/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="shortcodes/js/camera.min.js"></script>
        <script type="text/javascript" src="shortcodes/js/jquery.zaccordion.min.js"></script>
        <script type="text/javascript" src="shortcodes/js/main.js"></script>
        <script type="text/javascript" src="js/jquery.prettySocial.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/jquery.zoom.min.js"></script>
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
        <script type="text/javascript" src="js/jquery.webticker.min.js"></script>
        <script type="text/javascript" src="js/jquery.timepicker.min.js"></script>
        <script type="text/javascript" src="js/selectize.min.js"></script>
        <!-- image filter -->
        <script type="text/javascript" src="js/img-filter/jquery.gray.min.js"></script>
        <!-- // image filter -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script src="syntax-highlighter/scripts/prettify.min.js"></script>
        <script type="text/javascript">$.SyntaxHighlighter.init();</script>
        <script type="text/javascript" src="js/main.js"></script>
        <!-- Contact form validation -->
        <script type="text/javascript">
            $(function(){
                //pagepiling
                if($(window).width() >= 768){
                    $('#scroll-page').pagepiling({
                        navigation: {
                            'position': 'right'
                        },
                    });
                };
                if($(window).width() <= 768){
                    $(".home-flex .slides .item-inner").addClass("fullscreen");
                    $("html").removeClass("custom-scrollbar");
                };
                $(window).resize(function() {
                    if($(window).width() <= 768){
                        $(".home-flex .slides .item-inner").addClass("fullscreen");
                        $("html").removeClass("custom-scrollbar");
                    };  
                });
                //Contact form
                $('#contact-form').validate({
                    rules: {
                        fname: {
                            required: true,
                            minlength: 2
                        },
                        lname: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true
                        }
                    },
                    messages: {
                        fname: {
                            required: "Please Enter Your First Name",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        lname: {
                            required: "Please Enter Your Last Name",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        email: {
                            required: "Please Enter Your Email"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function(form) {
                        $(form).ajaxSubmit({
                            type:"POST",
                            data: $(form).serialize(),
                            url:"mail.php",
                            success: function() {
                                $('#contact-form :input').attr('disabled', 'disabled');
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $(this).find(':input').attr('disabled', 'disabled');
                                    $(this).find('label').css('cursor','default');
                                    $('#success').fadeIn();
                                });
                            },
                            error: function() {
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $('#error').fadeIn();
                                });
                            }
                        });
                    }
                });
            });
        </script>

</body>

</html>