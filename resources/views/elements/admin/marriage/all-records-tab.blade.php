
    <div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
        <tr>
            <th>Preferred couple’s name</th>
            <th>Booking created</th>
            <th>Progress</th>
            <th>Marriage celebrant</th>
            <th>Location</th>
            <th>Wedding date</th>
            <th>Status</th>
            <th>Days till marriage</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($dataArray['all_marriages'] as $result)
            
                <tr>
                    <td style="min-width:160px" class="body-2">{{$result->booking->first_couple_name}} & {{$result->booking->second_couple_name}}</td>
                    <td  style="min-width:130px" class="body-2">{{date('M d, Y',strtotime($result->booking->created_at))}}</td>
                    <td style="min-width:50px" class="body-2" >{{config('ceremonyStatus.booking_progress.'.$result->booking->status) }}  <span class="align-self-center ms-1 info-icon">
                        <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
                        </span>
                    </td>
                    <td class="body-2 neutral-100" style="min-width:140px;">
                        
                        @if(isset($result->booking->celebrant->first_name) && $result->booking->celebrant->first_name!=null)
                            {{ $result->booking->celebrant->first_name}}
                        @else
                        <a href="" data-bs-toggle="offcanvas" data-bs-target="#marriage-celebrant"  class="text-decoration-underline  add-link assign_celebrant" data-id="{{$result->booking->id}}"> Assign marriage celebrant</a>
                        @endif
                        
                        
                    </td>
                    <td class="body-2 neutral-100" style="min-width:130px;">
                        {{$result->booking->location->name}}
                    </td>
                    <td class="body-2 neutral-100" style="min-width:130px;">{{date('M d,Y',strtotime($result->booking->booking_date))}}</td>
                    <td style="min-width:120px;">
                    
                        <span class="status {{strtolower(config('ceremonyStatus.booking_status.'.$result->booking->status) )}}"> {{config('ceremonyStatus.booking_status.'.$result->booking->status) }}  </span>
                    </td>
                    
                    <td  style="min-width:60px;" class="body-2 neutral-100">
                    <?php 
                        
                        $to=date_create(date('Y-m-d'));
                        $from=date_create($result->booking->booking_date);
                        $diff=date_diff($to,$from);
                        echo $diff->format('%a days');
                    ?> 
                    </td>
                    <td ></td>
                    <td style="min-width:100px;">
                        <a href="{{route('marriage.detail',$result->booking->id)}}" class="table-link">View info</a>
                    </td>
                </tr>
                
            @endforeach
            @if($dataArray['all_marriages']->total()==0)
                <tr>
                    <td colspan="10">
                        <center>No Record Found</center>
                    </td>
                </tr>
            @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="10">
                @include('elements.pagination.tabs-pagination', ['title' => 'All marriages','data' => $dataArray['all_marriages']])
            </td>
        </tr>
        </tfoot>
    </table>
    </div>