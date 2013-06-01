<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
        Bienvenue sur Laravel France
        @stop
    </title>
    <script src="/js/modernizr.js"></script>
    <script src="/js/zepto.min.js"></script>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="@yield('page_class') preload">

    <header>
        <nav>
            <h1 class="title">
                <a href="/">Laravel France</a>
            </h1>

            <ul>
                <li @if(Request::is('/'))class='active'@endif><a href="/"><i class="icon-home"></i>Accueil</a></li>
                <li><a href="#"><i class="icon-book"></i> Documentation</a></li>
                <li>
                    <a href="#"><i class="icon-group"></i> Communauté</a>
                    <ul>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">IRC</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="icon-github-sign"></i> Github</a></li>
                <li @if(Request::is('contact*'))class='active'@endif><a href="{{ URL::action('Lvlfr\Website\Controller\ContactController@getIndex') }}"><i class="icon-envelope"></i> Contact</a></li>
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

<script>
$(document).ready(function() {
    $('body').removeClass('preload');
});
</script>
