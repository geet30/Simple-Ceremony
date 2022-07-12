@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
        @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
        @include('elements.user-header')
         <a href="./add-ons" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3 neutral-100">Transaction List</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="InputName" class="form-label small-text2">Item description</label>
                        <input type="text" value="Corona pack bronze" class="form-control body-1 netural-100" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="InputName" class="form-label small-text2">Provider name</label>
                        <input type="text" value="Prisillia decoration" class="form-control body-1 netural-100" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="InputName" class="form-label small-text2">Date</label>
                        <input type="text" value="Mar 10, 2022" class="form-control body-1 netural-100" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="InputName" class="form-label small-text2"></label>
                        <div class="d-flex flex-column flex-lg-row">
                            <a role="button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            <a role="button" class="theme-btn primary-btn-border d-flex pe-auto justify-content-center">Download</a>
                         </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.user.tax-invoice')
@endsection