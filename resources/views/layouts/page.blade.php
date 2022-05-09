<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KWWFDH6');</script>
    <!-- End Google Tag Manager -->

    <title>@hasSection('seo_title')@yield('seo_title')@else{{ settings()->get("page_title") }} - @yield('meta_title')@endif</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@hasSection('seo_description')@yield('seo_description')@else{{ settings()->get("page_description") }}@endif">
    <meta name="robots" content="@hasSection('seo_robots')@yield('seo_robots')@else{{ settings()->get("page_robots") }}@endif">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    @hasSection('opengraph')@yield('opengraph')@endif
    @hasSection('schema')@yield('schema')@endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

    @stack('style')

</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWWFDH6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="pagecontent">
    @include('layouts.partials.header')

    @yield('pageheader')

    <div class="page-holder">

    <div id="page">
        @yield('content')
    </div>

    @include('layouts.partials.footer')

    <!-- end of page-holder -->
    </div>
</div>

@include('layouts.partials.cookies')

@include('inline.modal')

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.js') }}" charset="utf-8"></script>

@stack('scripts')

<script type="text/javascript">
    $(document).ready(function(){

    });
</script>
</body>
</html>
