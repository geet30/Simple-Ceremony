@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 p-0">
                @include('elements.user.steps.sidebar')
            </div>

            <div class="col-10 col-md-9 col-lg-10 px-md-4">
                @include('elements.user.steps.header')
                <div class="card noim-card mb-4">
                    <form class="card-body needs-validation pb-5 px-0 pt-0" method="POST"
                        action="{{ route('user-noim.store') }}" novalidate enctype="multipart/form-data">
                        @csrf
                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="100"
                            class="scrollspy-example" tabindex="0">
                            <div id="person-1">
                                @include('elements.user.steps.person-1')
                            </div>
                            <div id="person-2">
                                @include('elements.user.steps.person-2')
                            </div>
                            <div id="parents-1">
                                @include('elements.user.steps.parents-1')
                            </div>
                            <div id="parents-2">
                                @include('elements.user.steps.parents-2')
                            </div>
                            <div id="details-1">
                                @include('elements.user.steps.details-1')
                            </div>
                            <div id="details-2">
                                @include('elements.user.steps.details-2')
                            </div>
                            <div id="witness">
                                @include('elements.user.steps.witness')
                            </div>
                            <div class="col-12 mb-4">
                                <button href="/user/step-2" class="d-inline-flex theme-btn primary-btn ">
                                    <div class="d-flex">
                                        <div class="align-self-center">Save and continue
                                    to
                                    fill
                                    referrers </div>
                                    <div class="ms-2 align-self-center"><img src="/images/icons/right-arrow.svg" class="img-fluid"></div>
                                    </div>
                                </button>
                                {{-- <a href="/user/step-2" class="d-inline-flex theme-btn primary-btn ">
                                    <div class="d-flex">
                                        <div class="align-self-center">Save and continue to fill
                                        referrers</div>
                                        <div class="ms-2 align-self-center"> <img src="/images/icons/right-arrow.svg" class="img-fluid "></div>
                                    </div>
                                </a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
