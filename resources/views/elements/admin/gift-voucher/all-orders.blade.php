
<div class="table-responsive ">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th>Date purchased</th>
                <th>Purchaser’s name</th>
                <th>Purchaser’s email address</th>
                <th>Amount</th>
                <th>Gift voucher number</th>
            </tr>
        </thead>
        <tbody>
        @if(count($data) > 0)
            @foreach($data as $result)
           
            <tr style="vertical-align: baseline;">
                <td class="body-2 neutral-100" style="min-width:250px;">{{date('M d,Y',strtotime($result->created_at))}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">{{$result->first_couple_name}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">{{$result->user->email}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                <td class="body-2 neutral-100" style="min-width:150px;">{{$result->booking_coupon->voucher_number}}
                </td>
            </tr>
            @endforeach
        @else
                <td colspan="5"><center>No record found </center></td>
        @endIf
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    @include('elements.pagination.pagination', ['title' => 'All orders', 'id' => '#orders', 'class'=>'.orders','data' => $data])  
                </td>
            </tr>
        </tfoot>
    </table>
</div>