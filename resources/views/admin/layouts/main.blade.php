<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    @extends('admin.layouts.components.head')

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

</body>

</html>
