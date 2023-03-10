@extends('layouts.panels')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.common.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
            @include('elements.common.panel-header')
         
            <ul class="add-on-list-nav  nav nav-pills mb-3 mt-3 registered-tab" id="pills-tab">
                <li class="nav-item  nav-item " role="presentation">
                    <button class="nav-link w-100 active" id="all-records-tab" data-bs-toggle="pill" data-bs-target="#all-records" type="button" role="tab" aria-controls="all-records" aria-selected="true">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/admin/partner/booking-performed.svg" alt="All marriages">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['all_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">All Ceremonies</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">All Ceremonies</p>
                    </button>
                </li>
                <li class="nav-item  nav-item" role="presentation">
                    <button class="nav-link w-100" id="booked-tab" data-bs-toggle="pill" data-bs-target="#booked" type="button" role="tab" aria-controls="booked" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['booking_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Booked</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Booked</p>
                    </button>
                </li>
                <li class="nav-item  nav-item " role="presentation">
                    <button class="nav-link w-100" id="lodged-tab" data-bs-toggle="pill" data-bs-target="#lodged" type="button" role="tab" aria-controls="lodged" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/booking.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['lodged_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Lodged</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged</p>
                    </button>
                </li>
                <li class="nav-item  nav-item" role="presentation">
                    <button class="nav-link w-100" id="lodged-pending-tab" data-bs-toggle="pill" data-bs-target="#lodged-pending" type="button" role="tab" aria-controls="lodged-pending" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/document.svg" alt="Lodged pending">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['lodged_pending_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Lodged pending</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged pending</p>
                    </button>
                </li>
                <li class="nav-item nav-item " role="presentation">
                    <button class="nav-link w-100" id="non-legal-tab" data-bs-toggle="pill" data-bs-target="#non-legal" type="button" role="tab" aria-controls="non-legal" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/registered.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['non_legal_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Non Legal</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Non Legal</p>
                    </button>
                </li>
                <li class="nav-item nav-item " role="presentation">
                    <button class="nav-link w-100" id="registered-tab" data-bs-toggle="pill" data-bs-target="#registered" type="button" role="tab" aria-controls="registered" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/registered.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['registered_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Registered</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Registered</p>
                    </button>
                </li>
                <li class="nav-item  nav-item " role="presentation">
                    <button class="nav-link w-100" id="finalised-tab" data-bs-toggle="pill" data-bs-target="#finalised" type="button" role="tab" aria-controls="finalised" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/finalised.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['finalised_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Finalised</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Finalised</p>
                    </button>
                </li>
                <li class="nav-item  nav-item" role="presentation">
                    <button class="nav-link w-100" id="cancelled-tab" data-bs-toggle="pill" data-bs-target="#cancelled" type="button" role="tab" aria-controls="cancelled" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/cancelled.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['cancelled_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Cancelled</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Cancelled</p>
                    </button>
                </li>
                <li class="nav-item nav-item " role="presentation">
                    <button class="nav-link w-100" id="settled-tab" data-bs-toggle="pill" data-bs-target="#settled" type="button" role="tab" aria-controls="settled" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/marriage-celebrant/icons/refunded.svg" alt="">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3">{{ $dataArray['settled_marriages']->total() }}</h3>
                                <p class="subheader-2 d-none d-md-block">Settled</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Settled</p>
                    </button>
                </li>
            </ul>

            <div class="col-12 pt-20 pb-32 d-flex justify-content-center upcomming-marriage-top">
                <a class="position-relative collapse_ul" type="button"> </a>
            </div>
            <div class="row mb-4 pt-32 justify-content-md-between">
                <div class="col-lg-7 col-xl-8 d-flex align-self-center">
                    <div class="dropdown">
                        <a class="btn">
                            <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                        </a>
                        <div class="select-with-checkbox">
                            <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control location_categories_button filter_by_categories" multiple="multiple">
                                <optgroup label="Location">
                                    @foreach ($locations as $location)
                                    <option value="{{ $location->id }}" data-badge="">{{ $location->name }}
                                    </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-search w-100 ms-4 position-relative">
                        <input type="text" class="form-control" placeholder="Search couple or celebrant" onkeyup="searchWithTabs('/marriages/search-by-user',this.value)">
                        <span class="fa fa-search form-control-feedback"></span>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3  mt-3 mt-lg-0 date theme-datepicker position-relative d-flex justify-content-lg-end align-self-center" id="calanderInput">
                    <div class="calendar-icon-input"><img class="" src="/images/icons/date.svg" alt="shopping-icon"></div>
                    <input role="button" type="text" class="w-auto calendar-with-input form-control body-1 ps-5" onchange="searchWithTabs('search-marriages',this.value, 'date')" placeholder="Select a specific date" />
                    <span class="input-group-append">
                    </span>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show" id="all-records" role="tabpanel" aria-labelledby="all-records-tab" tabindex="0">
                    @include('elements.admin.marriage.all-records-tab')


                </div>
                <div class="tab-pane fade" id="booked" role="tabpanel" aria-labelledby="booked-tab-tab" tabindex="1">
                    @include('elements.admin.marriage.booked-tab')

                </div>
                <div class="tab-pane fade" id="lodged" role="tabpanel" aria-labelledby="lodged-tab" tabindex="2">
                    @include('elements.admin.marriage.lodged-tab')

                </div>
                <div class="tab-pane fade" id="lodged-pending" role="tabpanel" aria-labelledby="lodged-pending-tab" tabindex="3">
                    @include('elements.admin.marriage.lodged-pending-tab')

                </div>
                <div class="tab-pane fade" id="non-legal" role="tabpanel" aria-labelledby="non-legal-tab"
                tabindex="3">
                    @include('elements.admin.marriage.non-legal-tab')

                </div>
                <div class="tab-pane fade" id="registered" role="tabpanel" aria-labelledby="registered-tab"
                tabindex="3">
                    @include('elements.admin.marriage.registered-tab')

                </div>
                <div class="tab-pane fade" id="finalised" role="tabpanel" aria-labelledby="finalised-tab"
                tabindex="3">
                    @include('elements.admin.marriage.finalised-tab')

                </div>
                <div class="tab-pane fade" id="settled" role="tabpanel" aria-labelledby="settled-tab"
                tabindex="3">
                    @include('elements.admin.marriage.settled-tab')

                </div>
                <div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="cancelled-tab"
                tabindex="3">
                    @include('elements.admin.marriage.cancelled-tab')

                </div>
            </div>



        </div>
    </div>
    @include('admin.marriages.js')
    @include('elements.admin.marriage.assign-marriage-celebrant')
    @include('elements.admin.marriage.note-popup')
    @include('elements.admin.marriage.note-edit')
    @include('pages.alert.change_status')
    @endsection