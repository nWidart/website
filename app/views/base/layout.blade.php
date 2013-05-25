<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
        Bienvenue sur Laravel France
        @stop
    </title>
    <script src="js/modernizr.js"></script>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="@yield('page_class')">

    <header>
        <nav>
            <h1 class="title">
                <a href="/">Laravel France</a>
            </h1>

            <ul>
                <li><a class="active" href="#"><i class="icon-home"></i>Accueil</a></li>
                <li><a href="#"><i class="icon-book"></i> Documentation</a></li>
                <li>
                    <a href="#"><i class="icon-group"></i> Communauté</a>
                    <ul>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">IRC</a></li>
                    </ul>
                </li>
                <li><a href="#">Github</a></li>
                <li><a href="#"><i class="icon-envelope"></i> Contact</a></li>
                <li><a href="#"><i class="icon-download-alt icon-white"></i> Telecharger</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>

    <div id="page" class="container">
        @yield('content')

        <footer>
            @yield('footer')
        </footer>
    </div><!--/.container-->
</body>
</html>
