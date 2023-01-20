<table class="table align-middle theme-table">
      <thead>
         <tr>
            <th>Location</th>
            <th>Regency</th>
            <th>ZIP code</th>
            <th>Address</th>
            <th>Status</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
        
         @if(count($data) > 0)
         @foreach($data as $request)
         <?php
         
            $status_class = 'pending';
            if ($request->status == 1) {
               $status = 'Active';
               $status_class = 'active';
            } elseif ($request->status == 2) {
               $status = 'Inactive';
               $status_class = 'inactive';
            } elseif ($request->status == 0) {
               $status = 'Pending';
               $status_class = 'pending';
            }
            
            ?>
            <tr>
               <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('all-locations.show',[$request->id, 'table' => $request->table ])}}"></a>{{ $request->name}}</td>
               <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('all-locations.show',[$request->id, 'table' => $request->table ])}}"></a>{{$request->direction}}</td>
               <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('all-locations.show',[$request->id, 'table' => $request->table ])}}"></a>{{ $request->post_code}}</td>
               <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('all-locations.show',[$request->id, 'table' => $request->table ])}}"></a>{{ (isset($request->address)) ? $request->address :'' }} {{(isset($request->town)) ? ', '.$request->town :'' }} {{(isset($request->state)) ? ', '.$request->state :'' }}</td>
               <td style="min-width:180px;" class="table-anchor-link">
                  <a href="{{route('all-locations.show',[$request->id, 'table' => $request->table ])}}"></a>
                  <span class="status {{$status_class}}">{{$status}}</span>
               </td>
               <td  style="min-width:300px;">
                  <ul class="mb-0 pl-0">
                  
                     <a href="{{route('all-locations.show',[$request->id, 'table' => $request->table ])}}" class="table-link me-2">Open</a>
                     @if($request->celebrant_id == auth()->user()->id)
                     <a href="/all-locations/{{ $request->id }}/edit" class="table-link me-2">Edit</a>
                     @endif
                     <a href="" role="button" data-bs-toggle="modal" data-bs-target="#delete_celebrant_location" class="table-link delete_append_id" data-id="{{ $request->id }}" data-request_id="{{ $request->custom_location_id }}">Delete</a>
                  </ul>
               </td>
            </tr>
         @endforeach
         @else
            <td colspan="7"><center>No record found </center></td>
         @endIf
         
      </tbody>
      <tfoot>
         <tr>
            <td colspan="9">
            @include('elements.pagination.pagination', [
                  'title' => 'Locations',
                  '' => '',
                  'data' => $data,
                  'id' => '#celebrantLocations',
                  'class' => '.celebrantLocations',
               ])
            </td>
         </tr>
      </tfoot>
   </table>