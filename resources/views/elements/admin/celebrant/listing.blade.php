 <table class="table align-middle theme-table">
     <thead>
         <tr>
             <th>Name</th>
             <th>Phone number</th>
             <th>Email</th>
             <th>Locations available</th>
             <th>Status</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
         @if (count($celebrants) > 0)
             @foreach ($celebrants as $celebrant)
                 @php
                     $status_class = 'approved';
                     if ($celebrant->status == 1) {
                         $status = 'Active';
                         $status_class = 'approved';
                     } elseif ($celebrant->status == 0) {
                         $status = 'In-active';
                         $status_class = 'rejected';
                     }
                 @endphp
                 <tr>
                     <td class="body-2 neutral-100 table-anchor-link" style="min-width:180px;"><a href="/marriage-celebrants/{{ $celebrant->id }}"></a>
                        {{ $celebrant->first_name }}
                         {{ $celebrant->surname }}</td>
                     <td class="body-2 neutral-100 table-anchor-link" style="min-width:180px;"><a href="/marriage-celebrants/{{ $celebrant->id }}"></a>
                         {{ $celebrant->country_code != '' ? '+' : '' }}{{ $celebrant->country_code }}{{ $celebrant->country_code != '' ? '-' : '' }}{{ $celebrant->phone }}
                     </td>
                     <td class="body-2 neutral-100 table-anchor-link" style="min-width:250px;"><a href="/marriage-celebrants/{{ $celebrant->id }}"></a>{{ $celebrant->email }}</td>
                     <td class="body-2 neutral-100 table-anchor-link" style="min-width:200px;">
                        <a href="/marriage-celebrants/{{ $celebrant->id }}"></a>
                         <ul class="m-0 p-0 ">
                             @foreach ($celebrant->celebrantLocations as $location)
                                 <li>{{ $location->location->name }}</li>
                             @endforeach
                         </ul>
                     </td>
                     <td style="min-width:150px;">
                         <div class="dropdown table-dropdown">
                             <button class="btn dropdown-toggle {{ $status_class }}" type="button"
                                 id="dropdownMenuButton1-{{ $celebrant->id }}" data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                 <span id="change_status-{{ $celebrant->id }}">{{ $status }}</span>
                             </button>
                             <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                 <li><a class="dropdown-item approved"
                                         onClick="changeStatusWithouttab('/change-user-status',{{ $celebrant->id }}, 1)">Active</a>
                                 </li>
                                 <li><a class="dropdown-item rejected"
                                         onClick="changeStatusWithouttab('/change-user-status',{{ $celebrant->id }}, 0)">In-active</a>
                                 </li>
                             </ul>
                         </div>
                     </td>
                     <td style="min-width:150px; " class="text-end">
                         <a href="/marriage-celebrants/{{ $celebrant->id }}" class="table-link">View info</a>
                     </td>
                 </tr>
             @endforeach
         @else
             <tr>
                 <td colspan="6">
                     <center>No records found</center>
                 </td>
             </tr>
         @endIf
     </tbody>
     <tfoot>
         <tr>
             <td colspan="8">
                 @include('elements.pagination.pagination', [
                     'title' => 'All Celebrants',
                     '' => '',
                     'data' => $celebrants,
                     'id' => '#celebrantListing',
                     'class' => '.celebrantListing',
                 ])
             </td>
         </tr>
     </tfoot>
 </table>
