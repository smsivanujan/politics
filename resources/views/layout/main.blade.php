<!DOCTYPE html>
<html lang="en">

<head>
    <title>politics</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}" type="text/css" media="screen">
</head>

<body id="page1">
    <div class="extra">
        <!--==============================header=================================-->
        <header>
            <div class="main">
                <div class="border-top">
                    <div class="wrapper">
                        <h1><a href="/">Politics</a></h1>
                        <nav>
                            <ul class="menu">
                                <li><a class="@yield('home')" href="/">Home</a></li>
                                <li><a class="@yield('services')" href="/services">Services</a></li>
                                <li><a class="@yield('areas')"href="/areas">Areas of Practice</a></li>
                                <li><a class="@yield('about')" href="/about">About</a></li>
                                <li class="last-item"><a class="@yield('contacts')" href="/contacts">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="slider-bg">
                    <div class="slider">
                        <div class="banner"> <strong class="title-1">REALIZE</strong> <span class="text-1">your
                                constitutional right for qualified</span> <a class="link" href="#">legal
                                help</a> </div>
                    </div>
                </div>
            </div>
        </header>

        <!--==============================content================================-->
        @yield('content')
    </div>
    <!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="footer-bg">
                <div class="aligncenter">Copyright &copy; {{ date('Y') }} <a href="#">Domain Name</a> All Rights Reserved<br>
                    Design by <a target="_blank" href="#">sms</a></div>
            </div>
        </div>
    </footer>
</body>

</html>
