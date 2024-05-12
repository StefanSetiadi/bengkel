<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    @include('component.head')
</head>
<body>
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    @include('component.header')

    @yield('content')

    @include('component.footer')

    @include('component.js')

</body>
</html>
