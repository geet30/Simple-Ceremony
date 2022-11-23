<table class="table align-middle theme-table">
    <thead>
        <tr>
            <th>Couple names</th>
            <th>Revenues</th>
            <th>Costs</th>
            <th>Margin</th>
            <th>Partners</th>
            <th>Partner costs</th>
            <th>Celebrants</th>
            <th>Celebrants costs</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $value)
            @foreach($value->booking as $result)
            <tr style="vertical-align: baseline;">
                <td class="body-2 neutral-100" style="min-width:250px;">{{$result->first_couple_name}} & {{$result->second_couple_name}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">$1,492</td>
                <td class="body-2 neutral-100" style="min-width:150px;">$1292</td>
                <td class="body-2 neutral-100" style="min-width:150px;">$200</td>
                <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Sarah Jewelry<br>Alan rent
                </td>
                <td class="body-2 neutral-100" style="min-width:150px;">$290<br>$480<br>$392</td>
                <td class="body-2 neutral-100" style="min-width:100px;">Michael</td>
                <td class="body-2 neutral-100" style="min-width:100px;">$130</td>
            </tr>
            @endforeach
       @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="9">
                 @include('elements.pagination.pagination', ['title' => 'All Financial location report', 'id' => '#financialReportLocationListing', 'class'=>'.financialReportLocationListing','data' => $data])  
            </td>
        </tr>
    </tfoot>
</table>