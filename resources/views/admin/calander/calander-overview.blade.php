@extends('layouts.panels')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-0">
                @include('elements.common.admin-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-4">
                @include('elements.common.panel-header')
                <ul class="row add-on-list-nav p-0 mb-0 list-unstyled mb-2">
                    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                        <div class="nav-link">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/partner/report-user.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $count['marriageCelebrant'] }}</h3>
                                    <p class="subheader-2">Marriage celebrants</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                        <div class="nav-link">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/partner/report-location.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $count['marriageLocation'] }}</h3>
                                    <p class="subheader-2">Locations</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                        <div class="nav-link">
                            <div class="add-ons-nav d-flex">
                                <div class="add-ons-nav-image me-4">
                                    <img src="/images/admin/partner/booking-performed.svg" alt="All add-ons">
                                </div>
                                <div class="add-ons-nav-data text-start ">
                                    <h3 class="h3">{{ $count['marriageBookings'] }}</h3>
                                    <p class="subheader-2">Marriages</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="row" id="calendar-overview">
                    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
                        <div class="card panel-card">
                            <div class="card-body">
                            <div id="color-calendar"></div>
                            <div class="events-display"></div>
                                <!-- <div class="calendar-wrapper no-border-calander getBookingsCalendar" id="calendar-wrapper">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6">
                        <div class="card panel-card">
                            @include('admin.calander.dynamic-booking-list-ajax')
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @include('admin.marriages.js')
        @include('elements.admin.marriage.assign-marriage-celebrant')
<script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
<script src="/custom-js/common/ajax-request.js"></script>
    <script>
    function dateFormat(inputDate, format) {
        //parse the input date
        const date = new Date(inputDate);

        //extract the parts of the date
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();

        //replace the month
        format = format.replace("MM", month.toString().padStart(2, "0"));

        //replace the year
        if (format.indexOf("yyyy") > -1) {
            format = format.replace("yyyy", year.toString());
        } else if (format.indexOf("yy") > -1) {
            format = format.replace("yy", year.toString().substr(2, 2));
        }

        //replace the day
        format = format.replace("dd", day.toString().padStart(2, "0"));

        return format;
    }
    var bookings =  {!!json_encode($all_bookings) !!};
    jsonObj = [];
    const dateFormatCalendar = 'MM/dd/YYYY';
   

    $.each(bookings,function(field_name,value){
        item = {}
        item ["start"] = value.booking_date;
        item ["end"] = value.booking_date;
        jsonObj.push(item);
           
    })
    new Calendar({
        id: '#color-calendar',
        calendarSize: 'large',
        eventsData:jsonObj,
    dateChanged: (currentDate, events) => {
        const events_display = document.querySelector('.events-display');
        let events_html = '';
        date = new Date(currentDate);
       
        date = dateFormat(date, "MM/dd/yyyy");
        console.log('date', date);
        getMarriageBookingsRequest(date);
    }
})
</script>

    @endsection
