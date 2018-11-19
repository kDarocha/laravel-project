<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Arizona</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicons/favicon.png') }}" type="image/png">
    <link rel="icon" sizes="32x32" href="{{ asset('images/favicons/favicon-32.png') }}" type="image/png">
    <link rel="icon" sizes="64x64" href="{{ asset('images/favicons/favicon-64.png') }}" type="image/png">
    <link rel="icon" sizes="96x96" href="{{ asset('images/favicons/favicon-96.png') }}" type="image/png">
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-progressbar-3.3.4.css') }}"/>
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('style')
</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- BEGIN MENU -->
<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="{{ route('home') }}"><img width="100%" src="{{ asset('images/logo.png') }}"></a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo.png') }}" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="{{ (Request::path() == Lang::locale()) || (Request::path() == '/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ (Request::path() == Lang::locale() . '/about-us') || (Request::path() == 'about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">{{ trans('customlang.about_us') }}</a></li>
                    <li class="{{ (Request::path() == Lang::locale() . '/products') || (Request::path() == 'products') ? 'active' : '' }}"><a href="{{ route('products') }}">{{ trans('customlang.products') }}</a></li>
                    <li class="{{ (Request::path() == Lang::locale() . '/contact') || (Request::path() == 'contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">{{ trans('customlang.contact') }}</a></li>
                    <li href="#" id="flags" style="display: inline-block;">
                        <a href="{{ url('fr') }}" style="width: 45px;"><img width="100%" src="{{ asset('images/flags/fr.png') }}" alt=""></a>
                        <a href="{{ url('en') }}" style="width: 45px;"><img width="100%" src="{{ asset('images/flags/en.png') }}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- END MENU -->

@yield('content')

<!-- Start footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <p>PEW GROUP SH.P.K</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <a href="index.html"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<!-- counter -->
<script src="{{ asset('js/waypoints.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
<!-- progress bar   -->
<script type="text/javascript" src="{{ asset('js/bootstrap-progressbar.js') }}"></script>


<!-- Custom js -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

@yield('script')

</body>
</html>
