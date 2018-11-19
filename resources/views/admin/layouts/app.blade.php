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
    <!-- Include external CSS. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    @yield('style')
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
                        <a href="#subPages" data-toggle="collapse" class="collapsed {{ Request::is('admin/products' . '*') ? 'active' :  '' }}"><i class="lnr lnr-file-empty"></i> <span>Produits</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse {{ Request::is('admin/products' . '*') ? 'in' :  '' }}">
                            <ul class="nav">
                                <li><a class="{{ Request::path() == 'admin/products/create' ? 'active' : '' }}" href="{{ route('admin.products.create') }}">Nouveau produit</a></li>
                                <li><a class="{{ Request::path() == 'admin/products' ? 'active' : '' }}" href="{{ route('admin.products') }}">Liste des produits</a></li>
                                <li><a class="{{ Request::path() == 'admin/products/trashed' ? 'active' : '' }}" href="{{ route('admin.products.trashed') }}">Poubelle</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{ route('admin.contact') }}" class="{{ Request::path() == 'admin/contact' ? 'active' : '' }}"><i class="lnr lnr-cog"></i> <span>Contact</span></a></li>
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
</div>
<!-- END WRAPPER -->
<!-- Javascript -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('js/klorofil-common.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/js/froala_editor.pkgd.min.js"></script>

@yield('script')
</body>

</html>
