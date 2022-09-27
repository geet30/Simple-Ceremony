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
       
        @php $total_fee = 0; @endphp
            @foreach ($data as $result)
           
                
            @php $total_fee += round($result['amount'],0);@endphp
                
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                        </div>
                    </td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 150px;">{{$result->invoice_number}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 150px;">{{date('M d, Y',strtotime($result->created_at))}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 150px;"> {{ $result->recipient_name }}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 100px;">{{date('M d, Y',strtotime($result->booking->booking_date))}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 100px;">{{$result->booking->first_couple_name}} & {{$result->booking->second_couple_name}}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width: 100px;">${{$total_fee}}</td>
                    <td style="min-width:120px;">
                            <span class="text-nowrap cursor-pointer  status {{strtolower(config('ceremonyStatus.booking_status.'.$result->booking->status) )}}"> <a role="button" data-bs-toggle="modal" data-bs-target="#change_status_modal" onclick="appendId('{{$result->booking->id}}','id')">{{config('ceremonyStatus.booking_status.'.$result->booking->status) }}  </a></span>
                    </td>
                    {{-- @if($result->status == 7) --}}
                    <td style="min-width: 50px;" class="p-3 text-center">
                        <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal" onclick="appendData('{{$result}}','result')"  data-result="{{
                            $result
                        }}">View</a>
                    </td>
                    <td style="min-width: 90px;" class="p-3 text-center">
                        <a href="{{url('download-invoice',$result->id)}}" class="table-link">Download</a>
                    </td>
                    <td style="min-width: 80px;" class="p-3 text-center">
                        <a role="button" data-bs-toggle="modal"     data-bs-target="#delete_alert" class="table-link delete_append_id" data-id="{{ $result->id }}">Delete</a>
                    </td>
                    {{-- @endif --}}
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
@include('pages.alert.invoice_delete')