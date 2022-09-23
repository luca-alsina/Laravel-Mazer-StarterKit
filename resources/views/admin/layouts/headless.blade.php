<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    @extends('admin.layouts.components.head')

</head>

<body>
    <div id="@yield('container-id')">
        @yield('content')
    </div>

@include('admin.layouts.components.foot')

</body>

</html>
