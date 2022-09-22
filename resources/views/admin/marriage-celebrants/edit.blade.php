@extends('layouts.app')
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
                        <h3 class="h3 mb-4">Marriage celebrants information kghkjhk</h3>
                        <div class="row mb-3">
                            <div class="col-lg-8 col-xl-9 col-xxl-10 mb-3 mb-lg-0">
                                <ul class="nav theme-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="information-tab" data-bs-toggle="tab"
                                            data-bs-target="#information" href="#" aria-selected="true"
                                            role="tab">Availability &amp; schedule</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab"
                                            data-bs-target="#celebrants" href="#" aria-selected="false" role="tab"
                                            tabindex="-1">Personal data</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-xxl-2">
                                <a role="button" data-bs-toggle="modal" data-bs-target="#delete_alert"
                                    class="theme-btn primary-btn-border d-flex justify-content-center">Delete account</a>
                            </div>
                        </div>
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="information" role="tabpanel"
                                aria-labelledby="information-tab">
                                <a role="button" data-bs-toggle="modal" data-bs-target="#calendar_detail_modal">
                                    <img src="/images/marriage-calendar.png" alt="Calendar" class="img-fluid">
                                </a>
                            </div>
                            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
                                <h1 class="h4 netural-100 mb-4">My account</h1>
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
                                        <div class="position-relative mb-4">
                                            <img src="/images/admin-celebrants-profile.png" alt="Partner Image"
                                                class="img-fluid w-100 profile-image">
                                            <img role="button" class="camera-icon position-absolute"
                                                style="bottom: 10px;right: 10px;"
                                                src="/images/admin/partner/camera-icon.svg" alt="Camera">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
                                        <form class="needs-validation loader_class" method="POST" novalidate>
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <div
                                                        class="table-dropdown d-flex align-items-md-center flex-column flex-md-row">
                                                        <p class="button-1 mb-md-0">Status</p>
                                                        <div class="dropdown table-dropdown ms-0 ms-md-3">
                                                            <button class="btn dropdown-toggle approved" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Active
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                                                                style="">
                                                                <li><a class="dropdown-item approved"
                                                                        href="#">Active</a></li>
                                                                <li><a class="dropdown-item rejected"
                                                                        href="#">Inactive</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName"
                                                        class="form-label small-text2 ms-2 ">Username</label>
                                                    <input type="text" value="Daniels"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Business name is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">First
                                                        name</label>
                                                    <input type="text" value="Daniels"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Contact name is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2 ms-2">Other
                                                        name</label>
                                                    <input type="text" value="Macio"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Business name is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName"
                                                        class="form-label small-text2 ms-2">Surname</label>
                                                    <input type="text" value="MACIO"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Contact name is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="phone" class="form-label small-text2 ms-2">Phone
                                                        number</label>
                                                    <input class="form-control body-1 netural-100" type="tel"
                                                        id="phone" placeholder="e.g. +1 702 123 4567" value="+61 "
                                                        required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Phone number is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Email
                                                        address</label>
                                                    <input type="text" value="Daniels123@gmail.com"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required="">
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Email is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName"
                                                        class="form-label small-text2 ms-2">Address</label>
                                                    <input type="text" value="Dynevor QLD 4492, Australia"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Contact name is required</div>
                                                </div>
                                                <div class="col-md-6"></div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">A
                                                        number</label>
                                                    <input type="number" value="0980980009"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Business category is required
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">ABN
                                                        Number</label>
                                                    <input type="text" value="090190190290"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>ABN Number is required</div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="row">
                                                        <div class="col-md-9 mb-4">
                                                            <label for="InputName"
                                                                class="form-label small-text2 ms-2">Bank</label>
                                                            <select name="gender" id="bank"
                                                                class="js-placeholder-single-input form-control">
                                                                <option value="1">ANZ</option>
                                                                <option value="2">NAB</option>
                                                                <option value="3" selected="">Westparc</option>
                                                                <option value="4">Bank of Queensland</option>
                                                                <option value="5" selected="">Bendigo Bank
                                                                </option>
                                                                <option value="6">AMP Bank Ltd</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="InputName"
                                                                class="form-label small-text2 ms-2">BSB</label>
                                                            <input type="text" value="73"
                                                                class="form-control body-1 netural-100" name="name"
                                                                id="InputName" required>
                                                            <div class="invalid-feedback"> <span><img class="me-2"
                                                                        src="/images/require-iocn.svg"
                                                                        alt="Require Icon"></span>BSB is required</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Account
                                                        number</label>
                                                    <input type="text" value="09090909"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>ABN Number is required</div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">About
                                                        me</label>
                                                    <textarea class="form-control body-1 netural-100" id="ceremonyplace" rows="10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</textarea>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Standard
                                                        fee</label>
                                                    <input type="text" value="$ 120"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Business category is required
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="InputName" class="form-label small-text2 ms-2">Admin
                                                        fee</label>
                                                    <input type="text" value="$ 50"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>ABN Number is required</div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input type="submit" value="Save"
                                                        class="d-inline-flex theme-btn primary-btn justify-content-center sticky-bottom">
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
    @include('elements.admin.calendar.calendar-detail-modal')
    @include('elements.admin.celebrant.delete-alert')
    @include('elements.admin.celebrant.celebrant-add-new-location')
@endsection
