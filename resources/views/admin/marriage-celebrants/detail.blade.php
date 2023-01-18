@extends('layouts.panels')
@section('css')
<link rel="stylesheet" href="/fullcalendar/main.css">
<link rel="stylesheet" href="/fullcalendar/calendar.css">
@endsection
@section('page-name') {{ $data->username }} @stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.common.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.common.panel-header')
                <a href="/marriage-celebrants" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img
                        class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
                <div class="card panel-card">
                    <div class="card-body">
                        <h3 class="h3 mb-4">Marriage celebrants information</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3 alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ $errors->first() }}
                            </div>
                        @endif
                        @if (session()->has('msg'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session()->get('msg') }}
                            </div>
                        @endif
                        <div class="row mb-3">
                            <div class="col-lg-8 col-xl-9 col-xxl-10 mb-3 mb-lg-0">
                                <ul class="nav theme-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="information-tab" data-bs-toggle="tab"
                                            data-bs-target="#information" href="#information" aria-selected="true"
                                            role="tab">Availability &amp; schedule</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab"
                                            data-bs-target="#celebrants" href="#celebrants" aria-selected="false"
                                            role="tab" tabindex="-1">Personal data</a>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="document-you-signed-tab" data-bs-toggle="tab"
                                            data-bs-target="#document-you-signed" href="#document-you-signed" aria-selected="false"
                                            role="tab" tabindex="-1">Documents you have signed</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-xxl-2">
                            
                                <a role="button" data-bs-toggle="modal" data-bs-target="#delete_alert"
                                    class="theme-btn primary-btn-border d-flex justify-content-center align-items-center"> <img class="me-2" src="/images/icons/delete.svg" alt="shopping-icon">
                                Delete account</a>
                            </div>
                        </div>
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="information" role="tabpanel"
                                aria-labelledby="information-tab">
                                {{-- <a role="button" data-bs-toggle="modal" data-bs-target="#calendar_detail_modal">
                                    <img src="/images/marriage-calendar.png" alt="Calendar" class="img-fluid">
                                </a> --}}
                                <div id='calendar-js'></div>
                            </div>
                            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
                                <h1 class="h4 netural-100 mb-4">My account</h1>
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
                                        <div class="position-relative mb-4">
                                            @if ($data->image == '')
                                                <img src="/images/admin-celebrants-profile.png" alt="Partner Image"
                                                    class="img-fluid w-100 profile-image previewImage">
                                            @else
                                                <img src="/uploads/images/user/{{ $data->image }}" alt="Partner Image"
                                                    class="img-fluid w-100 profile-image previewImage">
                                            @endif

                                            <img role="button" class="camera-icon position-absolute"
                                                style="bottom: 10px;right: 10px;"
                                                src="/images/admin/partner/camera-icon.svg" alt="Camera"
                                                onclick="browseImage(this,'imageInput')">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
                                        <form class="needs-validation" novalidate enctype="multipart/form-data"
                                            method="POST" action="{{ route('marriage-celebrants.update', $data->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <div
                                                        class="table-dropdown d-flex align-items-md-center flex-column flex-md-row">
                                                        <p class="button-1 mb-md-0">Status</p>
                                                        <div class="dropdown table-dropdown ms-0 ms-md-3">
                                                            @php
                                                                $status_class = 'approved';
                                                                if ($data->status == 1) {
                                                                    $status = 'Active';
                                                                    $status_class = 'approved';
                                                                } elseif ($data->status == 0) {
                                                                    $status = 'In-active';
                                                                    $status_class = 'rejected';
                                                                }
                                                            @endphp
                                                            <div class="dropdown table-dropdown">
                                                                <button class="btn dropdown-toggle {{ $status_class }}"
                                                                    type="button"
                                                                    id="dropdownMenuButton1-{{ $data->id }}"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span
                                                                        id="change_status-{{ $data->id }}">{{ $status }}
                                                                        </status>
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item approved"
                                                                            onClick="changeStatusWithouttab('/change-user-status',{{ $data->id }}, 1)">Active</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item rejected"
                                                                            onClick="changeStatusWithouttab('/change-user-status',{{ $data->id }}, 0)">In-active</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <input
                                                                class="form-control body-1 netural-100 d-none imageInput"
                                                                type="file" name="user[image]"
                                                                onchange="readURL(this)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName"
                                                        class="form-label small-text2 ms-2 ">Username</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        name="user[username]" id="InputName"
                                                        value="{{ $data->username }}" required readonly>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Username is
                                                        required</div>

                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">First
                                                        name</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        id="InputName" value="{{ $data->first_name }}" required
                                                        name="user[first_name]" readonly>

                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2 ms-2">Other
                                                        name</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        id="InputName" value="{{ $data->other_name }}" required
                                                        name="user[other_name]" readonly>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName"
                                                        class="form-label small-text2 ms-2">Surname</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        value="{{ $data->surname }}" id="InputName" required
                                                        name="user[surname]" readonly>
                                                </div>
                                                <div class="col-md-6 mb-4 showClass">
                                                    <label for="phone" class="form-label small-text2 ms-2">Phone
                                                        number</label>
                                                    <input class="form-control body-1 netural-100 readonlyInput"
                                                        type="tel" required
                                                        value="+{{ $data->country_code }}-{{ $data->phone }}" readonly>
                                                </div>
                                                <div class="col-md-6 mb-4 phone_number saveClass d-none">
                                                    <label for="phone" class="form-label small-text2">Phone number
                                                        *</label>
                                                    <input type="hidden" id="code" name="user[country_code]"
                                                        value="{{ $data->country_code }}">
                                                    <input id="phone" type="tel"
                                                        class="form-control body-1 netural-100 tel-input"
                                                        placeholder="Your phone number" name="user[phone]"
                                                        value="+{{ $data->country_code }}{{ $data->phone }}" required
                                                        maxlength="15">
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Phone
                                                        number is required</div>
                                                    <div class="invalid-feedback phone_number_required"> <span><img
                                                                class="me-2" src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Phone
                                                        number is required</div>
                                                    <div class="invalid-feedback invalid-phone-number"> <span><img
                                                                class="me-2" src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Phone
                                                        number is invalid</div>

                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Email
                                                        address</label>
                                                    <input type="email" class="form-control body-1 netural-100 disabled"
                                                        id="InputName" readonly required=""
                                                        value="{{ $data->email }}" name="user[email]">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName"
                                                        class="form-label small-text2 ms-2">Address</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        id="InputName" required
                                                        value="{{ $data->celebrant->address ?? '' }}"
                                                        name="celebrant[address]" readonly>
                                                </div>
                                                <div class="col-md-6"></div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">A
                                                        number</label>
                                                    <input type="number"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        id="InputName" required value="{{ $data->a_number }}"
                                                        name="user[a_number]" readonly>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Business category is required
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">ABN
                                                        Number</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        id="InputName" required value="{{ $data->abn_number }}"
                                                        name="user[abn_number]" readonly>
                                                </div>

                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label small-text2">Bank *</label>
                                                    <select required="" name="user[bank]"
                                                        class="js-placeholder-single-input form-control readonlyInput"
                                                        required disabled>
                                                        @foreach(config('env.bankNames') as $key=>$bank)
                                                            <option value="{{$key}}" {{ $data->bank == $key ? ' selected' : '' }}>{{$bank}}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Bank is
                                                        required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2">BSB *</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        name="user[bsb]" id="InputName" required
                                                        value="{{ $data->bsb }}" readonly>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>BSB is
                                                        required</div>
                                                </div>

                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Account
                                                        number</label>
                                                    <input type="text"
                                                        class="form-control body-1 netural-100 readonlyInput"
                                                        id="InputName" name="user[account_no]" readonly required
                                                        value="{{ $data->account_no }}">
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">About
                                                        me</label>
                                                    <textarea class="form-control body-1 netural-100 readonlyInput" id="ceremonyplace" rows="10" readonly
                                                        name="celebrant[description]">{{ $data->celebrant->description ?? '' }}</textarea>
                                                </div>
                                                <div class="col-md-6 mb-4 ">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Standard
                                                        fee</label>
                                                    <div class=" position-relative">

                                                        <span class="currency-sign body-1 netural-100">$</span>
                                                        <input type="number" step="0.01"
                                                            class="form-control body-1 netural-100 readonlyInput ps-4"
                                                            id="InputName"
                                                            value="{{ $data->celebrant->standard_fee ?? '' }}"
                                                            name="celebrant[standard_fee]" readonly>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 ">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Admin
                                                        fee</label>
                                                    <div class="position-relative">

                                                        <span class="currency-sign body-1 netural-100">$</span>
                                                        <input type="number" step="0.01"
                                                            class="form-control body-1 netural-100 readonlyInput ps-4"
                                                            id="InputName"
                                                            value="{{ $data->celebrant->admin_fee ?? '' }}"
                                                            name="celebrant[admin_fee]" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-6 mb-4 celebrantLocation">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3 mt-4">
                                                            <div class="d-flex flex-column flex-md-row">
                                                                <span class="body-2 netural-100 me-4">Locations list</span>
                                                                <a role="button"
                                                                    class="mt-2 mt-md-0 button-1 turquoise-100 text-decoration-none faq-link"
                                                                    data-bs-toggle="offcanvas"
                                                                    data-bs-target="#celebrant_addlocation"
                                                                    aria-controls="celebrant_addlocation">Add new
                                                                    location</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if (count($data->CelebrantLocations) > 0)
                                                        @foreach ($data->CelebrantLocations as $locations)
                                                            <div class="row locDiv mb-2">
                                                                <div class="col-10 col-sm-8 col-md-6"><input
                                                                        type="text"
                                                                        value="{{ $locations->location->name }}" readonly
                                                                        class="form-control body-1 netural-100 locationText">
                                                                    <input type="hidden"
                                                                        value='{{ $locations->location_id }}'
                                                                        name="locations[]">
                                                                </div>
                                                                <div class="col-2 col-sm-4 col-md-6"><a class="cross-icon"
                                                                        onclick="remove(`locDiv`,this)"><img
                                                                            src="/images/icons/cross.svg"
                                                                            class="img-fluid"></a></div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="col-12 mb-4 emptyRecord">
                                                            Location not added yet.
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <a role="button"
                                                        class="d-inline-flex theme-btn primary-btn justify-content-center showClass"
                                                        onclick="displayItem('showClass','saveClass')">
                                                        <img class="me-2" src="/images/admin/partner/edit.svg"
                                                            alt="Edit">
                                                        Edit information
                                                    </a>
                                                    <button type="submit"
                                                        class="d-inline-flex theme-btn primary-btn justify-content-center sticky-bottom d-none saveClass">Save</button>
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
        </div>
    </div>

    @include('elements.admin.celebrant.celebrant-add-new-location')
    @include('elements.admin.calendar.calendar-detail-modal')
    @include('elements.admin.celebrant.delete-alert')

@endsection
@section('scripts')


<script src="{{asset('fullcalendar/main.js')}}"></script>
<script src="{{asset('fullcalendar/init.js')}}"></script>
<script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<script>
   initCalander('calendar-js',@json($bookingData))
</script>
@endsection
