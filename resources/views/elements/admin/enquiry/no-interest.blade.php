<div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th>Enquiry date</th>
                <th class="text-center">Name <br>person 1</th>
                <th class="text-center">Name <br>person 2</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone number</th>
                <th class="text-center">Reference by</th>
                <th class="text-center">Date marriage</th>
                <th class="text-center">Status</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataArray['noInterest_enquries'] as $enq)
                @include('elements.admin.enquiry.common-tr-view', ['title' => 'No Interest enquiries','data' => $dataArray['noInterest_enquries']])  
            @endforeach
            <?php if($dataArray['noInterest_enquries']->total()==0){?>
            <tr>
                <td colspan="9">
                    <center>No Record Found</center>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">
                    @include('elements.pagination.tabs-pagination', [
                        'data' => $dataArray['noInterest_enquries'],
                    ])
                </td>
            </tr>
        </tfoot>
    </table>
</div>
