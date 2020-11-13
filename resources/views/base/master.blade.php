<html>
    <head>
        <title>@yield('title','Home')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/apple-store.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('navbar')
            @include('base.navbar')
        @show
        @yield('content')
        @section('footer')
            @include('base.footer')
        @show
    </body>
</html>