@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.panel-header')
                <a href="/all-enquiries/all-records-tab"
                    class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2"
                        src="/images/icons/back.svg" alt="Back Icon">Back</a>
                <div class="card panel-card">
                    <div class="card-body">
                        <section class="pb-40">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 align-self-center">
                                    <div class="table-dropdown d-md-flex align-items-center">
                                        <div>
                                            <h1 class="h4 neutral-100 mb-0">{{ $detail->couple_one }} &amp;
                                                {{ $detail->couple_two }}</h1>
                                        </div>
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
                                        <div class="ms-0 ms-md-3 mt-2 mt-md-0">
                                            <a
                                                class="waiting-approval p-1 px-3 d-inline text-decoration-none {{ $status_class }}">{{ $status }}</a>
                                        </div>

                                    </div>
                                    <p class="body-3 mb-0 mt-3"><img class="me-2" src="/images/admin/black-calander.svg"
                                            alt="Delete"> {{ $detail->enquiry_date }}</p>
                                </div>
                                <div class="col-md-12 col-lg-6 align-self-center d-md-flex justify-content-lg-end ">
                                    <div class="me-md-3 mt-3 mt-lg-0 align-self-center">
                                        <a href="/enquiries/{{ $detail->id }}/edit" class="theme-btn primary-btn d-block">
                                            <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg"
                                                alt="Edit"> Edit</a>
                                    </div>
                                    <div class="me-md-3 mt-3 mt-lg-0 align-self-center">
                                        <a data-bs-toggle="modal" data-bs-target="#delete_alert"
                                            class="theme-btn primary-btn d-flex justify-content-center"><img class="me-2"
                                                src="/images/admin/white-delete.svg" alt="Delete">
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="row pb-5">
                            <div class="col-md-12">
                                <div class="feedback-data h-auto p-md-4 p-3">
                                    <p class="body-3-medium mb-0">{{ $detail->enquiry }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-success-form modal fade cancel-ceremony-popup" id="delete_alert" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" class="delete_form" action="{{ url('/enquiries', $detail->id) }}">
                    @method('DELETE')
                    @csrf
                    <div class="modal-body text-center">
                        <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
                        <h4 class="h4 netural-100 mb-4 mt-4">Are you sure you want to delete this enquiry?
                        </h4>
                        <div class="d-flex justify-content-center mt-3">

                            <button type="submit" role="button" class="theme-btn primary-btn me-3">Continue</button>
                            <a role="button" class="theme-btn primary-btn-border" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</a>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('elements.calander')
@endsection
