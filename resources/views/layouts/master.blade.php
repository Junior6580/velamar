<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Comercializadora velamar |
        {{ isset($pageTitle) ? $pageTitle : config('app.name', 'Laravel') }}</title>
    @livewireStyles
    @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.app')
        <div class="content-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    @livewireScripts
    @include('layouts.scripts')
</body>
</html>
