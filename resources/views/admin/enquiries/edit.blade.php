@extends('layouts.panels')
@section('page-name') {{ $detail->couple_one }} &amp; {{ $detail->couple_two }} @stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.common.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.common.panel-header')
                <a href="/all-enquiries/all-records-tab"
                    class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2"
                        src="/images/icons/back.svg" alt="Back Icon">Back</a>
                <div class="card panel-card">
                    <div class="card-body">
                        <h1 class="h3 netural-100 mb-4">Edit enquiry</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3 alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ $errors->first() }}
                            </div>
                        @endif
                        <div class="row">
                            @php
                                $status_class = 'approved';
                                if ($detail->status == 1) {
                                    $status = 'Booked';
                                    $status_class = 'approved';
                                } elseif ($detail->status == 0) {
                                    $status = 'Follow up';
                                    $status_class = 'waiting-approval';
                                } elseif ($detail->status == 2) {
                                    $status = 'No interest';
                                    $status_class = 'rejected';
                                }
                            @endphp
                            <div class="col-md-12">
                                <form class="needs-validation loader_class" method="POST" novalidate
                                    action="{{ route('enquiries.update', $detail->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="InputName" class="form-label small-text2">Name couple 1</label>
                                            <input type="text" value="{{ $detail->couple_one }}"
                                                class="form-control body-1 netural-100" name="couple_one" id="InputName"
                                                required maxlength="15">
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Business
                                                name is required</div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="InputName" class="form-label small-text2">Name couple 2</label>
                                            <input type="text" value="{{ $detail->couple_two }}"
                                                class="form-control body-1 netural-100" name="couple_two" id="InputName"
                                                required maxlength="15">
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Contact
                                                name is required</div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="date" class="form-label small-text2">Date marriage</label>
                                            <div class="input-group date theme-datepicker">
                                                <input role="button" type="text" class="form-control body-1 netural-100"
                                                    id="date" placeholder="Choose date here" name="marriage_date"
                                                    required value="{{ $detail->marriage_date }}" />
                                                <div class="invalid-feedback"> <span><img class="me-2"
                                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Date
                                                    marriage is required</div>
                                                <span class="input-group-append">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="date" class="form-label small-text2">Enquiry marriage</label>
                                            <div class="input-group date theme-datepicker">
                                                <input role="button" type="text" class="form-control body-1 netural-100"
                                                    id="date" placeholder="Choose date here" name="enquiry_date"
                                                    required value="{{ $detail->enquiry_date }}" />
                                                <div class="invalid-feedback"> <span><img class="me-2"
                                                            src="/images/require-iocn.svg" alt="Require Icon"></span>Enquiry
                                                    marriage is required</div>
                                                <span class="input-group-append">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="InputName" class="form-label small-text2">Email</label>
                                            <input type="email" placeholder="Add email here"
                                                class="form-control body-1 netural-100" name="email" id="InputName"
                                                required value="{{ $detail->email }}">
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Email
                                                is required and please add correct format</div>
                                        </div>
                                        <div class="col-md-6 mb-4 phone_number">
                                            <label for="phone" class="form-label small-text2">Phone number *</label>
                                            <input type="hidden" id="code" name="phone_code"
                                                value="{{ $detail->phone_code }}">
                                            <input id="phone" type="tel"
                                                class="form-control body-1 netural-100 tel-input"
                                                placeholder="Your phone number" name="phone"
                                                value="+{{ $detail->phone_code }}{{ $detail->phone }}" required
                                                maxlength="15">
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Phone
                                                number is required</div>
                                            <div class="invalid-feedback phone_number_required"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Phone
                                                number is required</div>
                                            <div class="invalid-feedback invalid-phone-number"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Phone
                                                number is invalid</div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label small-text2">Reference by</label>
                                            <select required="" class="js-placeholder-single-input form-control"
                                                name="reffer_by" required>
                                                <option value="" disabled="" selected="" hidden="">
                                                    Select
                                                </option>
                                                <option value="1" {{ $detail->reffer_by == 1 ? ' selected' : '' }}>
                                                    Social media</option>
                                                <option value="2" {{ $detail->reffer_by == 2 ? ' selected' : '' }}>
                                                    Website</option>
                                                <option value="3" {{ $detail->reffer_by == 3 ? ' selected' : '' }}>
                                                    Other</option>
                                            </select>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Reference
                                                by is required</div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="d-flex align-items-center">
                                                <p class="button-1 mb-0">Choose status</p>
                                                <div class="dropdown table-dropdown ms-3">
                                                    <button class="btn dropdown-toggle statusDrop {{ $status_class }}"
                                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        {{ $status }}
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                                                        style="">
                                                        <li><a class="dropdown-item waiting-approval"
                                                                onclick="changeStatusText('waiting-approval', 'statusDrop', 'statusVal', 0, 'Follow up')">Follow
                                                                up</a></li>
                                                        <li><a class="dropdown-item approved"
                                                                onclick="changeStatusText('approved', 'statusDrop', 'statusVal', 1, 'Booked')">Booked</a>
                                                        </li>
                                                        <li><a class="dropdown-item rejected"
                                                                onclick="changeStatusText('rejected', 'statusDrop', 'statusVal', 2, 'No interest')">No
                                                                interest</a></li>
                                                    </ul>
                                                    <input type="hidden" name="status" value="{{ $detail->status }}"
                                                        class="statusVal" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <label for="InputName" class="form-label small-text2">Enquiry</label>
                                            <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" name="enquiry"
                                                rows="10" required>{{ $detail->enquiry }}</textarea>
                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                        src="/images/require-iocn.svg" alt="Require Icon"></span>Enquiry
                                                is required</div>
                                        </div>
                                        <div class="col-md-12 mb-4">
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
    @include('elements.admin.enquiry.enquiry-date-calander')
    @include('elements.admin.enquiry.marriage-calander')
@endsection
