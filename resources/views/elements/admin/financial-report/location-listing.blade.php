@include('elements.admin.financial-report.location-cards')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table align-middle theme-table">
                <thead>
                    <tr>
                        <th>Couple names</th>
                        <th>Revenues</th>
                        <th>CofGS</th>
                        <th>Margin</th>
                        <th>Partners</th>
                        <th>Partner costs</th>
                        <th>Celebrants</th>
                        <th>Celebrants costs</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $jobs_count = 0; ?>
                    @foreach($data as $bookings)


                    <?php
                    $partner_name = [];
                    $partner_fee = [];

                    $celebrant = \App\Models\User::where('id', $bookings->celebrant_id)->value('name');

                    $jobs_pending = 0;
                    $net_fee_settled = $net_fee_pending = $admin_fee_adjustment = $revenues = $CofGS = $Margin = 0;
                    $price_your_fee =$price_admin_fee = $price_location_fee =0; 
                    $price_info = json_decode($bookings->price_info);
                    $price_your_fee =(isset($price_info->your_fee ))?$price_info->your_fee :0;
                    $price_admin_fee = (isset($price_info->admin_fee )) ? $price_info->admin_fee :0;
                    $price_location_fee=(isset($price_info->location_fee )) ?$price_info->location_fee :0;

                    $revenues += $price_your_fee + $price_admin_fee + $price_location_fee; 

                    $admin_fee_adjustment +=  $price_admin_fee -  $bookings->type_of_ceremony->fee_adjustment;
                    $CofGS = $revenues - $admin_fee_adjustment;
                    $Margin = $revenues -  $CofGS;
                    if ($bookings->status != 7) {
                        $jobs_pending = $jobs_count++; // Job still pending is the number of jobs that do not have a status of "Settled"
                        $net_fee_pending  += $price_your_fee;
                        // Net fee pending is the amount that is still owed to the celebrant ie not "settled"
                    } else {
                        $net_fee_settled = $price_your_fee;
                    }
                    ?>



                    <tr style="vertical-align: baseline;">
                        <td class="body-2 neutral-100" style="min-width:250px;">{{$bookings->first_couple_name}} & {{$bookings->second_couple_name}}</td>
                        <td class="body-2 neutral-100" style="min-width:150px;">${{ number_format($revenues,2)}}</td>
                        <td class="body-2 neutral-100" style="min-width:150px;">${{number_format($CofGS,2)}}</td>
                        <td class="body-2 neutral-100" style="min-width:150px;">${{number_format($Margin,2)}}</td>
                        <td class="body-2 neutral-100" style="min-width:150px;">
                            @foreach($bookings->booking_addons as $partner)
                            @php echo '<p>'.$partner->partner->name.'</p>'; @endphp

                            @endforeach
                        </td>
                        <td class="body-2 neutral-100" style="min-width:150px;">

                            @foreach($bookings->booking_addons as $partner)
                            @foreach($partner->packages as $package)

                            @php echo '<p>$'.$package->partner_fee.'</p>'; @endphp
                            @endforeach
                            @endforeach</td>
                        <td class="body-2 neutral-100" style="min-width:100px;">{{$celebrant}}</td>
                        <td class="body-2 neutral-100" style="min-width:100px;">${{number_format($price_info->your_fee,2)}}</td>
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
                            @include('elements.pagination.pagination', ['title' => 'All Financial location report', 'id' => '#financialReportLocationListing', 'class'=>'.financialReportLocationListing','data' => $data])
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>