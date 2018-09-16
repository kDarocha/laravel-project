<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/admin.css') }}">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
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
            <li class=""><a href="/admin"><span class="fa fa-home"></span><span class="text">Nouveau Produit</span></a></li>
        </ul>
    </div>
</nav>
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/admin/admin.js') }}"></script>
</body>
</html>