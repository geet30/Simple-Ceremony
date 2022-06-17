@extends('layouts.master') @section('content')

<section class="add-ons pb-100 ">
   <div class="container">
      <div class="row">
      <div class="col-md-12 mb-4 mt-5 d-flex">
            <div class="dropdown">
               <a class="btn">
                  <img src="images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                </a>
                <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     <option value="O1" data-badge="">All</option>
                     <option value="O2" data-badge="">Harbour</option>
                     <option value="O3" data-badge="">Beach</option>
                     <option value="O4" data-badge="">Park</option>
                     <option value="O5" data-badge="">River</option>
                     <option value="O6" data-badge="">Outdoors</option>
                     <option value="O7" data-badge="">Indoors</option>
                     <option value="O7" data-badge="">Unique</option>
                  </select>
               </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search">
            </div>
         </div>
         <div class="col-md-12">
            <h2 class="pb-20 mt-2 h3 netural-100">All Gift Certificate</h2>
         </div>
         <div class="col-md-3 mb-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher1.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$299</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher2.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$129</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher3.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$124</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher4.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$121</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher5.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$345</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher6.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$451</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher7.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$134</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card image-card">
               <a href="/voucher-details">
                  <img src="images/voucher/voucher8.png" class="card-img-top" alt="Voucher Image">
               </a>
               <div class="card-body">
                  <div class="cart-icon d-flex justify-content-between">
                     <div class="badge badge-primary d-inline-flex mb-17">
                        <div class="dot align-self-center me-1"></div>
                        <div class="align-self-center">Gift Certificate</div>
                     </div>
                     <div class="cart-icon pe-3">
                        <a class="add-to-cart" href="/voucher-details">
                           <img src="images/voucher/bag-icon.svg">
                           <span class="add-to-cart-info body-2 netural-100">Add to cart</span>
                        </a>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">$167</div>
                  <h3 class="h4 netural-100">
                     <a href="/voucher-details" class="text-decoration-none netural-100 voucher-link">   
                     Add title voucher here
                     </a>
                  </h3>
                  <p class="small-text2 mb-1">Add short description here</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection