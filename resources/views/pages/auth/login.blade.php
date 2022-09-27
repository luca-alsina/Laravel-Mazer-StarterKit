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
                <h1 class="auth-title">{{ __('auth.page.login.title') }}</h1>
                <p class="auth-subtitle mb-5">{{ __('auth.page.login.subtitle') }}</p>

                <form action="" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-xl" placeholder="{{ __('auth.fields.email') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" id="password" class="form-control form-control-xl" placeholder="{{ __('auth.fields.password') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            {{ __('auth.fields.remember') }}
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">{{ __('auth.page.login.not_registered') }} <a href="{{ route('register') }}" class="font-bold">Sign
                            up</a>.</p>
                    <p><a class="font-bold" href="{{ route('password.request') }}">{{ __('auth.page.login.forgot_password') }}</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
@endsection
