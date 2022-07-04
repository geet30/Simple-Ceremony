@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
        
         <ul class="add-on-list-nav marriage-celebrant-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="col nav-item  mb-3" role="presentation">
              <button class="nav-link active w-100" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/wedding.svg" alt="All add-ons">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h2 class="h3">465</h2>
                     <p class="subheader-2">All marriages</p>
                  </div>
               </div>
              </button>
            </li>
            <li class="col  nav-item  mb-3" role="presentation">
              <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                 <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/waiting.svg" alt="">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h2 class="h3">50</h2>
                        <p class="subheader-2">Pending</p>
                     </div>
                  </div>
               </button>
            </li>
            <li class="col  nav-item  mb-3" role="presentation">
              <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/booking.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h2 class="h3">50</h2>
                     <p class="subheader-2">Booked</p>
                  </div>
               </div>
              </button>
            </li>
            <li class="col  nav-item  mb-3" role="presentation">
              <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/lodged.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h2 class="h3">20</h2>
                     <p class="subheader-2">Lodged</p>
                  </div>
               </div>
              </button>
            </li>
            <li class="col nav-item mb-3" role="presentation">
                <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
                 <div class="add-ons-nav d-flex">
                    <div class="add-ons-nav-image me-4">
                       <img src="/images/marriage-celebrant/icons/document.svg" alt="">
                    </div>
                    <div class="add-ons-nav-data text-start ">
                       <h2 class="h3">10</h2>
                       <p class="subheader-2">Lodged pending</p>
                    </div>
                 </div>
                </button>
              </li>
          </ul>
          <div class="row mb-4">
       
            <div class="col-md-7 col-xl-8 d-flex align-self-center">
            <div class="dropdown">
               <a class="btn">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                </a>
                <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     
                     <optgroup label="Status">
                        <option value="O1" data-badge="">Booked</option>
                        <option value="O2" data-badge="">Pending</option>
                        <option value="O3" data-badge="">Lodged</option>
                        <option value="O4" data-badge="">Lodged (pending)</option>
                        <option value="O5" data-badge="">Married</option>
                        <option value="O6" data-badge="">Registered</option>
                        <option value="O7" data-badge="">Finalised</option>
                        <option value="O7" data-badge="">Cancelled</option>
                      </optgroup>
                      <optgroup label="Location">
                        <option value="O1" data-badge="">Blues point</option>
                        <option value="O2" data-badge="">Tench park</option>
                        <option value="O3" data-badge="">Bradfield park</option>
                      </optgroup>
                  </select>
               </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search couple name">
            </div>
         </div>
            <div class="align-self-center col-md-5 col-xl-4 d-grid mt-3 mt-md-0 postion-relative">
                <ul class="input-calander">
                    <li class="input__list">
                        <input type="text" class="input__item " placeholder="hidden">
                    </li>
                    <li class="input__list-1">
                        <a class="theme-btn primary-btn d-flex justify-content-center " >
                            <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
                            select a specific date
                            </a>
                    </li>
                </ul>
              
               @include('elements.calander')
            </div>
         </div>
        </div>
    </div>
</div>

@include('elements.admin-add-ons-add')
@include('elements.admin-add-ons-edit')
@include('elements.admin-add-ons-feedback')

@endsection