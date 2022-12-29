<div class="col-md-8 col-lg-8 col-xl-8 col-xxl-8">
   <div class="align-self-center d-flex position-relative">
      <div class="dropdown filter-date-calendar-dropdown">
         <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
         <div class="dropdown-menu p-4 filter_date_div">
            <div class="filter-date-calendar">
               <div class="date-picker-js no-border-calander date-range-picker"></div>
               <input type="hidden" name="search_start_date" id="search_start_date" class="search_start_date">
               <input type="hidden" name="search_end_date" id="search_end_date" class="search_end_date">

               <a onclick="SearchMultipleFilter('/search-financial-report-date','','financialReportLocationListing')" class="theme-btn primary-btn d-inline-block mt-3">Filter</a>
            </div>
         </div>
      </div>
      <div class="dropdown filter_date_div">
         <a role="button" class="theme-btn d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon"></a>
         <div class="dropdown-menu p-3 filter_date_div">
            <div class="filter-date-calendar" style="width:60vw;">
               <form method="post" class="row">
                
                     <div class="col-6 col-xl-3">

                        <h4 class="h4 neutral-100 mb-3">Location</h4>
                        @foreach($locations as $key=>$location)

                        <div class="form-check mb-3 d-flex align-items-center ">
                           <input class="form-check-input me-2 locations" type="checkbox" name="locationId[]" value="{{$location->id}}">
                           <label class="form-check-labe body-2 neutral-100">{{ $location->name }}</label>
                        </div>
                        @endforeach
                       
                     </div>
                     <div class="col-6  col-xl-3">
                        <h4 class="h4 neutral-100 mb-3">Type Ceremony</h4>

                        @foreach($type_ceremonies as $key=>$ceremonies)

                        <div class="form-check mb-3 d-flex align-items-center ">
                           <input class="form-check-input me-2 ceremonies" type="checkbox" name="ceremonies[]" value="{{$ceremonies->id}}">
                           <label class="form-check-labe body-2 neutral-100">{{ $ceremonies->ceremony_name }}</label>
                        </div>
                        @endforeach

                     </div>
                     <div class="col-6  col-xl-3">
                        <h4 class="h4 neutral-100 mb-3">Marriage Celebrants</h4>

                        @foreach($celebrants as $key=>$celebrant)

                        <div class="form-check mb-3 d-flex align-items-center ">
                           <input class="form-check-input me-2 celebrants" type="checkbox" name="celebrant[]" value="{{$celebrant['id']}}">
                           <label class="form-check-labe body-2 neutral-100">{{ $celebrant['first_name'] }}</label>
                        </div>
                        @endforeach

                     </div>
                     <div class="col-6  col-xl-3">
                        <h4 class="h4 neutral-100 mb-3">Partner</h4>

                        @foreach($partners as $key=>$partner)

                        <div class="form-check mb-3 d-flex align-items-center ">
                           <input class="form-check-input me-2 partners" type="checkbox" name="partners[]" value="{{$partner['id']}}">
                           <label class="form-check-labe body-2 neutral-100">{{ $partner['name'] }}</label>
                        </div>
                        @endforeach

                     </div>
<div class="col-12">
<a onclick="SearchMultipleFilter('/search-financial-report-date','','financialReportLocationListing')" class="theme-btn primary-btn d-inline-flex px-5">Filter</a>
</div>
                 
               </form>
            </div>
         </div>
      </div>

   </div>
</div>

@section('scripts')

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
@endsection