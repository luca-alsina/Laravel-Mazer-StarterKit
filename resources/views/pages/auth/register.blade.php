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
                <h1 class="auth-title">Sign Up</h1>
                <p class="auth-subtitle mb-5">
                    {{ __('auth.page.register.subtitle') }}
                </p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" name="email" class="form-control form-control-xl" placeholder="{{ __('auth.fields.email') }}" value="{{ old('email') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="username" class="form-control form-control-xl" placeholder="{{ __('auth.fields.username') }}" value="{{ old('username') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    @if(config('auth.registration.fields.first_name.enabled'))
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="first_name" class="form-control form-control-xl" placeholder="{{ __('auth.fields.first_name') }}" value="{{ old('first_name') }}">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                    @endif

                    @if(config('auth.registration.fields.last_name.enabled'))
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="last_name" class="form-control form-control-xl" placeholder="{{ __('auth.fields.last_name') }}" value="{{ old('last_name') }}">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                    @endif

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" class="form-control form-control-xl" placeholder="{{ __('auth.fields.password') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password_confirmation" class="form-control form-control-xl" placeholder="{{ __('auth.fields.password_confirm') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                        {{ __('auth.page.register.button') }}
                    </button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">
                        {{ __('auth.page.register.already_have_account') }}
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
