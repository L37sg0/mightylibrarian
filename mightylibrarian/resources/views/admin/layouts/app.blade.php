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
<body class="d-flex h-100 text-center text-bg-light">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="container-lg bg-light py-3 my-2">
            <div class="text-center">
                @include('admin.layouts.components.header')
            </div>
            <div class="container-fluid">
                @include('admin.layouts.components.navbar')
            </div>
            <div class="container-fluid">
                @include('admin.layouts.components.messages')
            </div>
        </header>
        <main class="container-lg bg-light py-3 my-2">
            @yield('content')
        </main>
        <footer class="container-lg bg-light py-3 my-2">
            @include('admin.layouts.components.footer')
        </footer>
    </div>
</body>
</html>
