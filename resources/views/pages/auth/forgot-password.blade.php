@extends('admin.layouts.headless')

@section('container-id', 'auth')

@section('css')

    <link rel="stylesheet" href="{{ asset('admin/css/pages/auth.css') }}">

@endsection

@section('content')

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="{{ route('index') }}"><img src="{{ config('app.logo') }}" alt="{{ config('app.name') }}"></a>
                </div>
                <h1 class="auth-title">{{ __('auth.page.forgot_password.title') }}</h1>
                <p class="auth-subtitle mb-5">
                    {{ __('auth.page.forgot_password.subtitle') }}
                </p>

                <form action="" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="{{ __('auth.fields.email') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                        {{ __('auth.page.forgot_password.button') }}
                    </button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">
                        {{ __('auth.page.forgot_password.remember_account') }}
                        <a href="{{ route('login') }}" class="font-bold">{{ __('auth.page.login.title') }}</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right"></div>
        </div>
    </div>

@endsection
