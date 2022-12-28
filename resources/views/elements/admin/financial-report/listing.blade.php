@include('elements.admin.financial-report.cards')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table align-middle theme-table">
                <thead>
                    <tr>
                        <th>Locations</th>
                        <th>Revenues</th>
                        <th>CofGS</th>
                        <th>Margin</th>
                        <th>No. of event</th>
                        <th>Net Fees settled</th>
                        <th>Net Fees pending</th>
                        <th>Jobs still pending</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($data as $value)
                    

                        <?php $jobs_count = $admin_fee_adjustment = $jobs_pending = 0;
                        $net_fee_settled = $net_fee_pending  = $revenues = $CofGS = $Margin = 0;$price_your_fee =$price_admin_fee = $price_location_fee =0; ?>
                       
                        @foreach($value->booking as $bookings)
                        <?php 
                        $price_info = json_decode($bookings->price_info);
                        $price_your_fee =(isset($price_info->your_fee ))?$price_info->your_fee :0;
                        $price_admin_fee = (isset($price_info->admin_fee )) ? $price_info->admin_fee :0;
                        $price_location_fee=(isset($price_info->location_fee )) ?$price_info->location_fee :0;
                        
                        $revenues +=  $price_your_fee + $price_admin_fee + $price_location_fee; 

                        $admin_fee_adjustment += $price_admin_fee -  $bookings->type_of_ceremony->fee_adjustment;                      
                        if ($bookings->status != 7) {
                            $jobs_pending = $jobs_count++;
                            $net_fee_pending  += $price_your_fee;
                        } else {
                            $net_fee_settled = $price_your_fee;
                        }
                        ?>
                        @endforeach
                        <?php 
                          $CofGS = $revenues - $admin_fee_adjustment;
                          $Margin = $revenues -  $CofGS;
                        ?>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:250px;">
                                <a href="{{url('financial-report/locations',$value->id)}}" role="button" class="table-link">{{$value->name}}</a>
                            </td>
                            <td class="body-2 neutral-100" style="min-width:150px;">${{ number_format($revenues,2)}}</td>
                            <td class="body-2 neutral-100" style="min-width:150px;">${{ number_format($CofGS,2)}}</td>
                            <td class="body-2 neutral-100" style="min-width:150px;">${{ number_format($Margin,2)}}</td>
                            <td class="body-2 neutral-100" style="min-width:150px;">{{$value->booking->count()}}</td>
                            <td class="body-2 neutral-100" style="min-width:150px;">${{ number_format($net_fee_settled,2)}}</td>
                            <td class="body-2 neutral-100" style="min-width:100px;">${{ number_format($net_fee_pending,2)}}</td>
                            <td class="body-2 neutral-100" style="min-width:100px;">{{ $jobs_pending}}</td>
                        </tr>
                       
                    @endforeach
                    @if($data->total()==0)
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
                            @include('elements.pagination.pagination', ['title' => 'All Financial report', 'id' => '#financialReportListing', 'class'=>'.financialReportListing','data' => $data])
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>