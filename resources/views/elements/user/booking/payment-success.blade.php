@extends('layouts.panels') 
<div class="modal-success-form modal fade cancel-ceremony-popup" id="delete_alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-body text-center">
            <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
            <h4 class="h4 netural-100 mb-4 mt-4">Are you sure you want to delete the marriage celebrant account?</h4>
            <div class="d-flex justify-content-center mt-3">
             <a role="button" class="theme-btn primary-btn me-3" data-bs-dismiss="modal" aria-label="Close">Continue</a>
             <a role="button" class="theme-btn primary-btn-border" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
         </div>
       </div>
     </div>
  </div>