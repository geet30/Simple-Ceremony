@foreach($data as $booking_date=>$result)
    <p>{{date('d, M D,Y',strtotime($booking_date))}}</p>
    @foreach($result['data'] as $response)

        <p>{{$response->first_couple_name}} .' & '.{{$response->second_couple_name}}</p>
        <p>{{date('H:i',strtotime($response->booking_start_time))}} .' - '.{{date('H:i',strtotime($response->booking_end_time))}}</p>
        <p>{{$response->location_name}} </p>
        <p>{{$response->type_of_ceremony->ceremony_name}} </p>
        <p> <a href="{{route('marriage.detail',$response->id)}}" class="table-link">View info</a> </p>
    @endforeach

@endforeach