<!doctype html>
<html lang="en">

<head>
    <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="{{ route('admin.home') }}" class="{{ Request::path() == 'admin' ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Home page</span></a></li>
                    <li><a href="{{ route('admin.about') }}" class="{{ Request::path() == 'admin/about' ? 'active' : '' }}"><i class="lnr lnr-code"></i> <span>A propos</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Produits</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin.products.create') }}">Nouveau produit</a></li>
                            <li><a href="{{ route('admin.products.list') }}">Liste des produits</a></li>
                            <li><a href="{{ route('admin.products.trash') }}">Poubelle</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('admin.contact') }}" class=""><i class="lnr lnr-cog"></i> <span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('js/klorofil-common.js') }}"></script>
</body>

</html>
