@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <?php 
            $status_class = "waiting-approval";
            if($data['status']==1)  {
                $status = 'Approved';
                $status_class = 'approved';
            }  
                
            elseif($data['status']==2){
                $status = 'Rejected';
                $status_class = 'rejected';
            }
                
            elseif($data['status']==0){
                $status = 'Waiting For Approval'; 
                $status_class = 'waiting-approval';
            }
                
         ?>
         <a href="/add-ons/all" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-6 align-self-center">
                        <div class="table-dropdown d-flex align-items-center">
                           <h1 class="h3 neutral-100 mb-0">{{$data['product_name']}}</h1>
                           <a class="{{$status_class}}  p-1 px-3 d-inline text-decoration-none ms-3" id="detail_change_class-{{$data['id']}}"> <span id="change_status-{{$data['id']}}">{{$status}}</status></a>
                           <a class="{{$status_class}} p-1 px-3 d-inline text-decoration-none ms-3 d-none" id="detail_change_class-{{$data['id']}}"> <span id="change_status-{{$data['id']}}">{{$status}}</status></a>
                           <a class="{{$status_class}} p-1 px-3 d-inline text-decoration-none ms-3 d-none" id="detail_change_class-{{$data['id']}}"> <span id="change_status-{{$data['id']}}">{{$status}}</status></a>
                        </div>
                        <p class="body-3 mb-0 mt-3"><span class="body-1">Criteria : </span>Available on 
                        <?php 
                        $location_name=[];
                        foreach($data['product_location'] as $product_location){
                           foreach($product_location['locations'] as $location){
                              $location_name[]= $location['name'];
                           
                           }
                           
                        }
                        echo implode(',',$location_name);
                        ?>
                     </p>
                     </div>
                     <div class="col-md-6 align-self-center d-flex justify-content-md-end mt-3 mt-md-0">
                        <a href="#" class="theme-btn primary-btn me-3 d-none"> <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg" alt="Edit"> Edit</a>
                        <a onclick="changeStatus('/change-status',{{$data['id']}},1,'detail')"  class="theme-btn primary-btn me-3">Confirm</a>
                        <a href="/partner-details" class="theme-btn primary-btn-border">See profile partner</a>
                     </div>
                  </div>
               </section>
               <div class="row pb-5 d-none">
                  <div class="col-md-12">
                     <div class="feedback-data">
                        <p class="button-1 mb-0">Feedback</p>
                        <p class="body-3-medium mb-0">Some packages do not have a price. please give a price and submit it to us again</p>
                     </div>
                  </div>
               </div>
               <section class="pt-40 add-ons-detail">
               <?php $count = 0;?>
               @foreach($data['package'] as $package)
               <?php $count++; ?>
                  <div class="row pb-60">
                     <div class="col-md-3 col-lg-3 col-xl-2 ">
                        <div class="d-flex">
                           <div class="numberCircle align-self-center">{{$count}}</div>
                           <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages {{$count}}</p>
                        </div>
                     </div>
                     <div class="col-md-9 col-xl-10 mt-3 mt-md-0">
                        <div class="row">
                           <div class="col-lg-12 d-md-flex justify-content-between">
                              <div class="align-self-center">
                             
                                 <h2 class="h3 neutral-100">{{$package['package_name']}} • $ 120</h2>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="add-ons-discount d-flex mt-4 mb-3">
                                 <div class="add-ons-discount-offer text-center me-4">
                                    <p class="mb-1 small-text2 neutral-100">AC admin fee</p>
                                    <h3 class="h3 mb-0 neutral-100">{{$package['admin_fee']}}%</h3>
                                 </div>
                                 <div class="add-ons-after-discount-price text-center">
                                    <p class="mb-1 small-text2 neutral-100">Total fee <br>partners get</p>
                                    <h3 class="h3 mb-0 neutral-100">$ {{$package['partner_fee']}}</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 image-block pt-3">
                              <div class="row">
                                 <div class="col-md-6 mb-3 mb-md-0">
                                    <div class=" position-relative">
                                       <img src="/images/add-ons/add-ons-details/left.jpg" class="img-fluid  left-img "
                                          alt="add-ons-image ">
                                       <div class="all-pictures-btn">
                                       
                                          <a href="{{ route('addons.gallery', $package['id']) }}" class="theme-btn primary-btn d-inline-flex">
                                             <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg"
                                                alt="shopping-icon">
                                             See all pictures
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 right-img  ">
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <img src="/images/add-ons/add-ons-details/right-1.jpg" class="img-fluid mb-3 photo"
                                             alt="add-ons-image ">
                                          <img src="/images/add-ons/add-ons-details/right-2.jpg"
                                             class="img-fluid photo mb-3 mb-sm-0 " alt="add-ons-image ">
                                       </div>
                                       <div class="col-sm-6">
                                          <img src="/images/add-ons/add-ons-details/right-3.jpg" class="img-fluid mb-3 photo"
                                             alt="add-ons-image ">
                                          <div class="position-relative">
                                             <img src="/images/add-ons/add-ons-details/right-4.jpg" class="img-fluid photo "
                                                alt="add-ons-image ">
                                             <img src="/images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image ">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 pt-3">
                                    <p class="body-3-medium text-black">{{$package['location_description']}}
                                    </p>
                                    <ul class="addons-list">
                                       <li>Signing table and 2 white padded folding chairs </li>
                                       <li>Signing table decoration </li>
                                       <li> Aisle runner in natural sisal </li>
                                       <li>Frame your ceremony with a beautiful chiffon with silk flowers </li>
                                    </ul>
                                    <h4 class="h4">Add title terms here</h4>
                                    <p class="body-3-medium">{{$package['title_term']}}</p>
                                    <ul class="addons-list">
                                       <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                       <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection