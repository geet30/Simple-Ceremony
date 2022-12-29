
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
                @foreach ($dataArray['all_marriages'] as $result)
             
                
                    @include('elements.celebrant.marriage.common-tr-view', ['title' => 'All marriages','data' => $dataArray['all_marriages']])
                    
                @endforeach
                @if($dataArray['all_marriages']->total()==0)
                    <tr>
                        <td colspan="9">
                            <center>No Record Found</center>
                        </td>
                    </tr>
                @endif
            </tbody>
            <tfoot>
            <tr>
                <td colspan="9">
                    @include('elements.pagination.tabs-pagination', ['title' => 'All marriages','data' => $dataArray['all_marriages']])
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    