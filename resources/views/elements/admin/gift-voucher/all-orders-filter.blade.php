<div class="all-orders-filter">
    <div class="row mb-15 mt-20">
    
        <div class="col-md-4 col-xl-3 d-grid mt-3 mt-md-0 mb-15 ">
            <div class="dropdown filter-date-calendar-dropdown">
                <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center filter-btn w-100" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                <div class="dropdown-menu p-4 filter_date_div">
                    <div class="filter-date-calendar">

                        <div class="calendar-wrapper" id="calendar-wrapper"></div>
                        <input type="hidden" name="booking_date" class="booking_date">
                        <a class="theme-btn primary-btn d-inline-block mt-3" onclick="SearchMultipleFilter('/search-coupon-orders','','simpletabs')">Filter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xl-9 d-flex">
            <div class="form-group has-search w-100 position-relative">
                <input type="text" class="form-control" placeholder="Search purchaser’s name" onkeyup="searchWithoutTabs('/search-coupon-orders-by-name',this.value, 'simpletabs','')">
                <span class="fa fa-search form-control-feedback"></span>
            </div>
        </div>
    
    </div>
</div>