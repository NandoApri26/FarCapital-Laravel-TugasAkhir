<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template-User.head')
    <title>@yield('title')</title>
</head>
<body>

    <div class="container">
        @include('Template-User.navbar')
        @yield('content')
    </div>
    
    @include('Template-User.footer')
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.js')}}"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>
</html>