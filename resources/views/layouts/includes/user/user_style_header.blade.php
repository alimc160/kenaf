<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kenaf - @yield('title')</title>
    <meta name="description" content="Kenaf — This is the best dashboard" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta
        name="Kenaf"
        content="Kenaf — This is the best dashboard"
    />
    <meta name="apple-mobile-web-app-title" content="Kenaf Admin Dashboard" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <!-- <link rel="stylesheet" href="css/apexcharts.css" /> -->
    <!-- <link rel="stylesheet" href="css/tippy/tippy.css" /> -->
    <link rel="stylesheet" href="{{asset('assets/css/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}" />
    <!-- <link rel="stylesheet" href="css/quill/quill.snow.css" />
    <link rel="stylesheet" href="css/quill/quill.core.css" />
    <link rel="stylesheet" href="css/filepond.min.css" />
    <link rel="stylesheet" href="css/filepond-plugin-image-preview.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" /> -->
    
    <input type="hidden" value="{{ session('token') }}" name="api_token"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link
        rel="apple-touch-icon"
        sizes="57x57"
        href="{{asset('assets/img/content/favicons/apple-icon-57x57.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="60x60"
        href="{{asset('assets/img/content/favicons/apple-icon-60x60.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="72x72"
        href="{{asset('assets/img/content/favicons/apple-icon-72x72.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{asset('assets/img/content/favicons/apple-icon-76x76.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="114x114"
        href="{{asset('assets/img/content/favicons/apple-icon-114x114.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="120x120"
        href="{{asset('assets/img/content/favicons/apple-icon-120x120.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="144x144"
        href="{{asset('assets/img/content/favicons/apple-icon-144x144.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="{{asset('assets/img/content/favicons/apple-icon-152x152.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{asset('assets/img/content/favicons/apple-icon-180x180.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="192x192"
        href="{{asset('assets/img/content/favicons/android-icon-192x192.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{asset('assets/img/content/favicons/favicon-32x32.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="96x96"
        href="{{asset('assets/img/content/favicons/favicon-96x96.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{asset('assets/img/content/favicons/favicon-16x16.png')}}"
    />
    <link rel="manifest" href="{{asset('assets/img/content/favicons/manifest.json')}}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    @yield('css')
</head>