<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        @extends('admin.layouts.components.head')

        @stack('styles')

    </head>

    <body style="margin-bottom: 0;">

        @include('admin.layouts.components.alerts')

        <div id="@yield('container-id')">
            @yield('content')
        </div>

    @include('admin.layouts.components.foot')

    @stack('scripts')

    </body>

</html>
