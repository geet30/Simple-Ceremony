<div class="modal-success-form modal fade cancel-ceremony-popup" id="change_marriage_status_modal" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">             
            <form method="post" id="status_change" action="{{url('change-booking-status')}}" name="status_change" onsubmit="return submitThroughAjax(event,'status_change','post','/change-booking-status')">
                  @csrf
                  <input name="id" type="hidden" value="{{ $data->id}}">
                  <input name="status" type="hidden" class="status">
                  
                  <div class="modal-body text-center">
                      <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
                      <h4 class="h4 netural-100 mb-4 mt-4">Do you want to change the status?
                      </h4>
                      <div class="d-flex justify-content-center mt-3">
                            <button type="submit" role="button" class="theme-btn primary-btn me-3" onclick="closeDialog('change_marriage_status_modal')" >Yes</button>
                            <a role="button" class="theme-btn primary-btn-border" data-bs-dismiss="modal" aria-label="Close">No</a>
                      </div>
                  </div>
            </form>
              
          </div>
      </div>
  </div>
  @include('pages.alert.status_modal')
