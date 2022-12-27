<p>{{date('d, M D,Y',strtotime($date))}}</p>
    @if($type =='booking')
        @if(isset($data[$date]) && !empty($data[$date]['data']))
            @foreach($data[$date]['data'] as $response)

                <p>{{$response->first_couple_name}} .' & '.{{$response->second_couple_name}}</p>
                <p>{{date('H:i',strtotime($response->booking_start_time))}} .' - '.{{date('H:i',strtotime($response->booking_end_time))}}</p>
                <p>{{$response->location_name}} </p>
                <p>{{$response->type_of_ceremony->ceremony_name}} </p>
                <p> <a href="{{route('marriage.detail',$response->id)}}" class="table-link">View info</a> </p>
            @endforeach
        
        @endif
    @else
        @if(isset($data[$date]) && !empty($data[$date]['available_slots']))
            @foreach($data[$date]['available_slots'] as $response2)

                <p>{{date('H:i',strtotime($response2->start_time))}} .' - '.{{date('H:i',strtotime($response2->end_time))}}</p>
                <p>{{$response2->location->name}} </p>
            @endforeach
        
        @endif

    @endif
    