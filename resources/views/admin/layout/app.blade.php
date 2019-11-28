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
                <li class="nav-item">
                    <a class="nav-link" href="/"> Home
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-center col-7">
                <li class="nav-item @if($navbar == 'dashboard') active @endif">
                    <a class="nav-link" href="/admin"> Dashboard
                    </a>
                </li>
                <li class="nav-item @if($navbar == 'doku') active @endif">
                    <a class="nav-link" href="/admin/dokumentation"> Dokumentation
                    </a>
                </li>
                <li class="nav-item @if($navbar == 'kurs') active @endif">
                    <a class="nav-link" href="/admin/kurs"> Kurs
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="py-4" role="main">
        @yield('content')
    </main>

    </body>
</html>