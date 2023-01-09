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
                <?php
                $status_class = 'pending';
                if ($enq->status == 1) {
                    $status = 'Booked';
                    $status_class = 'approved';
                } elseif ($enq->status == 2) {
                    $status = 'No interest';
                    $status_class = 'rejected';
                } elseif ($enq->status == 0) {
                    $status = 'Follow up';
                    $status_class = 'waiting-approval';
                }
                $reffer = '';
                if ($enq->reffer_by == 1) {
                    $reffer = 'Social Media';
                } elseif ($enq->status == 2) {
                    $reffer = 'Website';
                } elseif ($enq->status == 3) {
                    $reffer = 'Other';
                }
                ?>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:130px;">
                        {{ $enq->enquiry_date }}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width:150px;">{{ $enq->couple_one }}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width:150px;">{{ $enq->couple_two }}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width:150px;">{{ $enq->email }}</td>
                    <td class="body-2 neutral-100 text-center" style="min-width:150px;">
                        {{ $enq->phone_code != '' ? '+' : '' }}{{ $enq->phone_code }}{{ $enq->phone_code != '' ? '-' : '' }}{{ $enq->phone }}
                    </td>
                    <td class="body-2 neutral-100 text-center" style="min-width:130px;">{{ $reffer }}
                    </td>
                    <td class="body-2 neutral-100 text-center" style="min-width:130px;">{{ $enq->marriage_date }}
                    </td>
                    <td style="min-width:150px;" class="text-center">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle {{ $status_class }}" type="button"
                                id="Waiting-for-approval-tab_{{ $enq->id }}" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span id="change_status-{{ $enq->id }}">{{ $status }}</status>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item waiting-approval"
                                        onClick="changeStatus('/change-enquiry-status',{{ $enq->id }},0,'','','')">Follow
                                        up</a></li>
                                <li><a class="dropdown-item approved"
                                        onClick="changeStatus('/change-enquiry-status',{{ $enq->id }},1,'','','')">Booked</a>
                                </li>
                                <li><a class="dropdown-item rejected"
                                        onClick="changeStatus('/change-enquiry-status',{{ $enq->id }},2,'','','')">No-interest</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <span class="status {{ $status_class }}">{{ $status }}</span> --}}
                    </td>
                    <td style="min-width:150px;" class="text-center p-3">
                        <a href="/enquiries/{{ $enq->id }}" class="table-link">Read enquiry</a>
                    </td>
                </tr>
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
                        'data' => $dataArray['all_enquries'],
                    ])
                </td>
            </tr>
        </tfoot>
    </table>
</div>
