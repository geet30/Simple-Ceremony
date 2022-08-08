<div class="row py-31">
   <div class="col-12">
      <div class="table-responsive">
         <table class="table align-middle theme-table">
            <thead>
               <tr>
                  <th>Name celebrant</th>
                  <th>Location</th>
                  <th>Regency</th>
                  <th>ZIP</th>
                  <th>Address</th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               @foreach($data as $request)
                  <tr>
                     <td style="min-width:150px" class="body-2 neutral-100">{{ $request->name}}</td>
                     <td  style="min-width:200px" class="body-2 neutral-100">{{ $request->location_name}}</td>
                     <td  class="body-2 neutral-100" >{{$request->specific_location}}</td>
                     <td  class="body-2 neutral-100">{{ $request->post_code}}</td>
                     <td  style="min-width:300px" class="body-2 neutral-100">{{ $request->street_address}},{{$request->suburb}},{{$request->state}},</td>
                        <td  style="min-width:100px"><a class="table-link button-1"> <a class="btn edit-btn "  href="">Confirm</a></td>
                     <td  style="min-width:150px"><a class="table-link button-1"  href="{{route('location/view',$request->id)}}"> View info</a> </td>
                  </tr>
               @endforeach
               
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="8">
                    
                     @include('elements.pagination.pagination', ['title' => 'All Requests', '' => '', 'data' => $data])
            
                  </td>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>

