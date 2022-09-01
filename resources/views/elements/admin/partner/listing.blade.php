<table class="table align-middle theme-table">
   <thead>
      <tr>
         <th>Name</th>
         <th>Business category</th>
         <th>Phone number</th>
         <th>Email</th>
         <th></th>
      </tr>
   </thead>
   <tbody>
      @if(count($data) >  0)
         @foreach($data as $result)
         
            <tr>
               <td style="min-width:260px" class="body-2" class="body-2">{{$result['name']}}</td>
               @foreach($result->partnerProducts as $addons)
                  <td  style="min-width:200px" class="body-2">{{$addons->addon->name}}</td>
               @endforeach
               <td  style="min-width:180px" class="body-2">+{{$result['country_code']}}{{$result['phone']}}</td>
               <td  style="min-width:180px" class="body-2">{{$result['email']}}</td>
               <td  style="min-width:180px">
               @foreach($result->partnerProducts as $product_id)
                  <a href="{{ url('partner/details',$product_id['id'])}}" class="table-link body-2">View info</a>
               @endforeach
               </td>
            </tr>
         @endforeach
      @else
         <td colspan="4"><center>No record found </center></td>
      @endIf
      
      
   </tbody>
   <tfoot>
      <tr>
         <td colspan="5">
            
            @include('elements.pagination.pagination', ['title' => 'All partner', 'id' => '#partnersListing','class' => '.partnersListing',  'data' => $data])
         </td>
      </tr>
   </tfoot>
</table>