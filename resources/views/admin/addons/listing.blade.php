@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.admin-sidebar')
            </div>

            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.panel-header')
                <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
                        <button class="nav-link  w-100" id="all-ads-on-tab" data-bs-toggle="pill"
                            data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on"
                            aria-selected="true">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/message-icon.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $all_addons->total() }}</h3>
                                    <p class="subheader-2">All add-ons</p>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
                        <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill"
                            data-bs-target="#Waiting-for-approval" type="button" role="tab"
                            aria-controls="Waiting-for-approval" aria-selected="false">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $pending_addons->total() }}</h3>
                                    <p class="subheader-2">Waiting for approval</p>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
                        <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill"
                            data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved"
                            aria-selected="false">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/hands.svg" alt="">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $approved_addons->total() }}</h3>
                                    <p class="subheader-2">Approved</p>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
                        <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill"
                            data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject"
                            aria-selected="false">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/add-ons/cross.svg" alt="">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $rejected_addons->total() }}</h3>
                                    <p class="subheader-2">Reject</p>
                                </div>
                            </div>
                        </button>
                    </li>
                </ul>
                <div class="row mb-3">
                    <div class="col-lg-8 col-xl-9 mb-3 mb-lg-0">
                        <ul class="nav theme-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="information-tab" data-bs-toggle="tab"
                                    data-bs-target="#information" href="#addons">Add ons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants"
                                    href="#addons-setting">Add-ons setting</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="form-group has-search w-100 position-relative">
                            <span class="fa fa-search form-control-feedback"></span>

                            <input type="text" class="form-control" onkeyup="SearchRecords('/search-addon',this.value)"
                                placeholder="Search add-ons">

                        </div>
                    </div>
                </div>
                @if (\Session::has('message'))
                    <div class="alert {{ \Session::get('class') }}">
                        <ul class="mb-0">
                            <li>{!! \Session::get('message') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active" id="information" role="tabpanel"
                        aria-labelledby="information-tab">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="all-ads-on" role="tabpanel" aria-labelledby="all-ads-on-tab"
                                tabindex="0">
                                @include('elements.admin.addons.all-ads-on-tab')
                            </div>


                            <div class="tab-pane fade" id="Waiting-for-approval" role="tabpanel"
                                aria-labelledby="Waiting-for-approval-tab" tabindex="1">
                                @include('elements.admin.addons.Waiting-for-approval-tab')

                            </div>

                            <div class="tab-pane fade" id="add-on-approved" role="tabpanel"
                                aria-labelledby="add-on-approved-tab" tabindex="2">
                                @include('elements.admin.addons.add-on-approved-tab')

                            </div>

                            <div class="tab-pane fade" id="add-on-reject" role="tabpanel"
                                aria-labelledby="add-on-reject-tab" tabindex="3">
                                @include('elements.admin.addons.add-on-reject-tab')
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">

                        <a href="#" class="theme-btn primary-btn d-inline-block mb-4" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasaddons" aria-controls="offcanvasaddons"><img class="me-2"
                                src="/images/admin/add-ons/white-plus.svg" alt="Add">Create new add-ons</a>
                        <div class="card panel-card">
                            <div class="card-body">
                                <ul class="add-on-setting-ul list-unstyled p-0 m-0" id="addon_list">
                                    @if (count($data) > 0)
                                        @foreach ($data as $counter => $addon)
                                            <li class="d-flex flex-wrap mb-4">
                                                <label class="small-text2">Add-on {{ $counter + 1 }}</label>
                                                <span
                                                    class="body-1 neutral-100 me-4 mb-3">{{ ucfirst($addon->name) }}</span>
                                                <div class="d-flex">
                                                    <a href="{{ route('addons.destroy', $addon->id) }}"
                                                        class=""><img class="me-2" src="/images/admin/add-ons/add-on-delete.svg"
                                                            alt="Delete"></a>
                                                    <a class="edit-addon" class="ms-3" data-bs-toggle="offcanvas"
                                                        data-bs-target="#offcanvaseditaddons"
                                                        data-name="{{ $addon->name }}" data-id="{{ $addon->id }}"
                                                        aria-controls="offcanvaseditaddons"><img
                                                            src="/images/admin/add-ons/add-on-edit.svg"
                                                            alt="Edit"></a>


                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <center>No record found </center>
                                        </li>
                                    @endIf


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.addons.add')
    @include('admin.addons.js')
    @include('admin.addons.edit')
    @include('admin.addons.feedback')
@endsection
