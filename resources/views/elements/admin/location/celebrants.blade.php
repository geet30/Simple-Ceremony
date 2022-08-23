@if(count($data) > 0)
    @foreach($data as $celebrants)
    
        <tr>
            <td style="min-width:260px" class="body-2" class="body-2">{{$celebrants->user->first_name}}</td>
            <td  style="min-width:200px" class="body-2">+{{ $celebrants->user->country_code}}{{$celebrants->user->phone}}</td>
            <td  style="min-width:180px"><a class="table-link body-2">See availability</a></td>
            <td style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
        </tr>
    @endforeach
@else
<tr><td colspan="4">No record found</td></tr>
@endif