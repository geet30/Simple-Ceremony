@foreach($ceremonyInfo as $ceremony)
    @foreach($ceremony->additional_info as $result)
        <div class="col-md-6 mb-4 ceremony_fields class-{{$ceremony->id}}">
            <label for="cost" class="form-label small-text2">{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}</label>
            
            <input type="text" id="{{config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info) }}" placeholder="Type your {{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}" name="{{config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info) }}"  value="{{ (isset(cache('booking')[config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info)]) ? cache('booking')[config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info)] :'')}}" class="form-control body-1 netural-100" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }} is required</div>
            
        </div>
    @endforeach
@endforeach