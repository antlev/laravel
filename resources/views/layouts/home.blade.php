<html>
    <head>
        <title>@yield('title')</title>
        @yield('header')
    </head>
    @yield('nav')
    <nav class="navbar navbar-inverse">
        <ul class="nav nav-tabs">
            <li><a href="#">Home</a></li>
            <li><a href="#">Classement</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">New</a></li>
        </ul>
    </nav>
    <body>
        @yield('body')
        <div class="container">
            @yield('content')
            <div class="row">
                <div class="col-sm-4">
                    <h3>Classement</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                    <h3>New</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                    <h3>Forum</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
            </div>
            <div class="jumbotron">
                <h1>Page de Présentation</h1>
                <p>Présenter le site de la Maison des ligue de lorraine</p> 
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Classement</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                    <h3>New</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                    <h3>Forum</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
            </div>
        </div>
    </body>
</html>
@yield('footer')
<div class="container">
   <div class="panel panel-primary">Je suis à la fin de ma page</div>
</div>
@yield('css')
@yield('javascript')