<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    @extends('admin.layouts.components.head')

</head>

<body>
<div id="app">
    <div id="main">
        <div class="page-content">

            @yield('content')

        </div>
    </div>
</div>

@include('admin.layouts.components.foot')

</body>

</html>
