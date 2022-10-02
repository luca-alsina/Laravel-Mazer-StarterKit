@extends('admin.layouts.main')

@section('title', __('admin.pages.dashboard.title'))

@section('content')
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
{{--
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
--}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">{{ __('admin.pages.dashboard.users') }}</h6>
                                    <h6 class="font-extrabold mb-0">{{ \App\Models\User::count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
--}}
{{--
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
--}}
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://ui-avatars.com/api/?rounded=true&bold=true&name=@if(!empty(Auth::user()->first_name) || !empty(Auth::user()->last_name)) {{ Auth::user()->first_name .'+'. Auth::user()->last_name }} @else {{ Auth::user()->username }} @endif&background=57CAEB&color=435EBE" alt="@if(!empty(Auth::user()->first_name) || !empty(Auth::user()->last_name)) {{ Auth::user()->first_name .'+'. Auth::user()->last_name }} @else {{ Auth::user()->username }} @endif">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">@if(!empty(Auth::user()->first_name) || !empty(Auth::user()->last_name)) {{ Auth::user()->first_name .' '. Auth::user()->last_name }} @else {{ Auth::user()->email }} @endif</h5>
                            <h6 class="text-muted mb-0">{{ '@'.Auth::user()->username }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
