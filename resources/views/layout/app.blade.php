<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">


    <!-- GLOBAL CSS -->
    @include('layout.components.css')

    <!-- CUSTOM CSS -->
    @yield('custom_css')
    
</head>

<body>
    <!-- HEADER -->
    @include('layout.components.header')
    @include('layout.components.header_mobile')

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    @include('layout.components.footer')

    <!-- SCRIPT -->
    @include('layout.components.script')
    
    <!-- CUSTOM JS -->
    @yield('custom_js')
</body>

</html>