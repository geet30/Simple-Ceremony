@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.common.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.common.panel-header')
                <div class="col-12">
                    <a href="/marriages/all-records-tab"
                        class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2"
                            src="/images/icons/back.svg" alt="Back Icon">Back</a>
                </div>
                @if (\Session::has('message'))
                    <div class="alert {{\Session::get('class')}}">
                            <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
                    </div>
                @endif
                <div class=" card panel-card mb-4">
                    @if(!empty(Session::get('open_modal')) && Session::get('open_modal') == 'yes')
                        <script>
                        $(document).ready(function() {
                            $("#documents-tab").click();
                        });
                        </script>
                        <div class="alert alert-primary show" role="alert">
                            <div class="d-flex">
                                <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon"></div>
                                <div>
                                    <!-- <p class="body-1 mb-0">Instructions.</p> -->
                                    <a class="button-3">You have successfully sent a message to couples</a>
                                
                                </div>
                                
                                <div><button type="button" class="theme-btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="/images/cross-blue-white.svg" class="img-fluid" alt="cross-icon"></button></div>
                            </div>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-lg-12 col-xl-6 col-12 ">
                                    <div class="d-flex flex-column flex-lg-row">
                                        <div class="col-12 col-md-6 col-xxl-5 align-self-start mb-2 mb-lg-0">
                                            <h1 class="h4 neutral-100 mb-0">Ceremony details </h1>
                                        </div>
                                        <div class="col-12 align-self-start text-start d-block d-lg-none">
                                            <span class="status registered  ">30 days till marriage</span>
                                        </div>
                                        <div class="col-md-6 col-xxl-7  align-self-center mt-2 mt-lg-0 w-100 d-flex">
                                            <div class="progress theme-progress body-1 w-40 align-self-center">
                                                <div class="progress-bar progress-bar-striped" role="progressbar"
                                                    style="width: {{ config('ceremonyStatus.booking_progress.' . $data->status) }}"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    {{ config('ceremonyStatus.booking_progress.' . $data->status) }}</div>
                                            </div>
                                            <div class="align-self-center ms-3 info-icon">
                                                <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg"
                                                        class="img-fluid"><span>Data Entered into NoIM</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-12 col-xxl-6 col-xl-6 col-12 text-xxl-end mt-3 mt-xxl-0">
                                    <div
                                        class="d-flex justify-content-start justify-content-md-between justify-content-xl-end flex-column flex-md-row">
                                        <div class="d-flex align-self-start me-0 me-xl-0 mb-4 mb-xl-0">
                                            <div class="align-self-center me-2 body-2-semi-bold"><span
                                                    class="text-nowrap status {{ strtolower(config('ceremonyStatus.booking_status.' . $data->status)) }}">{{ config('ceremonyStatus.booking_status.' . $data->status) }}
                                                </span></div>
                                            <div class="dropdown theme-dropdown me-2">
                                                <button class="theme-btn white-btn-border dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Ceremony status
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    @foreach (config('ceremonyStatus.admin_booking_status') as $key => $status)
                                                        <li>
                                                            <a role="button" class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#change_marriage_status_modal"
                                                                onclick="appendId('{{ $key }}','status')"
                                                                class="theme-btn primary-btn-border d-flex justify-content-center"><span
                                                                    class="status text-nowrap {{ strtolower($status) }}">{{ $status }}</span></a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class=" align-self-start">
                                                <a href=""
                                                    class="theme-btn primary-btn-border d-inline-flex px-1 text-nowrap"
                                                    data-bs-toggle="offcanvas" data-bs-target="#reminder"> Create
                                                    reminder</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--main content  -->
                            <div class="row pt-32">
                                <div class="col-12">
                                    <ul class="nav theme-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="information-tab" data-bs-toggle="tab"
                                                data-bs-target="#information" href="#">Information</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="docs-tab" data-bs-toggle="tab" data-bs-target="#docs"
                                                href="#">Details and Docs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="documents-tab" data-bs-toggle="tab"
                                                data-bs-target="#documents" href="#">Documents you have signed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="addons-tab" data-bs-toggle="tab"
                                                data-bs-target="#addons" href="#">Add-ons <span
                                                    class="neutral-70">({{ count($data->booking_addons) }})</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="reminders-tab" data-bs-toggle="tab"
                                                data-bs-target="#reminders" href="#">Reminders</a>
                                        </li>
                                    </ul>
                                    <!-- tab content -->
                                    <div class="tab-content" id="tabContent">
                                        <div class="tab-pane fade show active" id="information" role="tabpanel"
                                            aria-labelledby="information-tab">
                                            @include('elements.admin.marriage.detail.information')
                                            {{-- @include('elements.admin.marriage.detail.choose-marriage-celebrant') --}}

                                            @include('elements.admin.marriage.detail.reschedule')
                                            @include('elements.admin.marriage.detail.invoice')
                                        </div>
                                        <div class="tab-pane fade" id="docs" role="tabpanel"
                                            aria-labelledby="docs-tab">
                                            @include('elements.admin.marriage.detail.docs-noim')
                                            @include('elements.admin.marriage.detail.feedback')
                                        </div>
                                        <div class="tab-pane fade" id="documents" role="tabpanel"
                                            aria-labelledby="documents-tab">
                                            @include('elements.admin.marriage.detail.documents-signed')
                                            @include('elements.admin.marriage.detail.viewmessage')
                                        </div>
                                        <div class="tab-pane fade" id="addons" role="tabpanel"
                                            aria-labelledby="addons-tab">
                                            @include('elements.admin.marriage.detail.add-ons')
                                        </div>
                                        <div class="tab-pane fade" id="reminders" role="tabpanel"
                                            aria-labelledby="reminders-tab">
                                            @include('elements.admin.marriage.detail.reminder')
                                        </div>
                                    </div>
                                    <!-- tab content -->
                                </div>
                            </div>
                            <!-- main content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.marriages.js')
        @include('elements.admin.marriage.assign-marriage-celebrant')
        @include('elements.admin.marriage.detail.create-reminder')
        @include('pages.alert.change_marriage_status')
    @endsection
