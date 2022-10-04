@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0 d-none d-md-block">
                @include('elements.celebrant.celebrant-sidebar')
            </div>
            <div class="col-12 col-md-9 col-lg-10 px-md-4 ">
                @include('elements.common.panel-header')
                <div class="col-12">
                    <a href="/upcoming/all-records-tab"
                        class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2"
                            src="/images/icons/back.svg" alt="Back Icon">Back</a>
                </div>
                <div class=" card panel-card mb-4">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-xl-6 ">
                                    <div class="d-flex">
                                        <div class="col-5 col-md-6 col-xxl-6 align-self-center">
                                            <h1 class="h4 neutral-100 mb-0">Ceremony details </h1>
                                        </div>
                                        <div class="col-7 align-self-center text-end d-md-none ">
                                            <span class="status registered text-nowrap ">30 days till marriage</span>
                                        </div>
                                        <div
                                            class="col-md-4 col-xxl-4 align-self-center mt-2 mt-md-0 w-100 d-none d-md-flex">
                                            <div class="progress theme-progress body-1 w-40 align-self-center">
                                                <div class="progress-bar progress-bar-striped" role="progressbar"
                                                    style="width: {{ config('ceremonyStatus.booking_progress.' . $data->status) }}"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    {{ config('ceremonyStatus.booking_progress.' . $data->status) }}</div>
                                            </div>
                                            <div class="align-self-center ms-3 info-icon">
                                                <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg"
                                                        class="img-fluid"><span>Need to check data from admin</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 mt-3 mt-xl-0">
                                    <div class="d-flex justify-content-xl-end">
                                        <div class="align-self-center me-2 body-2-semi-bold"><span
                                                class="text-nowrap status {{ strtolower(config('ceremonyStatus.booking_status.' . $data->status)) }}">{{ config('ceremonyStatus.booking_status.' . $data->status) }}
                                            </span></div>
                                        <div class="align-self-center">
                                            <div class="dropdown theme-dropdown">
                                                <button class="theme-btn white-btn-border dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Ceremony status
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    @foreach (config('ceremonyStatus.celebrant_booking_status') as $key => $status)
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
                                        </div>

                                        <div class=" d-flex align-self-center ms-2 w-100 d-md-none ">
                                            <div class="progress theme-progress body-1 w-40 align-self-center">
                                                <div class="progress-bar progress-bar-striped" role="progressbar"
                                                    style="width: {{ config('ceremonyStatus.booking_progress.' . $data->status) }}"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    {{ config('ceremonyStatus.booking_progress.' . $data->status) }}</div>
                                            </div>
                                            <div class="align-self-center ms-3 info-icon">
                                                <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg"
                                                        class="img-fluid"><span>Need to check data from admin</span></a>
                                            </div>
                                        </div>
                                        <div class="align-self-center ms-3 mt-3 mt-md-0 d-none d-md-block">
                                            <span class="status registered text-nowrap">30 days till marriage</span>
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
                                            href="#">Docs & NoIM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="documents-tab" data-bs-toggle="tab"
                                            data-bs-target="#documents" href="#">Documents you have signed</a>
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
                                        @include('elements.celebrant.marriage.detail.information')
                                    </div>
                                    <div class="tab-pane fade" id="docs" role="tabpanel"
                                        aria-labelledby="docs-tab">
                                        @include('elements.celebrant.marriage.detail.docs-noim')
                                        @include('elements.celebrant.marriage.detail.feedback')
                                    </div>
                                    <div class="tab-pane fade" id="documents" role="tabpanel"
                                        aria-labelledby="documents-tab">
                                        @include('elements.celebrant.marriage.detail.documents-signed')
                                        @include('elements.celebrant.marriage.detail.viewmessage')
                                    </div>
                                    <div class="tab-pane fade" id="reminders" role="tabpanel"
                                        aria-labelledby="reminders-tab">
                                        @include('elements.celebrant.marriage.detail.reminder')
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
    <script>
        $(document).ready(function() {
            $("#docs-tab").click();
        });
    </script>
    @include('pages.alert.change_marriage_status')
@endsection
