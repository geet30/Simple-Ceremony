<div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th>Add-ons</th>
                <th>Category</th>
                <th>Description</th>
                <th>Name partners</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="add-on-reject-tab_searchList">
                  <?php $count = 0;?>
                  @foreach($rejected_addons  as $addon)
                   <?php $count++; 
                        $status_class = "waiting-approval";
                        if($addon->status==1)  {
                            $status = 'Approved';
                            $status_class = 'approved';
                        }  
                            
                        elseif($addon->status==2){
                            $status = 'Rejected';
                            $status_class = 'rejected';
                        }
                            
                        elseif($addon->status==0){
                            $status = 'Waiting For Approval'; 
                            $status_class = 'waiting-approval';
                        }
                        
                    ?>
                     <tr>
                     <td class="body-2 neutral-100" style="min-width:200px;">{{$addon->product_name}}</td>
                     <td class="body-2 neutral-100" style="min-width:200px;">{{$addon->addon->name}}</td>
                     <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">
                        @if(isset($addon->package[0]) && !empty($addon->package[0]))
                            {{$addon->package[0]->location_description}}
                        @endif
                    </td>
                        <td class="body-2 neutral-100">Picture framing</td>
                        <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle {{$status_class}}" type="button" id="add-on-reject-tab_{{$addon->id}}" data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="change_status-{{$addon->id}}">{{$status}}</status>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item waiting-approval" onClick="changeStatus('/change-status',{{$addon->id}},0)">Waiting for approval</a></li>
                                <li><a class="dropdown-item approved" onClick="changeStatus('/change-status',{{$addon->id}},1)">Approved</a></li>
                                <li><a class="dropdown-item rejected" onClick="changeStatus('/change-status',{{$addon->id}},2)">Rejected</a></li>
                            </ul>
                            </div>
                        </td>
                        <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> 
                         <a href="{{ route('addons.detail', $addon->id) }}"
                            class="table-link">View info</a></td>
                    </tr>
                  @endforeach
                  <?php if($count==0){?>
                  <tr>
                     <td colspan="6">
                        <center>{{__('translation.noRecord')}} </center>
                     </td>
                   </tr>
                  <?php } ?>
    
        <tbody>

            
        
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                <?php $data = array();?>
                    @include('elements.admin.addons.pagination',array('data'=>$rejected_addons))
               

                </td>
            </tr>
           
        </tfoot>
    </table>
</div>