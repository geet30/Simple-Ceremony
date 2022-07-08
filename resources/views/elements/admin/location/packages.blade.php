<div class="row py-31">
       
       <div class="col-md-8 col-xl-9 d-flex align-self-center">
       <div class="dropdown ">
                     <a class="btn" role="button">
                     <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                     </a>
                     <div class="select-with-checkbox">
                        <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                           <option value="O1" data-badge="">Location</option>
                              <option value="O2" data-badge="">Park</option>
                              <option value="O3" data-badge="">Beach</option>
                              <option value="O4" data-badge="">Harbour</option>
                        </select>
                     </div>
                  </div>
    
       <div class="form-group has-search w-100 ms-4 position-relative">
          <span class="fa fa-search form-control-feedback"></span>
          <input type="text" class="form-control" placeholder="Search">
       </div>
    </div>
       <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
          <a class="theme-btn primary-btn d-flex justify-content-center" href="/admin/locations/create">
          <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
          Add new location
          </a>
       </div>
    </div>
    <div class="row">
       @include('elements.admin-location', ['title' => 'locations', '' => '', 'locations' => [
       [
       'image' => '/images/admin/location/v1.jpg',
       'price' => ' $350',
       'name' => ' Blues point reserve',
       ],
       [
       'image' => '/images/admin/location/v2.jpg',
       'price' => ' $350',
       'name' => ' Bradfield park',
       ],
       [
       'image' => '/images/admin/location/v3.jpg',
       'price' => ' $350',
       'name' => ' Tench park, penrith',
       ],
       [
       'image' => '/images/admin/location/v2.jpg',
       'price' => ' $350',
       'name' => ' Bradfield park',
       ],
       [
       'image' => '/images/admin/location/v1.jpg',
       'price' => ' $350',
       'name' => ' Blues point reserve',
       ],
       [
       'image' => '/images/admin/location/v2.jpg',
       'price' => ' $350',
       'name' => ' Bradfield park',
       ],
       [
       'image' => '/images/admin/location/v3.jpg',
       'price' => ' $350',
       'name' => ' Tench park, penrith',
       ],
       [
       'image' => '/images/admin/location/v2.jpg',
       'price' => ' $350',
       'name' => ' Bradfield park',
       ],
       [
       'image' => '/images/admin/location/v1.jpg',
       'price' => ' $350',
       'name' => ' Blues point reserve',
       ],
       [
       'image' => '/images/admin/location/v2.jpg',
       'price' => ' $350',
       'name' => ' Bradfield park',
       ],
       [
       'image' => '/images/admin/location/v3.jpg',
       'price' => ' $350',
       'name' => ' Tench park, penrith',
       ],
       [
       'image' => '/images/admin/location/v2.jpg',
       'price' => ' $350',
       'name' => ' Bradfield park',
       ],
       ]])
    </div>