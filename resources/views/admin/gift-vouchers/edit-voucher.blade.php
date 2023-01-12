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
            <a href="{{url('gift-vouchers',$data->id)}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-md-12">
               <div class="card panel-card mb-5">
                  <div class="card-body">
                     <form class="row needs-validation" method="POST" novalidate action="{{route('gift-vouchers.update',$data->id)}}" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                        <div class="col-md-12 mb-4 d-flex flex-column position-relative">
                           <label for="photos" class="form-label small-text2 mb-20">Upload cover photos</label>
                           <a class="delete-icon-span delete-voucher-image position-absolute d-flex align-items-center justify-content-center"> 
                                 <svg width="21" height="27" viewBox="0 0 21 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.9332 2.43421H14.3182V2.37895C14.3182 1.32895 13.4759 0.5 12.4091 0.5H8.59091C7.52406 0.5 6.68182 1.32895 6.68182 2.37895V2.43421H1.06684C0.477273 2.43421 0 2.90395 0 3.48421V4.53421C0 5.11447 0.477273 5.58421 1.06684 5.58421H19.9332C20.5227 5.58421 21 5.11447 21 4.53421V3.48421C21 2.90395 20.5227 2.43421 19.9332 2.43421Z" fill="#62CBC9"/>
                                    <path d="M18.5294 7.02105H2.47059C2.16177 7.02105 1.93717 7.26974 1.96524 7.57368L2.75134 23.5724C2.83556 25.3408 4.32353 26.75 6.12032 26.75H14.8516C16.6484 26.75 18.1364 25.3684 18.2206 23.5724L19.0067 7.57368C19.0628 7.29737 18.8102 7.02105 18.5294 7.02105ZM8.75936 22.4671C8.75936 22.9645 8.36631 23.3513 7.86096 23.3513C7.35562 23.3513 6.96257 22.9645 6.96257 22.4671V11.3316C6.96257 10.8342 7.35562 10.4474 7.86096 10.4474C8.36631 10.4474 8.75936 10.8342 8.75936 11.3316V22.4671ZM14.0374 22.4671C14.0374 22.9645 13.6444 23.3513 13.139 23.3513C12.6337 23.3513 12.2406 22.9645 12.2406 22.4671V11.3316C12.2406 10.8342 12.6337 10.4474 13.139 10.4474C13.6444 10.4474 14.0374 10.8342 14.0374 11.3316V22.4671Z" fill="#62CBC9"/>
                                 </svg>
                           </a>
                           <div class="drop-zone add-gift-voucher-drop-zone text-center position-relative"> 
                           <?php  $required = 'required'?>
                           @if($data->voucher_image && !empty($data->voucher_image))
                           <?php 
                                 
                              $path = asset('uploads/images/vouchers/'.$data->voucher_image);
                              $type = pathinfo($path, PATHINFO_EXTENSION);
                              $imgData = file_get_contents($path);
                              $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imgData);
                              $required = '';

                           ?>  
                              <input type="hidden" id="image_id" name="image_id" value="{{$data->id}}"> 
                              <div class="drop-zone__thumb" data-label="{{$data->cover_image}}" style="background-image: url({{$base64}})"></div>
                              @else                                                     
                                 <span class="drop-zone__prompt text-center d-flex flex-column py-5 text-center">
                                    <img src="/images/icons/jpg-logo.svg" class="img-fluid jpg-icon">
                                    <span class="dark-blue-100 h4 text-center">Drop your photos here,<br>
                                    or <span class="turquoise-100 text-decoration cursor-pointer">browse file</span></span>
                                 </span> 
                                 <input type="hidden" id="image_id" name="image_id"> 
                              @endif
                              <input type="file" name="voucher_image" class="drop-zone__input" {{$required}}>    
                                 <div class="invalid-feedback" style="position: absolute;bottom: -30px;left: 20px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Cover photo is required.</div>
                           </div> 
                        </div>
                        <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Add title voucher</label>
                              <input type="text" name="voucher_title" class="form-control body-1 netural-100" value="{{ (isset($data->voucher_title)) ? $data->voucher_title : '' }}" required>
                             
                              <div class="invalid-feedback">
                              title is required
                              </div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label class="form-label small-text2 ms-2">Add voucher price</label>
                           <div class="position-relative">
                                 <span class="currency-sign body-1 netural-100">$</span>
                                 <input type="number" name="voucher_price" class="form-control body-1 netural-100 ps-4" value="{{ (isset($data->voucher_price)) ? $data->voucher_price : '' }}" required>
                                 <div class="invalid-feedback" >
                                 voucher price is required.
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Gift voucher number</label>
                              <input type="number" name="voucher_number" class="form-control body-1 netural-100" value="{{ (isset($data->voucher_number)) ? $data->voucher_number : '' }}" required>
                             
                              <div class="invalid-feedback">
                              voucher number is required
                              </div>
                        </div>
                        <div class="col-md-12 mb-15">
                           <label for="Voucher-description" class="form-label small-text2">Voucher description</label>
                           <textarea class="form-control body-1 netural-100" id="voucherdescription" name="voucher_description" rows="10">{{ (isset($data->voucher_description)) ? $data->voucher_description : '' }}</textarea>
                        </div>
                        <div class="col-12 mt-15 mb-30">
                           <button class="theme-btn primary-btn" type="submit">Save</button>
                        </div>
                     </form>
                  </div>
              </div>
            </div>
         </div>
      </div>
   </div>
   @include('admin.gift-vouchers.js')
@endsection