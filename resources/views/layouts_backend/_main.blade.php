<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>
    @include('layouts_backend._css')
    @yield('extra_style')
</head>
<body class="navbar-top">
    @include('layouts_backend._nav')
    <div class="page-content"> 
       @include('layouts_backend._sidebar')
       <div class="content-wrapper">
            @yield('content')
            @include('layouts_backend._footer')
       </div>
    </div>
    @include('layouts_backend._script')
    @yield('extra_script')
</body>
</html>