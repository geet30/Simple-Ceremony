@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <a href="{{url('invoices')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-12 align-self-center">
                        <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                           <h1 class="h3 neutral-100 mb-2">Create new invoice</h1>
                        </div>
                        <!-- <p class="subheader-3 neutral-100 mb-0">Invoice number #09012901912</p> -->
                     </div>
                  </div>
               </section>
               @if ($errors->any())
               <div class="alert alert-danger mb-3 alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ $errors->first() }}
               </div>
               @endif


               <form class="needs-validation" method="POST" novalidate action="{{ route('invoices.store') }}">
                  @csrf
                  <input type="hidden" class="booking_id" name="booking_id">
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Recipient</label>
                        <select required="" name="recipient_name" class="js-placeholder-single-input form-control" onchange="findRecipientInfo('/recipient-info',this)">
                        
                           
                           <option value="{{$admin['id']}}">{{ $admin['name'] }}</option>
                         
                        </select>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Recipient required</div>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">ABN number</label>
                        <div class="d-flex align-items-center">
                           <input type="text" placeholder="ABN number" class="form-control body-1 netural-100 abn_number commonFirstEmpty" name="abn_number" readonly >
                           <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="left" data-bs-content="Select the recipient first,after that his data will appear">
                              <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                           </span>
                        </div>
                     </div>
                  </div>
            
                  <div class="row align-items-center mb-4">
                     <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="row">
                           <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-4 mb-xl-0">
                              <label class="form-label small-text2">Name couple</label>
                             
                              <select required="" class="js-placeholder-single-input form-control" name="couple" required onchange="findCoupleInfo('/couple-info',this)">
                                 <option value="" disabled="" selected="" hidden="">
                                          Select
                                    </option>
                                  @foreach($couples as $couple)
                                  <option value="{{$couple['id']}}">{{$couple['first_couple_name']}} & {{$couple['second_couple_name']}}</option>
                                  @endforeach
                              </select>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Name of couple required</div>
                              
                           </div>
                           <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-4 mb-xl-0">
                              <label for="date" class="form-label small-text2">Ceremony date</label>
                              <div class="input-group date theme-datepicker">
                                 <input role="button" type="text" class="form-control body-1 netural-100 ceremony_date commonEmpty" id="date" placeholder="Choose date here" readonly disabled/>
                                 <span class="input-group-append">
                                 </span>
                              </div>
                           </div>

                        </div>

                     </div>
                  </div>
                     <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                           <div class="row">
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Ceremony type</label>
                                 <input type="text" value="0" class="form-control body-1 netural-100 ceremony_type commonEmpty" name="ceremony_type" id="InputName" required="" readonly>
                                 
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Celebrant Fee</label>
                                 <input type="text" value="$ 0" class="form-control body-1 netural-100 celebrant_fee commonEmpty" name="celebrant_fee" id="InputName" required="" readonly>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Administration fee</label>
                                 <input type="text" value="$ 0" class="form-control body-1 netural-100 admin_fee commonEmpty" name="admin_fee" id="InputName" required="" readonly>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                    
                     <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12 col-xl-10 col-xxl-10 mb-4">
                           <label class="form-label small-text2">Give note</label>
                           <textarea class="form-control small-text1 netural-100" rows="15" name="notes"></textarea>
                        </div>
                     </div>
                     <div class="row align-items-center sticky-footer">
                        <div class="col-12">
                           <div class="d-flex flex-column flex-lg-row">
                              <button type="submit" id="submit_button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0">Create invoice</button>

                           </div>
                        </div>
                     </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.common.js')
@endsection