<div class="offcanvas offcanvas-end theme-offcanvas p-5" style="min-width:auto" tabindex="-1" id="status_change"
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
        <div class="col-md-12 mb-4">
            @foreach(config('ceremonyStatus.celebrant_booking_status') as $key=>$status)
            <div class="cs-checkbox-list form-check mb-3">
              <input name="status" class="form-check-input rounded-circle" type="radio" value="{{$key}}"><span class="netural-100 body-2 ms-2">{{$status}}</span>
            </div>
            @endforeach
        </div>
      <button type="submit" id="submit_button" class="theme-btn primary-btn border-0 mt-4 d-inline-block" >Save</button>
    </form>
  </div>
</div>