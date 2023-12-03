<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Vie onepage themesforest" />
    <meta name="description" content="Vie - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/themes/img/favicon.ico') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('/themes/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('/themes/css/style.css') }}" />

</head>

<body>

    <div class="loading">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include('template.header')

    @yield('content')

    @include('template.footer')
    <!-- jQuery -->

    <script src="{{ asset('/themes/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('/themes/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('/themes/js/plugins.js') }}"></script>

    <!-- animated.headline -->
    <script src="{{ asset('/themes/js/animated.headline.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('/themes/js/scripts.js') }}"></script>
</body>

</html>
