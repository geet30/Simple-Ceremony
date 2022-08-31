@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.panel-header')
                <div class="card panel-card">
                    <div class="card-body">
                        <h1 class="h4 netural-100 mb-4">My account</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="needs-validation" method="POST" novalidate
                                    action="{{ route('account.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <label for="InputName" class="form-label small-text2">Your name</label>
                                            <input type="text" value="{{ auth()->user()->name }}"
                                                class="form-control body-1 netural-100" name="name" id="InputName"
                                                required>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>
                                                Name is required</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <label for="InputName" class="form-label small-text2">Email address</label>
                                            <input type="email" value="{{ auth()->user()->email }}"
                                                class="form-control body-1 netural-100 disabled" name="email"
                                                id="InputName" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <label for="InputName" class="form-label small-text2">Password</label>
                                            <input type="password" value="************"
                                                class="form-control body-1 netural-100" id="InputName" required="">
                                        </div>
                                        <div class="col-md-4 col-lg-6 col-xl-5 col-xxl-4 mb-4 align-self-center">
                                            <label for="InputName"
                                                class="form-label small-text2 mb-2 d-none d-md-inline-block"></label>
                                            <a href="#" class="button-1 turquoise-100 faq-link d-block"
                                                data-bs-toggle="offcanvas"
                                                data-bs-target="#admin_change_password_sidebar">Change password</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <input type="submit" value="Save"
                                                class="d-inline-flex theme-btn primary-btn justify-content-start sticky-bottom">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('elements.reset-password-sidebar')
@endsection
