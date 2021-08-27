<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Abdullah Un Noman | UI/UX Expert | Web Designer | Saas Designer ')</title>
    <meta name="theme-color" content="#0C0F1C" />
    <link rel="shortcut icon" href="{{ asset ('static/image/Logo2x.png')}}" />
    <link rel="apple-touch-icon" href="{{ asset ('static/image/Logo2x.png')}}" />
    <!-- Scripts -->
    <meta name="description" content="@yield('description','I’m an experienced Product Designer and Team Player. Last Five Years I’ve been working on dozens of website design, Mobile App and WebApp projects and many of them are successful nowadays.')">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preload" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    @yield('css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('static/css/custom.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body>

    <div id="app">
        @include('inc.nav') @yield('content') @include('inc.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>

    <script src="{{ asset('static/js/custom.js') }}"></script>

    <script>
        AOS.init();
    </script>
    @yield('js')
</body>

</html>