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
        <tbody id="Waiting-for-approval-tab_searchList">
            <?php $count = 0;?>
            @foreach($pending_addons  as $addon)
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
                    @endif</td>
                <td class="body-2 neutral-100">Flower by joelle</td>
                <td style="min-width:200px;">
                <div class="dropdown table-dropdown">
                    <button class="btn dropdown-toggle {{$status_class}}" type="button" 
                    id="Waiting-for-approval-tab_{{$addon->id}}" data-bs-toggle="dropdown" aria-expanded="false">
                     <span id="change_status-{{$addon->id}}">{{$status}}</status>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item waiting-approval" onClick="changeStatus('/change-status',{{$addon->id}},0)">Waiting for approval</a></li>
                        <li><a class="dropdown-item approved" onClick="changeStatus('/change-status',{{$addon->id}},1)">Approved</a></li>
                        <li><a class="dropdown-item rejected" onClick="changeStatus('/change-status',{{$addon->id}},2)">Rejected</a></li>
                    </ul>
                    </div>
                </td>
                <td style="min-width:230px;"><a onClick="changeStatus('/change-status',{{$addon->id}},1)" class="table-link me-3">Confirm</a>
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
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                <div class="theme-pagination d-flex justify-content-end">
                    <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                    <div class="align-self-center me-4 button-1 ">1-10 of 150</div>
                    <div class="align-self-center">
                        <a class="d-inline-flex me-4" href=""><img src="/images/pagination/left.svg"
                            class="img-fluid"></a>
                        <a class="d-inline-flex me-4" href=""><img src="/images/pagination/right.svg"
                            class="img-fluid"> </a>
                    </div>
                </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>