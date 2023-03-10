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
               @if(count($data) > 0)
                  @foreach($data as $request)
                     <tr>
                        <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('location.view',$request->id)}}"></a>{{ $request->username}}</td>
                        <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('location.view',$request->id)}}"></a>{{ $request->name}}</td>
                        <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('location.view',$request->id)}}"></a>{{$request->direction}}</td>
                        <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('location.view',$request->id)}}"></a>{{ $request->post_code}}</td>
                        <td class="body-2 neutral-100 table-anchor-link"><a href="{{route('location.view',$request->id)}}"></a>{{ (isset($request->address)) ? $request->address :'' }} {{(isset($request->town)) ? ', '.$request->town :'' }} {{(isset($request->state)) ? ', '.$request->state :'' }}</td>
                        @if($request->status == 0)
                           <td><a class="table-link button-1"> <a class="btn edit-btn" href="{{route('locations.create',$request->id)}}">Confirm</a></td>
                        @endif
                        @if($request->status == 2)
                           <td><a class="table-link button-1"> <a class="btn edit-btn"  href="#">Declined</a></td>
                        @endif
                        @if($request->status == 1)
                           <td><a class="table-link button-1"> <a class="btn edit-btn"  href="
                            #">Approved</a></td>
                        @endif
                     
                        <td><a class="table-link button-1"  href="{{route('location.view',$request->id)}}"> View info</a> </td>
                     </tr>
                  @endforeach
               @else
                  <td colspan="7"><center>No record found </center></td>
               @endIf
               
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="8">
                    
                     @include('elements.pagination.pagination', ['title' => 'All Requests', 'id' => '#requests', 'class'=>'.requests','data' => $data])
            
                  </td>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>

