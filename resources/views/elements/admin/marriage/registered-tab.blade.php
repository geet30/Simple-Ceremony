
    <div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
        <tr>
            <th>Preferred couple’s name</th>
            <th>Type of Ceremony</th>
            <th>Booking created</th>
            <th>Progress</th>
            <th>Marriage celebrant</th>
            <th>Location</th>
            <th>Ceremony date</th>
            <th>No. of <span class="text-nowrap">Add-Ons</span></th>
            <th>Status</th>
            <th>Days till marriage</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($dataArray['registered_marriages'] as $result)
        
                @include('elements.admin.marriage.common-tr-view', ['title' => 'All marriages','data' => $dataArray['registered_marriages']])

            @endforeach
            @if($dataArray['registered_marriages']->total()==0)
                <tr>
                    <td colspan="12">
                        <center>No Record Found</center>
                    </td>
                </tr>
            @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="12">
                @include('elements.pagination.tabs-pagination', ['title' => 'All marriages','data' => $dataArray['registered_marriages']])
            </td>
        </tr>
        </tfoot>
    </table>
    </div>