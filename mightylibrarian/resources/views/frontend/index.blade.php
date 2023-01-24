<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper-2.11.6.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.3.min.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <div class="fixed-top">
        {{--        @include('components.navbar')--}}
    </div>
    @include('frontend.login')
    @include('frontend.components.header')
</header>
<body>
<div class="content">
    @yield('content')
</div>
</body>
<footer>
    @include('frontend.components.footer')
</footer>
</html>
