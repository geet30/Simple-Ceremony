<div class="all-orders-filter">
    <div class="row mb-15 mt-20">
    
        <div class="col-md-4 col-xl-3 d-grid mt-3 mt-md-0 mb-15 ">
            <div class="dropdown filter-date-calendar-dropdown">
                <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center filter-btn w-100" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                <div class="dropdown-menu p-4 filter_date_div">
                    <div class="filter-date-calendar">

                        <!-- <div class="calendar-wrapper" id="calendar-wrapper"></div> -->
                        <div class="date-picker-js no-border-calander date-range-picker"></div>
                        <input type="hidden" name="search_start_date" id="search_start_date" class="search_start_date">
                        <input type="hidden" name="search_end_date" id="search_end_date" class="search_end_date">

                        <!-- <input type="hidden" name="booking_date" class="booking_date"> -->
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


<script>
   $(document).ready(function(){          
     
      $('.date-picker-js').datepicker({
         format: "M yyyy",
         singleDatePicker: true,
         multidate: true,
         multidateSeparator: ",",
         daysOfWeekHighlighted: "0,6",
         weekStart: 1,
         autoClose:true,
         daysOfWeekHighlighted: "0,6",
         weekStart: 1,
      }).on("changeDate",function(event){
            var dates = event.dates, elem=$('.date-picker-js');
            if(elem.data("selecteddates")==dates.join(",")) return; //To prevernt recursive call, that lead to lead the maximum stack in the browser.
            if(dates.length>2) dates=dates.splice(dates.length-1);
            dates.sort(function(a,b){return new Date(a).getTime()-new Date(b).getTime()});
            elem.data("selecteddates",dates.join(",")).datepicker('setDates',dates);
           
            getDates();
      });
     
      function getDates()
      {
         var get_dates = $(".date-picker-js").data('datepicker').getFormattedDate('yyyy-mm-dd');

         get_dates = get_dates.split(',')
         var start_date = get_dates[0] ? get_dates[0]:'';
         var end_date = get_dates[1] ? get_dates[1]:'';
         $('#search_start_date').val(start_date);
         $('#search_end_date').val(end_date);

         var start_data_date = new Date(start_date).getTime();
         $('td[data-date = '+start_data_date+']').addClass('starting_date');
         var end_data_date = new Date(end_date).getTime();
         $('td[data-date = '+end_data_date+']').addClass('ending_date');

         let range = dateRange(start_date, end_date);
        
         for (const element of range) {
            var data_date = new Date(element).getTime();
            $('td[data-date = '+data_date+']').addClass('range_selected');
            
         }
      }
      function dateRange(startDate, endDate, steps = 1) {
         const dateArray = [];
         let currentDate = new Date(startDate);

         while (currentDate <= new Date(endDate)) {
           
            dateArray.push(new Date(currentDate));
            currentDate.setUTCDate(currentDate.getUTCDate() + steps);
            // Use UTC date to prevent problems with time zones and DST
           

         }

         return dateArray;
      }
      
     
   })
      
</script>