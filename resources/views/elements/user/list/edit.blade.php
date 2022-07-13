<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="edit"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Edit list to-do</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      <form class="needs-validation pb-5 " method="POST" novalidate>
         <div class="col-12 col-xl-10 mb-4">
            <label for="InputName" class="form-label small-text2">To-do name</label>
            <input type="text" value="Sett call with marriage celebrant" class="form-control body-1 netural-100" name="name" id="InputName" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Title is required</div>
         </div>
         <div class="col-12 col-xl-10 mb-4">
            <label for="partnerstatus" class="form-label small-text2 mb-2">Description</label>
            <textarea class="form-control body-1 netural-100" id="ceremonyplace" rows="10">Lorem ipsum dolor sit amet, consectetur adipiscing
elit. Nunc quam lorem, ullamcorper vel ante id,
pellentesque venenatis nunc.</textarea>
         </div>
         <div class="col-12 col-xl-10  mb-4">
            <label for="InputName" class="form-label small-text2">Due date</label>
            <input type="text" value="Aug 3, 2022" class="form-control body-1 netural-100" name="name" id="InputName" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Title is required</div>
         </div>
         <div class="d-lg-flex mt-5">
            <a href="./lisiting" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0">save </a>
         </div>
      </form>
   </div>
</div>