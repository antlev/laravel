<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
           Toto is back !!!!
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>