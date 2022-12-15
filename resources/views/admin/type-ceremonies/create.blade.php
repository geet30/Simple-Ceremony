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
              <a href="{{url('all-type-of-ceremonies/')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-md-12">
              @if($errors->any())
                  <div class="alert alert-danger mb-3 alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button>  
                     {{$errors->first()}}
                  </div>
               @endif
               <div class="card panel-card mb-5">
                  <div class="card-body">
                        <form class="needs-validation" method="POST" novalidate
                                    action="{{ route('all-type-of-ceremonies.store') }}">
                        @csrf
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Type of ceremony</label>
                              <input type="text" name="ceremony_name" class="form-control body-1 netural-100" placeholder="Type of ceremony here" required>
                              <div class="invalid-feedback">
                                  Ceremony Name is required
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2 ms-2">Fee adjustment</label>
                              <div class="position-relative">
                                  <span class="currency-sign body-1 netural-100">$</span>
                                  <input type="number" name="fee_adjustment" class="form-control body-1 netural-100 ps-4" required>
                                  <div class="invalid-feedback" >
                                  Fee Adjustment is required.
                                 </div>
                              </div>
                          </div>
                           <div class="col-md-12 mb-4 conditions">
                              <label class="form-label small-text2 me-3">Conditions</label>
                             
                              <textarea id="conditions" class="form-control body-1 netural-100 ckeditor" cols="30" rows="10" name="conditions" placeholder="Type ceremony conditions here" required></textarea>
                              <div class="invalid-feedback conditions_error" >
                                 Conditions is required.
                              </div>

                            
                           </div>
                           <div class="col-md-12 mb-4 additional_information">
                              <label class="form-label small-text2">Additional informations</label>
                              <div class="p-4" style="border: 1px solid #E2F3F2;border-radius: 6px;">
                                 <?php $ceremonyAdditional = config('ceremonyStatus.CeremonyAdditional');?>
                                 @foreach($ceremonyAdditional as $key=>$value)
                                    <div class="form-check form-switch simple-switcher-toggle mb-2">
                                       <input class="form-check-input additional_info_input" name="additional_info[]" type="checkbox" value="{{$key}}"  role="switch">
                                       <label class="form-check-label body-1 netural-100"> {{$value}}</label>
                                    </div>
                                 @endforeach
                                 <div class="invalid-feedback additional_information_error" >
                                 Additional Conditions is required.
                              </div>

                                
                             </div>
                           </div>
                           <div class="col-md-12">
                              <input type="submit" value="Save" class="d-inline-flex theme-btn primary-btn justify-content-start sticky-bottom">
                           </div>
                        </div>
                     </form>
                  </div>
              </div>
            </div>
         </div>
      </div>
   </div>
   @include('elements.admin.type-ceremonies.add-hyperlink')
   @endsection