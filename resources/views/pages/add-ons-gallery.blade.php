@extends('layouts.master')

 @section('content')
<section class="pt-45 pb-40">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <a href="/add-ons-detail" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">Back</a>
         </div>
      </div>
   </div>
</section>
<section class="pt-40  mb-5 add-ons-detail">
   <div class="container">
      <div class="row">
         @foreach($data['gallery'] as $gallery)
                       
            <div class="col-md-4 mb-3">
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
   </div>
</section>
@endsection