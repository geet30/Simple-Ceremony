@extends('layouts.master') 
@section('content')
<section class="add-ons pt-45 pb-100 ">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
               <div class="d-flex">
                  <div class="me-3"><img src="images/info.svg" class="img-fluid" alt="info-icon"></div>
                  <div>
                     <p class="body-1 mb-0">Before booking below you will need to have booked your ceremony.</p>
                     <a href="/location" class="button-3">Register now</a>
                  </div>
                  <div><button type="button" class="theme-btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="images/cross-blue-white.svg" class="img-fluid" alt="cross-icon"></button></div>
               </div>
            </div>
         </div>
         <div class="col-md-12  mt-5 d-flex">
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
         <div class="col-md-12 pt-45">
            <h2 class="pb-20 h3 netural-100">  Top list add-ons  </h2>
         </div>
         @include('elements.top-list-add-ons', ['title' => 'Top list add-ons', '' => '', 'addons' => $addons])
      </div>
   </div>
</section>
<section class="add-ons pt-45 pb-100 ">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <h2 class="pb-20 h3 netural-100">  All add-ons </h2>
         </div>
         @include('elements.all-add-ons', ['title' => 'All add-ons', '' => '', 'allAddOns' => [
         [
         'image' => 'images/add-ons/v5.png',
         'tag' => 'Chair & decoration',
         'price' => ' $599',
         'packname' => ' The corona pack',
         'location' => 'Blues point reserve',
         'personimage' => 'images/ellipse1.jpg',
         'personname' => 'By Prisillia decoration',
         ],
         [
         'image' => 'images/add-ons/v6.png',
         'tag' => 'Photographer',
         'price' => ' $302',
         'packname' => 'Wedding pack',
         'location' => 'Bradfield park',
         'personimage' => 'images/ellipse2.jpg',
         'personname' => 'By Wedding dream photography',
         ],
         [
         'image' => 'images/add-ons/v7.png',
         'tag' => 'Venue to celebrate',
         'price' => ' $523',
         'packname' => 'Outdoor pack',
         'location' => 'Tench park, penrith',
         'personimage' => 'images/ellipse3.jpg',
         'personname' => 'By A-Shaan',
         ],
         [
         'image' => 'images/add-ons/v8.png',
         'tag' => 'Chair & decoration',
         'price' => ' $702',
         'packname' => 'Exclusive pack',
         'location' => 'Blues point reserve',
         'personimage' => 'images/ellipse4.jpg',
         'personname' => 'By Lia decoration',
         ],
         [
         'image' => 'images/add-ons/v9.png',
         'tag' => 'Flower',
         'price' => ' $68',
         'packname' => ' Flower pack',
         'location' => 'Blues point reserve',
         'personimage' => 'images/ellipse1.jpg',
         'personname' => 'By Flower collection',
         ],
         [
         'image' => 'images/add-ons/v10.png',
         'tag' => 'Venue to celebrate',
         'price' => ' $598',
         'packname' => 'Classic pack',
         'location' => 'Tench park, penrith',
         'personimage' => 'images/ellipse2.jpg',
         'personname' => 'By Prisillia decoration',
         ],
         [
         'image' => 'images/add-ons/v11.png',
         'tag' => 'Car rent',
         'price' => ' $254',
         'packname' => 'Classic cars 1',
         'location' => 'Bradfield park',
         'personimage' => 'images/ellipse3.jpg',
         'personname' => 'By Damian garage',
         ],
         [
         'image' => 'images/add-ons/v12.png',
         'tag' => 'Car rent',
         'price' => ' $299',
         'packname' => 'Classic cars 2',
         'location' => 'Blues point reserve',
         'personimage' => 'images/ellipse4.jpg',
         'personname' => 'By Damian garage',
         ],
         [
         'image' => 'images/add-ons/v13.png',
         'tag' => 'Photographer',
         'price' => ' $299',
         'packname' => 'Intimate pack',
         'location' => 'Tench park, penrith',
         'personimage' => 'images/ellipse3.jpg',
         'personname' => 'By Ray photography',
         ],
         [
         'image' => 'images/add-ons/v14.png',
         'tag' => 'Flower',
         'price' => ' $299',
         'packname' => 'Simple flower',
         'location' => 'Bradfield park',
         'personimage' => 'images/ellipse4.jpg',
         'personname' => 'By Flower collection',
         ],
         ]])
      </div>
   </div>
</section>
@endsection