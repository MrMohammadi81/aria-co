@php
use App\Config;
$config = Config::URL;
@endphp
<html dir="ltr" lang="en">

<head>
    @yield('head')
</head>

<body id="app-container" class="rtl rounded menu-default">

    @yield('header')
    @yield('menu')
    @yield('content')

    
    @yield('script')
    

</body>

</html>
