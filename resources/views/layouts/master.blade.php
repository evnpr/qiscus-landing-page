<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.components.head')
</head>
<body>
    @include('layouts.components.nav')
    @yield('main-content')
    
    @include('layouts.components.footer')    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/vendor/slick.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
</body>
</html>