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
         <a href="/partner/details/{{$id}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-6 align-self-center">
                        <div class="table-dropdown d-md-flex align-items-center">
                           <div>
                           <h1 class="h3 neutral-100 mb-0">{{$data['product_name']}}</h1>
                           </div>
                           <div class="ms-3">
                           <a class="{{$status_class}}  p-1 px-3 d-inline text-decoration-none ms-3" id="detail_change_class-{{$data['id']}}"> <span id="change_status-{{$data['id']}}">{{$status}}</status></a>
                           <a class="{{$status_class}} p-1 px-3 d-inline text-decoration-none ms-3 d-none" id="detail_change_class-{{$data['id']}}"> <span id="change_status-{{$data['id']}}">{{$status}}</status></a>
                           <a class="{{$status_class}} p-1 px-3 d-inline text-decoration-none ms-3 d-none" id="detail_change_class-{{$data['id']}}"> <span id="change_status-{{$data['id']}}">{{$status}}</status></a>
                           </div>
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
                     
                        @if($data['status'] == 0 )
                        <a onclick="changeStatus('/change-status',{{$data['id']}},1,'detail','tab_id','addon')"  class="theme-btn primary-btn me-3">Confirm</a>
                        <a href="#" class="theme-btn primary-btn me-3"> <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg" alt="Edit"> Edit Package</a>
                        <!-- <a onclick="changeStatus('/change-status',{{$data['id']}},2,'detail','tab_id','addon')"  class="theme-btn primary-btn-border me-3">Reject</a> -->

                        @endif
                        @if($data['status'] == 1)
                        <a href="{{route('admin.package.edit',$data['id'])}}" class="theme-btn primary-btn me-3"> <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg" alt="Edit"> Edit</a>
                        <a href="{{ url('partner/details/'.$data['id'].'#personal-data')}}" class="theme-btn primary-btn-border">See profile partner</a>
                        @endif
                        
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
                   @include('elements.admin.pages.package-detail',array('data'=>$data))
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection