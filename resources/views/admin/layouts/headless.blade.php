<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        @extends('admin.layouts.components.head')

        @yield('css')

    </head>

    <body style="margin-bottom: 0;">

        @include('admin.layouts.components.alerts')

        <div id="@yield('container-id')">
            @yield('content')
        </div>

    @include('admin.layouts.components.foot')

    @yield('js')

    </body>

</html>
