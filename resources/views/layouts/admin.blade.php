<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('includes.style')
    @stack('addon-style')
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('includes.sidebar')
        <div class="body-wrapper">
            @include('sweetalert::alert')
            @include('includes.navbar')
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('includes.footer')
        </div>
    </div>
    @include('includes.script')
    @stack('addon-script')
</body>
</html>
