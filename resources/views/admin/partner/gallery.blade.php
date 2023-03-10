@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         
         <a href="/partner/package/details/{{$addonid}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
        

         <div class="card panel-card">
            <div class="card-body">
               <section class="pt-40  mb-5 add-ons-detail">
                     <div class="row">
                        @foreach($data['gallery'] as $gallery)
                       
                           <div class="col-md-5 mb-3">
                                 @if(preg_match('/^.*\.(mp4|mov|mpg|mpeg|wmv|mkv)$/i', $gallery['image_name'])) 
                                       
                                    <video controls width="100%" class="img-fluid gallery-img"  id="video" preload="metadata">
                                       <source src="{{ asset('/uploads/images/package/'.$gallery['image_name']) }}" type="video/mp4">
                                    </video>
                                 @else
                                    <img src="{{ asset('/uploads/images/package/'.$gallery['image_name']) }}" alt="add-ons-image " class="img-fluid gallery-img"> 
                                 @endif
                           </div>
                        @endforeach
                        
                        
                        
                     </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection