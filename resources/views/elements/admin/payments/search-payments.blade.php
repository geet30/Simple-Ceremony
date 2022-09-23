<div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th></th>
                <th class="text-center">Invoice<br>number</th>
                <th class="text-center">Date created</th>
                <th class="text-center">Marriage<br>celebrant</th>
                <th class="text-center">Date of<br>ceremony</th>
                <th class="text-center">Name of<br>couple</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $result)
                @php $total_fee = 0; @endphp
                @foreach($result->booking_payments as $amount)
                    @php $total_fee += round($amount['amount'],0);@endphp
                @endforeach
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                        </div>
                    </td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#0124264674</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 150px;">{{date('M d, Y',strtotime($result->created_at))}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 150px;"> {{ (isset($result->celebrant->first_name)) ?? ''}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 100px;">{{date('M d, Y',strtotime($result->booking_date))}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 100px;">{{$result->first_couple_name}} & {{$result->second_couple_name}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 100px;">${{$total_fee}}</td>
                    <td style="min-width:120px;">
                            <span class="text-nowrap cursor-pointer  status {{strtolower(config('ceremonyStatus.booking_status.'.$result->status) )}}"> <a role="button" data-bs-toggle="modal" data-bs-target="#change_status_modal" onclick="appendId('{{$result->id}}','id')">{{config('ceremonyStatus.booking_status.'.$result->status) }}  </a></span>
                    </td>
                    @if($result->status == 7)
                    <td style="min-width: 50px;" class="p-3 text-center">
                        <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                    </td>
                    <td style="min-width: 90px;" class="p-3 text-center">
                        <a href="#" class="table-link">Download</a>
                    </td>
                    <td style="min-width: 80px;" class="p-3 text-center">
                        <a href="#" class="table-link">Delete</a>
                    </td>
                    @endif
                </tr>  
            @endforeach
            @if($data->total()==0)
                <tr>
                    <td colspan="11">
                        <center>No Record Found</center>
                    </td>
                </tr>
            @endif        
           
        </tbody>
        <tfoot>
            <tr>
                <td colspan="11">
                    @include('elements.pagination.tabs-pagination', ['title' => 'All payments','data' => $data])
                </td>
            </tr>
        </tfoot>
    </table>
</div>