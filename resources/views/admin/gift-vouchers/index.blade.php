@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row">
            <div class="col-md-12 mb-4">
                <a class="theme-btn primary-btn d-inline-block" href="{{route('gift-vouchers.create')}}">
                  <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">Add new voucher
                </a>
            </div>
         </div>
         @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
               {{ session()->get('message') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endIf
         <div class="row">
            <div class="col-12">
                <ul class="nav theme-tabs gift-vouchers-tabs" onclick="addTabToUrl(event,'/gift-voucher/')" >
                    <li class="nav-item">
                        <a class="nav-link active" id="all-orders" data-bs-toggle="tab" data-bs-target="#orders"
                            href="#">All orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="all-active-gift-vouchers" data-bs-toggle="tab" data-bs-target="#active-gift-vouchers"
                            href="#">All active gift vouchers</a>
                    </li>
                </ul>
                <!-- tab content -->
                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active all-orders" id="orders" role="tabpanel"
                        aria-labelledby="orders-tab">
                        @include('elements.admin.gift-voucher.all-orders')
                    </div>
                    <div class="tab-pane fade active-gift-vouchers" id="active-gift-vouchers" role="tabpanel" aria-labelledby="active-gift-vouchers-tab">
                    <div class="row mb-22 mt-20">
                        <div class="col-md-12 d-flex">
                                <div class="form-group has-search w-100 position-relative">
                                    <input type="text" class="form-control" placeholder="Search gift certificate name or gift voucher number"  onkeyup="searchWithoutTabs('/search-voucher',this.value, 'searchResult', '1')">
                                    <span class="fa fa-search form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                        @include('elements.admin.gift-voucher.all-active-gift-vouchers')
                    </div>
                </div>
                <!-- tab content -->
            </div>
        </div>
      </div>
   </div>

@endsection