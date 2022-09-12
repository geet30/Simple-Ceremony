<div class="modal-success-form modal fade cancel-ceremony-popup" id="change_status_modal" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">             
                <div class="modal-body text-center">
                    <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
                    <h4 class="h4 netural-100 mb-4 mt-4">Do you want to change the status?
                    </h4>
                    <div class="d-flex justify-content-center mt-3">
                    <a class="theme-btn primary-btn me-3" onclick="closeDialog('change_status_modal')" data-bs-toggle="offcanvas" data-bs-target="#status_change" aria-controls="offcanvasRight">Yes</a>
                        <a role="button" class="theme-btn primary-btn-border" data-bs-dismiss="modal"
                            aria-label="Close">No</a>
                    </div>
                </div>
              
          </div>
      </div>
  </div>
  @include('pages.alert.status_modal')
