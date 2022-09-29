<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        @extends('admin.layouts.components.head')

        @yield('css')

    </head>

    <body>

        <div class="position-relative right">
            <div class="alert alert-light-danger color-danger position-relative right">
                <i class="bi bi-exclamation-circle"></i> This is danger
                alert.
            </div>
        </div>

        <div id="@yield('container-id')">
            @yield('content')
        </div>

    @include('admin.layouts.components.foot')

    @yield('js')

    </body>

</html>
