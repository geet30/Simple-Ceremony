
    <div class="table-responsive">
        <table class="table align-middle theme-table">
            <thead>
            <tr>
                <th>Ceremony date</th>
                <th>Time</th>
                <th>Type of ceremony</th>
                <th>Ceremony Status</th>
                <th>Location</th>
                <th>Couples Name</th>            
                <th>Phone Number</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $result)
                
                    @include('elements.celebrant.marriage.common-tr-view', ['title' => 'All marriages','data' => $data])
                    
                @endforeach
                @if($data->total()==0)
                    <tr>
                        <td colspan="8">
                            <center>No Record Found</center>
                        </td>
                    </tr>
                @endif
            </tbody>
            <tfoot>
            <tr>
                <td colspan="10">
                    @include('elements.pagination.tabs-pagination', ['title' => 'All marriages','data' => $data])
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    @include('pages.alert.change_status')