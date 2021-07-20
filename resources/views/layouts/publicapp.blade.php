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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
                            <!-- <li class="nav-item mx-3">
                                <a class="nvbarlink" href="{{route('wisedu')}}"><h2></h2></a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <h2>
                                <a id="navbarDropdown" class="nvbarlink dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Fasilitas
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="nvbarlink" href="{{route('wisedu')}}">
                                       <h5>Wisata Edukasi</h5> 
                                    </a>
                                    <a class="nvbarlink" href="{{route('krjn')}}">
                                       <h5>Kerajinan</h5> 
                                    </a>
                                    <a class="nvbarlink" href="{{route('hmsty')}}">
                                       <h5>Home Stay</h5> 
                                    </a>
                                </div>
                                
                                </h2>
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
                                <a class="nvbarlink mx-3" href="{{route('tentang')}}"><h2>Tentang jipangan</h2></a>
                            </li>
                            <li class="nav-item">
                                <a class="nvbarlink mx-3" href="{{route('login')}}"><h2>Admin</h2></a>
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
            <a href="https://www.instagram.com/kipasbambu_dewijipang/"><h1 class="display-4"><i class="bi bi-instagram float-right my-4 ml-4"></i></h1></a>
            <a href="https://www.facebook.com/profile.php?id=100070385120987"><h1 class="display-4"><i class="bi bi-facebook float-right my-4"></i></h1></a>
            <a href="https://www.tiktok.com/@dewi_jipang?lang=en"><img src="/img/tiktok.png" width="110" height="60" class="float-right my-4" alt="..."></a>
            
        </div>
    </div>
</body>
</html>
