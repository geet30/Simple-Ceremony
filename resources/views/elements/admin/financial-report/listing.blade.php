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
        <tr>
            <td class="body-2 neutral-100" style="min-width:250px;">
                <a href="{{url('financial-report/locations',$value->id)}}" role="button" class="table-link">{{$value->name}}</a>
            </td>
            <td class="body-2 neutral-100" style="min-width:150px;">$248,492</td>
            <td class="body-2 neutral-100" style="min-width:150px;">$242,492</td>
            <td class="body-2 neutral-100" style="min-width:150px;">$6,158</td>
            <td class="body-2 neutral-100" style="min-width:150px;">{{$value->booking->count()}}</td>
            <td class="body-2 neutral-100" style="min-width:150px;">$142,000</td>
            <td class="body-2 neutral-100" style="min-width:100px;">154</td>
            <td class="body-2 neutral-100" style="min-width:100px;">$100,492</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="9">
                @include('elements.pagination.pagination', ['title' => 'All Financial report', 'id' => '#financialReportListing', 'class'=>'.financialReportListing','data' => $data])
            </td>
        </tr>
    </tfoot>
</table>