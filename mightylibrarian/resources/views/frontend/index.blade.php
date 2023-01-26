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
    <div class="container-fluid">
        @include('frontend.login')
    </div>
    <div class="container-fluid">
        @include('frontend.components.header')
    </div>
    <div class="container-fluid">
        @include('admin.layouts.components.messages')
    </div>
</header>
<body>
<main class="container-lg bg-light py-3 my-2">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
</body>
<footer class="container-lg bg-light py-3 my-2">
    @include('admin.layouts.components.footer')
</footer>
</html>
