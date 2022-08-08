<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="offcanvasRight"
  aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Your basket</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="table-responsive">
        <table class="table" id="basket_table">
          <thead>
            <tr>
              <th class="col-5">Item</th>
              <th class="col-2">Qty</th>
              <th class="col-2">Price</th>
              <th class="col-2">Total</th>
              <th class="col-1"></th>
            </tr>
          </thead>
          <tbody class="keyCartBody">
          
            
          </tbody>
        </table>
      </div>
      <div class="d-lg-flex mt-50 paynow_text">
     
     
        <a href="{{route('user-login',['addToCart' => 'yes'])}}" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0 cart_pay_now">Pay now</a> 
        <a href="/add-ons" class="theme-btn primary-btn-border  d-flex justify-content-center">Continue choosing add-ons</a>
      </div>
    </form>
  </div>
</div>