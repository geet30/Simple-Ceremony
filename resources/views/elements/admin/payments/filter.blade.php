
{{-- @if(\Request::segment(2) != 'invoice-couple') --}}

<div class="filter_tab">
    <div class="row mb-4 pt-32 justify-content-between ">

        <div class="col-md-7 col-lg-8 col-xl-8 col-xxl-8 align-self-center">
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
                <div class="dropdown filter_date_div">
                    <a role="button" class="theme-btn d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon"></a>
                    <div class="dropdown-menu p-3 filter_date_div">
                        <div class="filter-date-calendar" style="width:400px;">
                        <form method="post">
                            <div class="row">
                         
                                <div class="col-6">
                                   
                                    <h4 class="h4 neutral-100 mb-3">Status</h4>
                                    @foreach(config('ceremonyStatus.booking_status') as $key=>$status)
                                
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2 bookingStatus" type="checkbox" name="status[]" value="{{$key}}">
                                        <label class="form-check-labe body-2 neutral-100">{{ $status }}</label>
                                    </div>
                                    @endforeach
                                    <a onclick="SearchMultipleFilter('/search-payments','','simpletabs')" class="theme-btn primary-btn d-inline-flex px-5">Filter</a>
                                </div>
                                <div class="col-6">
                                    <h4 class="h4 neutral-100 mb-3">Marriage Celebrants</h4>
                                    
                                    @foreach($celebrants as $key=>$celebrant)
                                        
                                        <div class="form-check mb-3 d-flex align-items-center ">
                                        <input class="form-check-input me-2 celebrants" type="checkbox" name="celebrant[]" value="{{$celebrant['id']}}">
                                        <label class="form-check-labe body-2 neutral-100">{{ $celebrant['first_name'] }}</label>
                                        </div>
                                    @endforeach
                                  
                                </div>
                          
                            </div>
                        </form> 
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-5 col-lg-4  col-xxl-3 align-self-center">

            <a class="theme-btn primary-btn d-inline-block mt-2 mb-2 w-100" href="{{url('payments/create')}}">
                <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                Create invoice
            </a>
        </div>

    </div>
</div>


{{-- @endif --}}
