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
<body>
    <header>
        <div class="text-center">
            @include('admin.layouts.components.header')
        </div>
        <div class="container-fluid">
            @include('admin.layouts.components.navbar')
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('admin.layouts.components.footer')
    </footer>
</body>
</html>
