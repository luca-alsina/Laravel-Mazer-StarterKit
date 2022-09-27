<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        @extends('admin.layouts.components.head')

        @yield('css')

    </head>

    <body>
        <div id="@yield('container-id')">
            @yield('content')
        </div>

    @include('admin.layouts.components.foot')

    @yield('js')

    </body>

</html>
