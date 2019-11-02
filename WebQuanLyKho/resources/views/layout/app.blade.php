<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('assets/vendor_components/jquery/dist/jquery.js')}}"></script>

    <title>CloudStock | Login</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('css/main/bootstrap-extend.css')}}">
    

    <!-- rickshaw-->
    <link href="{{asset('assets/vendor_components/rickshaw-master/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
    

    <!-- Vector CSS -->
    <link href="{{asset('assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    

    <!-- Morris charts -->
    <link rel="stylesheet" href="{{asset('css/main/master_style.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body class="hold-transition bg-img" style="background: url({{asset('img/7-1.jpg')}});" data-overlay="4">
    
       
            <div class="container h-p100">
                <div class="row align-items-center justify-content-md-center h-p100">
                    
                
              <!--   <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
          <!--       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

<!--                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto">
                     
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Logaain') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> -->
                @yield('content')
                </div>
            </div>


    
        <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('js/main/demo.js')}}"></script>
    <script src="{{asset('assets/vendor_components/formatter/formatter.js')}}"></script>
    <script src="{{asset('assets/vendor_components/formatter/jquery.formatter.js')}}"></script>
    <script src="{{asset('js/main/pages/formatter.js')}}"></script>
    <script src="{{asset('js/main/pages/validation.js')}}"></script>
    <script src="{{asset('js/main/valitation.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
</body>
</html>
