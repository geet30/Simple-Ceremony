<div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th>Name marriage celebrant</th>
                <th>Contact</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @if (count($celebrants_locations) > 0)
                @foreach ($celebrants_locations as $celebrants)
                    <tr>
                        <td style="min-width:260px" class="body-2" class="body-2">{{ $celebrants->user->first_name }}</td>
                        <td style="min-width:200px" class="body-2">
                            +{{ $celebrants->user->country_code }}{{ $celebrants->user->phone }}</td>
                        <td style="min-width:180px"><a class="table-link body-2"
                                href="/marriage-celebrants/{{ $celebrants->celebrant_id }}">See availability</a></td>
                        <td style="min-width:200px">
                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete_celebrant_alert"
                                class="table-link remove_celebrant" data-id="{{ $celebrants->id }}">Remove from list</a>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No record found</td>
                </tr>
            @endif


        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    @include('elements.pagination.pagination', [
                        'title' => 'Celebrants',
                        '' => '',
                        'data' => $celebrants_locations,
                        'id' => '#celebrants',
                        'class' => '.celebrants',
                    ])
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@include('elements.admin.location.delete-celebrant-alert')
