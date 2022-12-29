<div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
        <tr>
            <th style="min-width:160px">Preferred couple’s name</th>
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
           
            @foreach($data as $result)
         
                @include('elements.admin.marriage.common-tr-view', ['title' => 'All marriages','data' => $data])

            
                
            @endforeach
            @if($data->total()==0)
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
                @include('elements.pagination.tabs-pagination', ['title' => 'All marriages', 'data' => $data])
            </td>
        </tr>
        </tfoot>
    </table>
</div>