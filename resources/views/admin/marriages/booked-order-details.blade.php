@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.panel-header')
                <a href="/marriages" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img
                        class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
                <div class="card panel-card">
                    <div class="card-body">
                        <h1 class="h3 netural-100 mb-4">Order details </h1>
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="row">
                                                <div class="col-md-4 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Preferred
                                                        name</label>
                                                    <input type="text" value="Johny"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Preferred names is required</div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Your email</label>
                                                    <input type="text" value="Johny@gmail.com"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Email is required</div>
                                                </div>
                                                <div class="col-md-4 mb-4 align-self-end">
                                                    <a class="theme-btn primary-btn border-0 d-inline-block"
                                                        role="button">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label for="date" class="form-label small-text2">Event date</label>
                                                    <div class="input-group date theme-datepicker">
                                                        <input role="button" type="text"
                                                            class="form-control body-1 netural-100" id="date"
                                                            placeholder="Choose date here" />
                                                        <span class="input-group-append">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="selectinput" class="form-label small-text2">Event start
                                                        time</label>
                                                    <select required="" name="customer_type" id="selectinput"
                                                        class="js-placeholder-single-input form-control">
                                                        <option value="" disabled="" selected="" hidden="">
                                                            Event start time</option>
                                                        <option value="1">09:00</option>
                                                        <option value="2">09:30</option>
                                                        <option value="3">10:00</option>
                                                        <option value="4">10:30</option>
                                                        <option value="5">11:00</option>
                                                        <option value="6">11:30</option>
                                                        <option value="7">12:00</option>
                                                        <option value="8">12:30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Location
                                                        name</label>
                                                    <input type="text" value="Bradfield Park North"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Location name is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Street
                                                        Address</label>
                                                    <input type="text" value="Milsons Point NSW 2061, Australia"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Street Address is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-4 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Suburb</label>
                                                    <input type="text" value="New South Wales"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Suburb is required</div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Post
                                                        code</label>
                                                    <input type="text" value="2070"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Post code is required</div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <label for="InputName" class="form-label small-text2">State</label>
                                                    <input type="text" value="-"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>State is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Specific
                                                        location</label>
                                                    <input type="text" value="Lorem ipsum dolor sit amet"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Specific location is required
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2">GPS
                                                        coordinates</label>
                                                    <input type="text" value="090909090909"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>GPS coordinates is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Parking
                                                        details</label>
                                                    <input type="text" value="Lorem ipsum dolor sit amet"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Parking details is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="InputName" class="form-label small-text2">Parking
                                                        costs</label>
                                                    <input type="text" value="$ 5"
                                                        class="form-control body-1 netural-100" name="name"
                                                        id="InputName" required>
                                                    <div class="invalid-feedback"> <span><img class="me-2"
                                                                src="/images/require-iocn.svg"
                                                                alt="Require Icon"></span>Parking costs is required</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" id="submit_button"
                                                        class="theme-btn primary-btn border-0">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
