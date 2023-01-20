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
            @foreach($result->partnerProducts as $addons)
               <td style="min-width:260px" class="body-2 table-anchor-link"><a href="{{ url('partner/details',$addons['id'])}}"></a>{{$result['name']}}</td>
               
               <td  style="min-width:200px" class="body-2 table-anchor-link"><a href="{{ url('partner/details',$addons['id'])}}"></a>{{$addons->addon->name}}</td>
              
               <td  style="min-width:180px" class="body-2 table-anchor-link"><a href="{{ url('partner/details',$addons['id'])}}"></a>+{{$result['country_code']}}{{$result['phone']}}</td>
               <td  style="min-width:180px" class="body-2 table-anchor-link"><a href="{{ url('partner/details',$addons['id'])}}"></a>{{$result['email']}}</td>
               <td  style="min-width:180px">
                  <a href="{{ url('partner/details',$addons['id'])}}" class="table-link body-2">View info</a>
              
               </td>
               @endforeach
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