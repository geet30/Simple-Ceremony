

@if(\Request::segment(2) != 'invoice-couple')
    <div class="row mb-4 pt-32 justify-content-between">

        <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="align-self-center d-flex position-relative">
                <div class="dropdown filter-date-calendar-dropdown">
                    <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                    <div class="dropdown-menu p-4 filter_date_div">
                        <div class="filter-date-calendar">

                            <div class="calendar-wrapper" id="calendar-wrapper"></div>
                            <input type="hidden" name="booking_date" class="booking_date">
                            <a onclick="SearchMultipleFilter('/search-payments','','simpletabs')" class="theme-btn primary-btn d-inline-block mt-3">Filter</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <a role="button" class="theme-btn d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon"></a>
                    <div class="dropdown-menu p-3 filter_date_div">
                        <div class="filter-date-calendar" style="width:400px;">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="h4 neutral-100 mb-3">Status</h4>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <a href="#" class="theme-btn primary-btn d-inline-flex px-5">Cancel</a>
                                </div>
                                <div class="col-6">
                                    <h4 class="h4 neutral-100 mb-3">Status</h4>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2" type="checkbox" name="remember">
                                        <label class="form-check-labe body-2 neutral-100">Default checkbox</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="dropdown">
                    <a class="btn">
                        <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                    </a>
                    <div class="select-with-checkbox filterMultipleValues filter_date_div">
                        <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control searchingMultiple location_categories_button" multiple="multiple">
                            <optgroup label="Status">
                                @foreach(config('ceremonyStatus.booking_status') as $key=>$status)
                                <option value="{{ $key }}" data-badge="">{{ $status }}
                                </option>
                                @endforeach
                            </optgroup>
                            
                        </select>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-xxl-2">

            <a class="theme-btn primary-btn d-inline-block mt-2 mb-2 w-100" href="{{url('payments/create')}}">
                <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                Create invoice
            </a>
        </div>

    </div>
@endif
