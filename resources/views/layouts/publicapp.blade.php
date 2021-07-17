<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DewiJipang</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Staatliches&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-4">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mr-5 ">
                            <li class="nav-item mx-3">
                                <a class="nvbarlink" href="{{route('homeP')}}"><h2>Home</h2></a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nvbarlink" href="{{route('wisedu')}}"><h2>Wisata Edukasi</h2></a>
                            </li>
                    </ul>
                    <ul class="navbar-nav mr-1 ml-1">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('homeP')}}"><img src="/img/unnamed.jpg" width="160" height="80" alt="..."></a>
                            </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-5 mr-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                                <a class="nvbarlink mx-3" href="{{route('krjn')}}"><h2>Kerajinan</h2></a>
                            </li>
                            <li class="nav-item">
                                <a class="nvbarlink mx-3" href="{{route('tentang')}}"><h2>Tentang jipangan</h2></a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-1">
            @yield('content')
        </main>
    
        <div class="container col-12">
            
            <img src="/img/unnamed.jpg" width="160" height="80" class="float-left my-4" alt="...">
            <img src="/img/ig.png" width="60" height="60" class="float-right my-4" alt="...">
            <img src="/img/tiktok.png" width="110" height="60" class="float-right my-4" alt="...">
            
        </div>
    </div>
</body>
</html>
