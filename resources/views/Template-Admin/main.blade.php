<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template-Admin.head')
    <title>@yield('title')</title>
</head>
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75">
        @include('Template-Admin.sidebar')

        @yield('content')
    </div>
    @include('Template-Admin.footer')

</body>
</html>
