
    <div class="table-responsive">
        <table class="table align-middle theme-table">
            <thead>
            <tr>
                <th>Ceremony date</th>
                <th>Time</th>
                <th>Type of ceremony</th>
                <th>Ceremony Status</th>
                <th>Location</th>
                <th>Couples Name</th>            
                <th>Phone Number</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($dataArray['cancelled_marriages'] as $result)
                
                    <tr>                   
                        <td  style="min-width:130px" class="body-2">{{date('M d, Y',strtotime($result->booking_date))}}</td>
                        <td  style="min-width:130px" class="body-2">{{date('H:i',strtotime($result->booking_start_time)) }}</td>
                        
                        <td  style="min-width:130px" class="body-2">{{config('ceremonyStatus.typeOfCeremony.'.$result->ceremony_type) }}</td>
                        <td style="min-width:120px;">
                            <span class="text-nowrap status {{strtolower(config('ceremonyStatus.booking_status.'.$result->status) )}}"> <a role="button" data-bs-toggle="modal" data-bs-target="#change_status_modal" onclick="appendId('{{$result->id}}','id')">{{config('ceremonyStatus.booking_status.'.$result->status) }}  </a></span>
                        </td>
                        <td class="body-2 neutral-100" style="min-width:130px;">
                            {{$result->location->name}}
                        </td>
                        <td class="body-2 neutral-100" style="min-width:130px;">
                            {{$result->first_couple_name}} & {{$result->second_couple_name}}
                        </td> 
                        <td class="body-2 neutral-100" style="min-width:130px;">
                            {{$result->user->country_code}} {{$result->user->phone}}
                        </td>                   
                        
                        <td style="min-width:100px;">
                            <a href="{{route('celebrant.marriage.detail',$result->id)}}" class="table-link">View info</a>
                        </td>
                    </tr>
                    
                @endforeach
                @if($dataArray['cancelled_marriages']->total()==0)
                    <tr>
                        <td colspan="9">
                            <center>No Record Found</center>
                        </td>
                    </tr>
                @endif
            </tbody>
            <tfoot>
            <tr>
                <td colspan="9">
                    @include('elements.pagination.tabs-pagination', ['title' => 'All marriages','data' => $dataArray['cancelled_marriages']])
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    