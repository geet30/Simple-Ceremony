<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="status_change"
  aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h2 id="offcanvasRightLabel" class="h3 neutral-100">Status</h2>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
    <div class="message"></div>
    <form method="post" id="status_change" action="{{url('change-booking-status')}}" name="status_change" onsubmit="return submitThroughAjax(event,'status_change','post','/change-booking-status')">
        @csrf
        <input name="id" type="hidden" class="id">
        <div class="col-md-9 mb-4">
            @foreach(config('ceremonyStatus.celebrant_booking_status') as $key=>$status)
                <input name="status" class="" type="radio" value="{{$key}}">{{$status}}<br>
            @endforeach
        </div>
       
     
      <button type="submit" id="submit_button" class="theme-btn primary-btn border-0 mt-4 d-inline-block" >Send</button>
    </form>
  </div>
</div>