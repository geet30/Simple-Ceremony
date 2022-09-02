<div class="table-responsive add-on-approved-tab_searchList" id="add-on-approved-tab_searchList">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th>Add-ons</th>
                <th>Category</th>
                <th>Description</th>
                <th>Name partners</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; ?>
            @foreach ($approved_addons as $addon)
                <?php $count++;
                $status_class = 'waiting-approval';
                if ($addon->status == 1) {
                    $status = 'Approved';
                    $status_class = 'approved';
                } elseif ($addon->status == 2) {
                    $status = 'Rejected';
                    $status_class = 'rejected';
                } elseif ($addon->status == 0) {
                    $status = 'Waiting For Approval';
                    $status_class = 'waiting-approval';
                }
                
                ?>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:200px;">{{ $addon->product_name }}</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">{{ $addon->addon->name }}</td>
                    <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">
                        @if (isset($addon->package[0]) && !empty($addon->package[0]))
                            {{ $addon->package[0]->location_description }}
                        @endif
                    </td>
                    <td class="body-2 neutral-100">{{$addon->user->contact_name}}</td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle {{ $status_class }}" type="button"
                                id="add-on-approved-tab_{{ $addon->id }}" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span id="change_status-{{ $addon->id }}">{{ $status }}</status>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item waiting-approval"
                                        onClick="changeStatus('/change-status',{{ $addon->id }},0,'','tab_id','addon')">Waiting
                                        for approval</a></li>
                                <li><a class="dropdown-item approved"
                                        onClick="changeStatus('/change-status',{{ $addon->id }},1,'','tab_id','addon')">Approved</a>
                                </li>
                                <li><a class="dropdown-item rejected"
                                        onClick="changeStatus('/change-status',{{ $addon->id }},2,'','tab_id','addon')">Rejected</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:230px;">
                        <a href="{{ route('addons.detail', $addon->id) }}" class="table-link">View info</a>
                    </td>
                </tr>
            @endforeach
            <?php if($count==0){?>
            <tr>
                <td colspan="6">
                    <center>No Record Found</center>
                </td>
            </tr>
            <?php } ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <?php $data = []; ?>
                    @include('elements.admin.addons.pagination', ['data' => $approved_addons])


                </td>
            </tr>

        </tfoot>
    </table>
</div>
