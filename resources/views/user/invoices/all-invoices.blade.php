@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
        @include('elements.common.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
        @include('elements.common.panel-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3 neutral-100 mb-md-4">Transaction List</h3>
                    </div>
                </div>
               
                @if(count($data) > 0)
                @foreach($data as $booking_addon)
                    @foreach($booking_addon->packages as $package)
               
                        <div class="row mb-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 mb-4 mb-xl-0">
                                <label for="InputName" class="form-label small-text2">Item description</label>
                                <input type="text" value="{{$package->package_name}}" class="form-control body-1 netural-100 cursor-pointer" readonly="">
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 mb-4 mb-xl-0">
                                <label for="InputName" class="form-label small-text2">Provider name</label>
                                <input type="text" value="{{$package->user->name}}" class="form-control body-1 netural-100 cursor-pointer"  readonly="">
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 mb-4 mb-xl-0">
                                <label for="InputName" class="form-label small-text2">Date</label>
                                <input type="text" value="{{date('M d, Y',strtotime($booking_addon->created_at))}}" class="cursor-pointer form-control body-1 netural-100" readonly="">
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <label for="InputName" class="form-label small-text2 d-none d-md-inline-block"></label>
                                <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-lg-start">
                                    <a role="button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-md-0 border-0" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal" onclick="appendUserInvoiceData('{{$package->package_name}}','{{$package->user->name}}','{{$package->user->abn_number}}','{{$package->total_fee}}','{{$booking_addon->created_at}}')">View</a>

                                    <a href="{{url('user/download-user-invoice',[$booking_addon->booking_id,$package->id])}}" role="button" data-booking_id="{{$booking_addon->booking_id}}" class="theme-btn primary-btn-border d-flex pe-auto justify-content-center">Download</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
                @endif
            </div>
         </div>
      </div>
   </div>
</div>
@include('pages.alert.user-tax-invoice')
@endsection