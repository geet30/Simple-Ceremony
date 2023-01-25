<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="edit"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Edit list to-do</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      
      <form method="post" id="update-list-to-do"  name="update-list-to-do">
         
         @csrf
         <div class="col-12 col-xl-10 mb-4">
            <label for="name" class="form-label small-text2">To-do name</label>
            <input type="text" placeholder="Type your to-do name here" class="form-control body-1 netural-100" name="name" id="name" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Title is required</div>
         </div>
         <div class="col-12 col-xl-10 mb-4">
            <label for="partnerstatus" class="form-label small-text2 mb-2">Description</label>
            <textarea class="form-control body-1 netural-100" id="description" placeholder="Type here" name="description" rows="10" required></textarea>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Description is required</div>
         </div>
       
         <div class="col-12 col-xl-10  mb-4 event_date">
            <label for="event_date" class="form-label small-text2">Due date</label>
            <div class="input-group date theme-datepicker">
               <input role="button" type="text" class="form-control body-1 netural-100 event_date_input" id="due_date" name="due_date"  placeholder="Choose due date here" required/>
               <span class="input-group-append">
               </span>
               <div class="invalid-feedback event_date_required"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Due date is required</div>
            </div>


         </div>
         <div class="d-lg-flex mt-5">
            <button type="submit" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0">Save</button>
         </div>
      </form>
   </div>
</div>