<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="add"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Create list to-do</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      <form class="needs-validation pb-5 " method="POST" novalidate>
         <div class="col-12 col-xl-10 mb-4">
            <label for="InputName" class="form-label small-text2">To-do name</label>
            <input type="text" placeholder="Type your to-do name here" class="form-control body-1 netural-100" name="name" id="InputName" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Title is required</div>
         </div>
         <div class="col-12 col-xl-10 mb-4">
            <label for="partnerstatus" class="form-label small-text2 mb-2">Description</label>
            <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10"></textarea>
         </div>
         <div class="col-12 col-xl-10  mb-4">
            <label for="InputName" class="form-label small-text2">Due date</label>
            <input type="text" placeholder="Choose due date here" class="form-control body-1 netural-100" name="name" id="InputName" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Title is required</div>
         </div>
         <div class="d-lg-flex mt-5">
            <a href="/user/lisiting" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0">Create </a>
         </div>
      </form>
   </div>
</div>