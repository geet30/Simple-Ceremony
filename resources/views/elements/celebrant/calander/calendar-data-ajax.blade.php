<div class="modal-header border-0">
    <h3 class="h3 neutral-100 modal-title" id="exampleModalLabel">{{date('l, F d, Y',strtotime($date))}}</h3>
    <a role="button" data-bs-dismiss="modal" aria-label="Close" class="theme-btn primary-btn-border w-full w-lg-auto">Close</a>
 </div>
 <div class="modal-body">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 p-0">
              <div class="theme-tag-blue d-inline-block rounded-5 px-3">2 marriages</div>
              <div class="marriage-calendar-details mt-4">
                 <div class="row">
                    <div class="col-12 col-md-2 col-lg-1">
                       <div class="numberCircle">1</div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-11">
                       <h3 class="h3 neutral-100">Steven &amp; Claudia</h3>
                       <div class="d-flex mt-3 flex-md-row flex-column">
                          
                          <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                             <img src="/images/calendar/time.svg" alt="mobile">
                             <p class="neutral-100 body-2 ms-3 mb-0">09:00</p>
                          </div>
                          <div class="d-flex align-items-center">
                             <img src="/images/calendar/location.svg" alt="mobile">
                             <p class="neutral-100 body-2 ms-3 mb-0">Bradfield park</p>
                          </div>
                          <div class="theme-tag-blue d-inline-block rounded-5 px-3 ms-3">Legal marriage ceremony</div>
                          <div class="d-flex align-items-center ms-auto">
                             <a href="" class="body-1 turquoise-100 text-decoration-none">View info</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="marriage-calendar-details mt-4">
                 <div class="row">
                    <div class="col-12 col-md-2 col-lg-1">
                       <div class="numberCircle">2</div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-11">
                       <h3 class="h3 neutral-100">John &amp; Amily</h3>
                       <div class="d-flex mt-3 flex-md-row flex-column">
                          
                          <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                             <img src="/images/calendar/time.svg" alt="mobile">
                             <p class="neutral-100 body-2 ms-3 mb-0">15:00</p>
                          </div>
                          <div class="d-flex align-items-center">
                             <img src="/images/calendar/location.svg" alt="mobile">
                             <p class="neutral-100 body-2 ms-3 mb-0">Tench park</p>
                          </div>
                          <div class="theme-tag-blue d-inline-block rounded-5 px-3 ms-3">Legal marriage ceremony</div>
                          <div class="d-flex align-items-center ms-auto">
                             <a href="" class="body-1 turquoise-100 text-decoration-none">View info</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
 </div>
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
    