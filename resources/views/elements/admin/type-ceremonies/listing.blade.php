<table class="table align-middle theme-table">
    <thead>
        <tr>
            <th>Type of Ceremonies</th>
            <th>Additional Informations</th>
            <th>Conditions</th>
            <th>Fee Adjustments</th>
            <th></th>
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
           
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5">
                @include('elements.pagination.pagination', ['title' => 'All Type Of Ceremonies', 'id' => '#typeCeremoniesListing', 'class'=>'.typeCeremoniesListing','data' => $data])
            </td>
        </tr>
    </tfoot>
</table>