<div class="row">
                           
    @if(count($data) > 0)
        @foreach($data as $key=>$products)
    
        
            <?php 
            $status_class = "waiting-approval";
            if($products['status']==1)  {
                $status = 'Approved';
                $status_class = 'approved';
            }  
                
            elseif($products['status']==2){
                $status = 'Rejected';
                $status_class = 'rejected';
            }
                
            elseif($products['status']==0){
                $status = 'Waiting For Approval'; 
                $status_class = 'waiting-approval';
            }
        
            ?>
    
            <div class="col-lg-3">
            <!-- <a href="package-details" class="text-decoration-none"> -->
            <a href="#" class="text-decoration-none">
            <div class="card image-card">
                @foreach($products['package'] as $images)
                    @if ($loop->first)  
                        @if(isset($images['gallery'][0]) && !empty($images['gallery'][0]['image_name']))
                        <img src="{{ asset('/uploads/images/package/'.$images['gallery'][0]['image_name']) }}" alt="location-1" class="card-img-top mb-4">
                        @endif
                    @endif
                @endforeach
                <div class="card-body table-dropdown">
                    <p class="{{$status_class}} p-1 px-3 d-inline-block text-decoration-none mb-0">{{$status}}</p>
                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">{{$products['product_name']}}</h2>
                </div>
            </div>
            </a>
            </div>
        @endforeach
    @endif

    
    
</div>