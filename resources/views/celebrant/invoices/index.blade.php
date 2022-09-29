@extends('layouts.panels')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
        @include('elements.celebrant.celebrant-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
        
         <div class="row mb-3">
            <div class="col-12">
               <div class="d-flex align-items-center">
                  <a class="theme-btn primary-btn d-inline-block mt-2 mb-2 me-2" href="{{url('invoices/create')}}">
                  <img class="me-4" src="/images/icons/add.svg" alt="shopping-icon">
                  Create invoice
                  </a>
                  <div class="dropdown filter-date-calendar-dropdown">
                  <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                  <div class="dropdown-menu p-4 filter_date_div">
                     <div class="filter-date-calendar">
                        <p class="mb-3 netural-100 light-heading">Choose filter</p>
                        <div class="row">
                           <div class="col-6">
                              <div class="cs-checkbox-list form-check mb-3">
                             
                                 <input name="ceremony_date" class="form-check-input ceremony_date"  value="1" type="checkbox"><span class="netural-100 body-2 ms-2">Ceremony Date</span>
                                 <!-- <input name="ceremony_date" class="form-check-input ceremony_date"  value="0" type="hidden"> -->
                               </div>
                           </div>
                           <div class="col-6">
                              <div class="cs-checkbox-list form-check mb-3">
                            
                                 <input name="payment_date" class="form-check-input payment_date" type="checkbox" value="1"><span class="netural-100 body-2 ms-2">Payment Date</span>
                                 <!-- <input name="payment_date" class="form-check-input payment_date"  value="0" type="hidden"> -->
                               </div>
                           </div>
                        </div>
                        <div class="calendar-wrapper" id="calendar-wrapper"></div>
                        <input type="hidden" name="booking_date" class="booking_date">
                        <a onclick="SearchMultipleFilter('search-invoices','','celebrantInvoices')" class="theme-btn primary-btn d-inline-block mt-3">Filter</a>
                     </div>
                  </div>
                </div>
                <div class="dropdown filter_date_div">
                    <a role="button" class="theme-btn d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon"></a>
                    <div class="dropdown-menu p-3 filter_date_div">
                        <div class="filter-date-calendar" style="width:180px;">
                        <form method="post">
                            <div class="row">
                         
                                <div class="col-12">
                                   
                                    <h4 class="h4 neutral-100 mb-3">Status</h4>
                                    @foreach(config('ceremonyStatus.booking_status') as $key=>$status)
                                
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2 bookingStatus" type="checkbox" name="status[]" value="{{$key}}">
                                        <label class="form-check-labe body-2 neutral-100">{{ $status }}</label>
                                    </div>
                                    @endforeach
                                    <a onclick="SearchMultipleFilter('/search-invoices','','celebrantInvoices')" class="theme-btn primary-btn d-inline-flex px-5">Filter</a>
                                </div>
                               
                          
                            </div>
                        </form> 
                        </div>
                    </div>
                </div>
               </div>
            </div>
         </div>
         <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item col-md-6 col-lg-4 col-xl-3 nav-item mb-3" role="presentation">
                    <button class="nav-link w-100" id="all-records-tab" data-bs-toggle="pill" data-bs-target="" type="button" role="tab" aria-controls="all-records" aria-selected="true">
                        <div class="add-ons-nav d-flex">
                            <div class="add-ons-nav-image me-4">
                                <img src="/images/admin/partner/booking-performed.svg" alt="All marriages">
                            </div>
                            <div class="add-ons-nav-data text-start ">
                                <h3 class="h3"></h3>
                                <p class="subheader-2 d-none d-md-block">Total Net Fee</p>
                            </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Total Net Fee</p>
                    </button>
                </li>

    
         </ul>
         @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
               {{ session()->get('message') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endIf
         <div class="row">
            <div class="col-md-12">
               <div class="table-responsive celebrantInvoices searchResult" id="celebrantInvoices">
                  @include('celebrant.invoices.listing')
               </div>
            </div>
         </div>
       
    </div>
</div>
@include('elements.celebrant.invoice')
@endsection
