@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.panel-header')
                <div class="row mb-4 mt-3">
                    @if ($errors->any())
                        <div class="alert alert-danger mb-3 alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ $errors->first() }}
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session()->get('message') }}
                        </div>
                    @endIf
                    <div class="col-md-5 col-lg-7 col-xl-8 col-xxl-9 d-flex align-self-center">
                        <div class="form-group has-search w-100 position-relative">
                            <input type="text" class="form-control" placeholder="Search marriage celebrants"
                                onkeyup="searchWithoutTabs('/celebrant',this.value, 'celebrantListing', '1')">
                            <span class="fa fa-search form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="align-self-center col-md-7 col-lg-5 col-xl-4 col-xxl-3 d-grid mt-3 mt-md-0">
                        <a class="theme-btn primary-btn d-flex justify-content-center" href="/celebrant/create">
                            <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                            Add new marriage celebrant
                        </a>
                    </div>
                </div>
                <div class="table-responsive celebrantListing">
                    @include('elements.admin.celebrant.listing')
                </div>
            </div>
        </div>
    </div>
    @include('elements.admin.referral.referral-reason-sidebar')
@endsection
