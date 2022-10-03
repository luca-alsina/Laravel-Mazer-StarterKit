<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @extends('admin.layouts.components.head')

    @stack('styles')

</head>

<body>

@include('admin.layouts.components.alerts')

    <div id="app">
        <div id="sidebar" class="active">
            @include('admin.layouts.components.sidebar')
        </div>
        <div id="main">

            @include('admin.layouts.components.header')

            <div class="page-heading">
                <h3>@yield('title', 'Admin Dashboard')</h3>
            </div>
            <div class="page-content">

                @yield('content')

            </div>

            @include('admin.layouts.components.footer')
        </div>
    </div>

@include('admin.layouts.components.foot')

@stack('scripts')

</body>

</html>
