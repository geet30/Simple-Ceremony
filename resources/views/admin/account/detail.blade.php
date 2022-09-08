@extends('layouts.panels')
@section('page-name') {{ auth()->user()->name }} @stop
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
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        {{ $errors->first() }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif
                                @if (session()->has('message'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        {{ session()->get('message') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    </div>
                                @endIf
                                <form class="needs-validation loader_class" method="POST" novalidate
                                    action="{{ route('account.store') }}">
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <label for="InputName" class="form-label small-text2">Your name</label>
                                            <input type="text" value="{{ auth()->user()->name }}"
                                                class="form-control body-1 netural-100" name="name" readonly
                                                id="InputName" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <label for="InputName" class="form-label small-text2">Email address</label>
                                            <input type="email" value="{{ auth()->user()->email }}"
                                                class="form-control body-1 netural-100 disabled" name="email"
                                                id="InputName" required readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <label for="InputName" class="form-label small-text2">Password</label>
                                            <input type="password" value="************"
                                                class="form-control body-1 netural-100" id="InputName" required=""
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6 col-xl-5 col-xxl-4 mb-4">
                                            <a href="/account/{{ auth()->user()->id }}/edit"
                                                class="theme-btn primary-btn d-inline-block">
                                                <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg"
                                                    alt="Edit"> Edit information</a>
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
@endsection
