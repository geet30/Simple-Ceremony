@foreach ($addons as $addon)
<div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-md-0">
   <a class="card image-card top-list-addon" href="{{route('add-ons-detail',$addon['id'])}}">
      

         @foreach($addon['package'] as $images)
            @if ($loop->first)  
               @if(isset($images['gallery'][0]) && !empty($images['gallery'][0]['image_name']))
                  <img src="{{ asset('/uploads/images/package/'.$images['gallery'][0]['image_name']) }}" alt="add-ons-image " class="img-fluid left-img">
               @endif
            @endif
         @endforeach

   
      <div class="card-body">
         <div class="badge badge-primary d-inline-flex mb-17">
            <div class="dot align-self-center me-1"></div>
            <div class="align-self-center"> {{ $addon['addon']['name'] }}</div>
         </div>
         <div class="d-flex justify-content-between mb5 body-3 netural-100 ">Starting  ${{ (isset($addon['package'][0]['total_fee'])) ? $addon['package'][0]['total_fee']:'' }}</div>
        
         
         <h3 class="h4 netural-100">{{ (isset($addon['product_name'])) ? $addon['product_name'] :''  }}</h3>
         {{-- (isset($addon['package'][0]['package_name'])) ? $addon['package'][0]['package_name']:'' --}}
        
         <div class="d-flex  small-text2 mb-1 netural-100">
            <div class="align-self-center"><img src="/images/location.svg" class="img-fluid me-2" alt="Location"></div>
            @foreach($addon['product_location'] as $product_location)
                  @if ($loop->first)  
                     @if(isset($product_location['locations'][0]) && !empty($product_location['locations'][0]['name']))
                     <div class="align-self-center">{{ $product_location['locations'][0]['name']}}</div>
                        
                     @endif
                  @endif
            @endforeach

            
         </div>
         <div class="d-flex">
            <?php 

               $imgname = asset('/images/avtar/avatar-d.png');
               if(isset($addon['user']['image']) && !empty($addon['user']['image'])){
                  $imgname = asset('/uploads/images/user/'.$addon['user']['image']);
               }
            ?>
         
            <div class="align-self-center me-1"> <img src="{{ $imgname }}" alt="add-ons-image" class="img-fluid ellipse-1"> </div>
            <div class="small-text3 align-self-center netural-100">{{ $addon['user']['name'] }}</div>
         </div>
      </div>
   </a>
</div>
@endforeach