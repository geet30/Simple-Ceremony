<div class="row py-31">
   <div class="col-md-8 col-xl-9 d-flex align-self-center">
      <div class="dropdown ">
         <a class="btn" role="button">
         <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
         </a>
         <div class="select-with-checkbox">
            
            <select onchange="SearchMultipleFilter('/search-location','','searchResult','')" required="" name="filter_by_categories" class="js-placeholder-single-input form-control filter_by_categories">
               <option value="0" data-badge="">All</option>
               @foreach($filters as $filter)
                  <option value="{{$filter->id}}">{{$filter->name}}</option>
               @endforeach
            </select>
         </div>
      </div>
      <div class="form-group has-search w-100 ms-4 position-relative">
          <input type="text" class="form-control" placeholder="Search" onkeyup="SearchMultipleFilter('/search-location',this.value,'searchResult','')">
         <span class="fa fa-search form-control-feedback"></span>
      </div>
   </div>
   <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
      <a class="theme-btn primary-btn d-flex justify-content-center" href="{{route('locations.create')}}">
      <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
      Add new location
      </a>
   </div>
</div>
<div class="searchResult row">

   @include('elements.admin.location.all-locations', ['title' => 'locations', '' => '', 'locations' => $locations])
</div>