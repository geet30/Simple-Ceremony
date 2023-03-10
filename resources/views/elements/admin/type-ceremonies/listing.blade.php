<table class="table theme-table all-type-of-ceremonies-table">
   <thead>
      <tr>
         <th>Type of Ceremonies</th>
         <th>Additional Informations</th>
         <th>Conditions</th>
         <th class="text-center">Fee Adjustments</th>
         <th></th>
      </tr>
   </thead>
   <tbody>
      @foreach($data as $value)
      <tr>
        <td class="body-2 neutral-100 table-anchor-link" style="min-width: 200px;max-width: 200px;"><a href="/all-type-of-ceremonies/{{ $value->id }}/edit"></a>{{$value->ceremony_name}}</td>
        <td class="body-2 neutral-100 table-anchor-link" style="min-width: 200px;max-width: 200px;"><a href="/all-type-of-ceremonies/{{ $value->id }}/edit"></a>
            <ul class="p-0 m-0">
                @foreach($value->additional_info as $result)
              
                    <li>{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}</li> 
               
                @endforeach
            </ul>
        </td>
        <td class="body-2 neutral-100" style="min-width: 350px;max-width: 350px;">
            <div class="table-long-description">
                {!! nl2br($value->conditions) !!}
            </div>
        </td>
        <td class="text-center body-2 neutral-100 table-anchor-link" style="min-width: 150px;"><a href="/all-type-of-ceremonies/{{ $value->id }}/edit"></a>$ {{$value->fee_adjustment}}</td>
        <td class="text-center body-2 neutral-100" style="min-width: 150px;">
           <a href="/all-type-of-ceremonies/{{ $value->id }}/edit" role="button" class="table-link">Edit</a>
           
        </td>
     </tr>
    
    
      @endforeach
      @if($data->total()==0)
                <tr>
                    <td colspan="5">
                        <center>No Record Found</center>
                    </td>
                </tr>
        @endif  
   </tbody>
   <tfoot>
      <tr>
         <td colspan="5">
            @include('elements.pagination.pagination', ['title' => 'All Type Of Ceremonies', 'id' => '#typeCeremoniesListing', 'class'=>'.typeCeremoniesListing','data' => $data])
         </td>
      </tr>
   </tfoot>
</table>
