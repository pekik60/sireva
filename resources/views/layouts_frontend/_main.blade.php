<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Mag - &amp; WARA-WARA</title>
   
    @yield('extra_style')
    @include('layouts_frontend._css')
    
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
   @include('layouts_frontend._nav')
   @yield('carousel')
   @yield('content')

   @include('layouts_frontend._footer')
   @include('layouts_frontend._script')
   @yield('extra_scripts')
</body>
</html>