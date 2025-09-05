<html>
    <head>
        <title>My App</title>
    </head>
    <body>
        @include('header')
        <div class="container">
            @yield('content')
        </div>
        @include('footer')
    </body>
</html>