
   <table class="table align-middle theme-table">
      <thead>
         <tr>
            <th>Invoice number</th>
            <th>Date create</th>
            <th>Ceremony date</th>
            <th>Couple</th>
            <th>Net Fee</th>
            <th>Status</th>
            <th>Payment date</th>
            <th></th>
            <th></th>
         </tr>
      </thead>
      <tbody>
      @php $total_fee = 0; @endphp
         @foreach($data as $result)
            @php $total_fee += round($result['amount'],0);@endphp
            <tr>
            
               <td class="body-2 neutral-100 text-center">{{$result->invoice_number}}</td>
               <td class="body-2 neutral-100 text-center">{{date('M d, Y',strtotime($result->created_at))}}</td>
               <td class="body-2 neutral-100 text-center">{{date('M d, Y',strtotime($result->booking->booking_date))}}</td>
               <td class="body-2 neutral-100 text-center">{{$result->booking->first_couple_name}} & {{$result->booking->second_couple_name}}</td>
               

               <td class="body-2 neutral-100">${{$total_fee}}</td>
               <td style="min-width:120px;">
                  <span class="text-nowrap cursor-pointer  status {{strtolower(config('ceremonyStatus.booking_status.'.$result->booking->status) )}}"> <a role="button" data-bs-toggle="modal" data-bs-target="#change_status_modal" onclick="appendId('{{$result->booking->id}}','id')">{{config('ceremonyStatus.booking_status.'.$result->booking->status) }}  </a></span>
               </td>
               <td class="body-2 neutral-100"></td>
               <td>
                  <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal" onclick="appendData('{{$result}}')">View</a>
               </td>
               <td>
                  <a href="{{url('download-invoice',$result->id)}}" class="table-link">Download</a>
               </td>
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
            <td colspan="9">
               @include('elements.pagination.pagination', ['title' => 'All Invoices','data' => $data,'id' => '#celebrantInvoices','class' => '#celebrantInvoices'])
            </td>
         </tr>
      </tfoot>
   </table>

