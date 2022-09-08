@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.panel-header')
                <ul class="row add-on-list-nav p-0 mb-0 list-unstyled mb-2">
                    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                        <div class="nav-link">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/partner/report-user.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $count['marriageCelebrant'] }}</h3>
                                    <p class="subheader-2">Marriage celebrants</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                        <div class="nav-link">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/partner/report-location.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $count['marriageLocation'] }}</h3>
                                    <p class="subheader-2">Locations</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                        <div class="nav-link">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/partner/booking-performed.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $count['marriageBookings'] }}</h3>
                                    <p class="subheader-2">Marriages</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="row" id="calendar-overview">
                    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
                        <div class="card panel-card">
                            <div class="card-body">
                                <div class="calendar-wrapper no-border-calander getBookingsCalendar" id="calendar-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6">
                        <div class="card panel-card">
                            @include('admin.calander.dynamic-booking-list-ajax')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.marriages.js')
        @include('elements.admin.marriage.assign-marriage-celebrant')
    @endsection
