<html>
<head>
    <title>Admin</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/admin.css') }}">
</head>
<body>
<div class="container">
    <header>
        <hgroup class="logo span-6">

        </hgroup>
        <nav class="session-nav span-6">
            <ul>
                <li class="show-menu">
                    <a href="">
                        <span class="ion-navicon-round"></span>
                    </a>
                </li>
                <li class="logout">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">
                            <span class="fa fa-sign-out"></span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
</div>

<nav class="application-nav">
    <div class="container">
        <ul>
            <li><a href="{{ route('admin.home') }}"><span class="fa fa-home"></span><span class="text">Home page</span></a></li>
            <li><a href="{{ route('admin.about') }}"><span class="fa fa-home"></span><span class="text">About us</span></a></li>
            <li><a href="{{ route('admin.products') }}"><span class="fa fa-home"></span><span class="text">Nouveau Produit</span></a></li>
            <li><a href="{{ route('admin.contact') }}"><span class="fa fa-home"></span><span class="text">Contact</span></a></li>
        </ul>
    </div>
</nav>
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/admin/admin.js') }}"></script>
</body>
</html>