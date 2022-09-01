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
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
                        <div class="card panel-card">
                            <div class="card-body">
                                <div class="calendar-wrapper no-border-calander" id="calendar-wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6">
                        <div class="card panel-card">
                            <div class="card-body">
                                <div
                                    class="d-flex justify-content-between flex-column align-items-start flex-md-row align-items-md-center mb-4">
                                    <h4 class="h4 neutral-100 mb-2 mb-md-0">Marriages
                                        (<span id="overview-booking-count">{{ count($bookings) }}</span>)
                                    </h4>
                                    <div class="align-items-center d-flex">
                                        <p class="button-1 mb-0 me-3">Integrate to</p>
                                        <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover"
                                            data-bs-trigger="hover focus" data-bs-placement="bottom"
                                            data-bs-content="Google Calendar">
                                            <img role="button" class="me-3" src="/images/calendar/google-calendar.svg"
                                                alt="Google Calendar">
                                        </span>
                                        <p class="button-1 mb-0 me-3">Or</p>
                                        <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover"
                                            data-bs-trigger="hover focus" data-bs-placement="bottom"
                                            data-bs-content="Outlook">
                                            <img role="button" src="/images/calendar/microsoft_outlook.svg"
                                                alt="Microsoft Outlook">
                                        </span>
                                    </div>
                                </div>

                                <div class="marriagesListing" id="overview-booking-list">
                                    @foreach ($bookings as $booking)
                                        <div class="marriage-calendar-overview">
                                            <div class="row">
                                                <div class="col-12 col-md-2 col-lg-1 mb-2">
                                                    <div class="numberCircle">{{ $loop->iteration }}</div>
                                                </div>
                                                <div class="col-12 col-md-10 col-lg-11">
                                                    <h4 class="h4 neutral-100">
                                                        {{ $booking['booking']['first_couple_name'] }}
                                                        &amp;
                                                        {{ $booking['booking']['second_couple_name'] }}</h4>
                                                    <div class="d-flex mt-3 flex-md-row flex-column">
                                                        <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                                            <img src="/images/calendar/user-gray.svg" alt="user">
                                                            <p class="gray-gray-900 body-2 ms-2 mb-0">
                                                                {{-- {{ $booking->booking->celebrant }} --}}
                                                                {{ $booking->booking->celebrant != null ? $booking->booking->celebrant->first_name : 'John' }}
                                                            </p>
                                                            <span class="d-inline-block ms-2" tabindex="0"
                                                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                                data-bs-placement="right" data-bs-content="Approved">
                                                                <img src="/images/calendar/timeline-success.svg"
                                                                    alt="Information Icon" style="width:13px;">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                                            <img src="/images/calendar/time.svg" alt="mobile">
                                                            <p class="gray-gray-900 body-2 ms-2 mb-0">
                                                                {{ $booking->booking->booking_start_time }} to
                                                                {{ $booking->booking->booking_end_time }}</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/calendar/location.svg" alt="mobile">
                                                            <p class="gray-gray-900 body-2 ms-2 mb-0">
                                                                {{ $booking->booking->location->name }}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img src="/images/calendar/location.svg" alt="mobile">
                                                    <p class="gray-gray-900 body-2 ms-2 mb-0">Tench park</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="reason-details">
                                            <p class="button-1 mb-1">Reason :</p>
                                            <p class="body-3 mb-0">There is the same schedule with other person 2s</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="marriage-calendar-overview mt-4">
                                <div class="row">
                                    <div class="col-12 col-md-2 col-lg-1 mb-2">
                                        <div class="numberCircle">4</div>
                                    </div>
                                    <div class="col-12 col-md-10 col-lg-11">
                                        <h4 class="h4 neutral-100">Jorsey &amp; Erin</h4>
                                        <div class="d-flex mt-3 flex-md-row flex-column">
                                            <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                                <img src="/images/calendar/user-gray.svg" alt="user">
                                                <p class="gray-gray-900 body-2 ms-2 mb-0"> <a
                                                        class="turquoise-100 text-decoration-none"
                                                        href="#">Assign</a></p>
                                            </div>
                                            <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                                <img src="/images/calendar/time.svg" alt="mobile">
                                                <p class="gray-gray-900 body-2 ms-2 mb-0">15:00</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="/images/calendar/location.svg" alt="mobile">
                                                <p class="gray-gray-900 body-2 ms-2 mb-0">Tench park</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
