@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.common.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.common.panel-header')
                <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                        <button class="nav-link w-100 active" id="all-records-tab" data-bs-toggle="pill"
                            data-bs-target="#all-records" type="button" role="tab" aria-controls="all-ads-on"
                            aria-selected="true">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/message-icon.svg" alt="All enquiries">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $dataArray['all_enquries']->total() }}</h3>
                                    <p class="subheader-2">All enquiries</p>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                        <button class="nav-link w-100" id="follow-up-tab" data-bs-toggle="pill" data-bs-target="#follow-up"
                            type="button" role="tab" aria-controls="follow-up" aria-selected="false">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/timer-icon.svg" alt="Follow up">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $dataArray['follow_enquries']->total() }}</h3>
                                    <p class="subheader-2">Follow up</p>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                        <button class="nav-link w-100" id="booked-tab" data-bs-toggle="pill" data-bs-target="#booked"
                            type="button" role="tab" aria-controls="booked" aria-selected="false">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/hands.svg" alt="">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $dataArray['booked_enquries']->total() }}</h3>
                                    <p class="subheader-2">Booked</p>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                        <button class="nav-link w-100" id="no-interest-tab" data-bs-toggle="pill"
                            data-bs-target="#no-interest" type="button" role="tab" aria-controls="no-interest"
                            aria-selected="false">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/cross.svg" alt="">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $dataArray['noInterest_enquries']->total() }}</h3>
                                    <p class="subheader-2">No Interest</p>
                                </div>
                            </div>
                        </button>
                    </li>
                </ul>
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
                <div class="row mb-3">
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3 mb-4 mb-lg-0">
                        <a class="theme-btn primary-btn d-flex justify-content-center" href="/enquiries/create">
                            <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                            Create new enquiry
                        </a>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-6 mb-4 mb-lg-0">
                        <div class="form-group has-search w-100 position-relative">
                            <input type="text" class="form-control" placeholder="Search"
                                onkeyup="searchWithTabs('/search-enquries',this.value)">
                            <span class="fa fa-search form-control-feedback"></span>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                        <a role="button" class="theme-btn primary-btn d-flex justify-content-center dateFilter">
                            <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">

                        </a>
                    </div> --}}
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3 date theme-datepicker position-relative"
                        id="calanderInput">
                        <div class="calendar-icon-input"><img class="" src="/images/icons/date.svg"
                                alt="shopping-icon"></div>
                        <input role="button" type="text" class="calendar-with-input form-control body-1 ps-5"
                            onchange="searchWithTabs('/search-enquries',this.value, 'date')"
                            placeholder="Select a specific date" />
                        <span class="input-group-append">
                        </span>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show" id="all-records" role="tabpanel" aria-labelledby="all-records-tab"
                        tabindex="0">
                        @include('elements.admin.enquiry.all-enquiries-tab')

                    </div>
                    <div class="tab-pane fade" id="follow-up" role="tabpanel" aria-labelledby="follow-up-tab"
                        tabindex="1">
                        @include('elements.admin.enquiry.follow-up-tab')

                    </div>
                    <div class="tab-pane fade" id="booked" role="tabpanel" aria-labelledby="booked-tab"
                        tabindex="2">
                        @include('elements.admin.enquiry.booked-tab')

                    </div>
                    <div class="tab-pane fade" id="no-interest" role="tabpanel" aria-labelledby="no-interest-tab"
                        tabindex="3">
                        @include('elements.admin.enquiry.no-interest')

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
