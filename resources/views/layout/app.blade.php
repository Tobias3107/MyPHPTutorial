<!DOCTYPE html>
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="KaTo">
        
        <!-- Local CSS -->
        <link href="{!! asset('/css/app.css') !!}" rel="stylesheet" type="text/css" >
        

        <!-- Extern CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- JavaScript -->
        <script src="{!! asset('/js/app.js') !!}"></script>
        <script src="{{ asset('/js/components/custom.js')}}"></script>


        <title>@yield('title', 'MyPHPTutorial')</title>
    </head> 
    <body class="theme-dark shadow-sm">
    <header>
        <nav class="navbar collpase navbar-expand-lg navbar-dark bg-dark w-100"> 
            <ul class="navbar-nav col-2">
                <li class="nav-item @if($navbar == 'ACP') active @endif">
                    <a class="nav-link" href="/admin"> ACP
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-center col-7">
                <li class="nav-item @if($navbar == 'home') active @endif">
                    <a class="nav-link" href="/"> Home
                    </a>
                </li>
                <li class="nav-item @if($navbar == 'dokumentation') active @endif">
                    <a class="nav-link" href="/dokumentation/">Dokumentation</a>
                </li>
                <li class="nav-item @if($navbar == 'kurs') active @endif">
                    <a class="nav-link" href="/kurs/">Kurs</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-search w-100 col-3">
                <li class="nav-item ">
                    <div class="input-group ">
                        <input type="text" class="form-control " placeholder="Search">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main class="py-4" role="main">
        @yield('content')
    </main>

    <footer class="footer py-3">
        <div class="col-4">
            <span>Created From KaTo</span>
        </div>
        <div class="container col-4">
            <a href="/impressum">Impressum</a>
        </div>
    </footer>
    </body>
</html>