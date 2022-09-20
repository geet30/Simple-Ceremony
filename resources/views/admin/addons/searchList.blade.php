@if($table == 'partner_products')
<div class="table-responsive">
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
            @if (count($addons) > 0)


                <?php $count = 0; ?>
                @foreach ($addons as $addon)
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
                                    id="dropdownMenuButton1-{{ $addon->id }}" data-bs-toggle="dropdown"
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

                            <a onClick="changeStatus('/change-status',{{ $addon->id }},1,'','tab_id','addon')"
                                class="table-link me-3">Confirm</a>
                            <a href="{{ route('addons.detail', $addon->id) }}" class="table-link">View info</a>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="6">
                    <center>{{ __('translation.noRecord') }} </center>
                </td>
            </tr>
            @endIf
        </tbody>
        <tfoot>

            <tr>
                <td colspan="6">
                    <?php $data = []; ?>
                    @include('elements.pagination.tabs-pagination', [
                        'data' => $addons,
                    ])


                </td>
            </tr>
        </tfoot>
    </table>
</div>
@else
    @if (count($addons) > 0)
        @foreach ($addons as $counter => $addon)
            <li class="d-flex flex-wrap mb-4">
                <label class="small-text2">Add-on {{ $counter + 1 }}</label>
                <span class="body-1 neutral-100 me-4 mb-3">{{ ucfirst($addon->name) }}</span>
                <div class="d-flex">
                    <a href="{{ route('addons.destroy', $addon->id) }}" class=""><img
                    class="me-2" src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                    <a class="edit-addon" class="ms-3" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvaseditaddons" data-name="{{ $addon->name }}"
                        data-id="{{ $addon->id }}" aria-controls="offcanvaseditaddons"><img
                            src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>


                </div>
            </li>
        @endforeach
    @else
        <li>

            <center>No record found </center>

        </li>
    @endIf

@endif
