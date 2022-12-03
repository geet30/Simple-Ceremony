@extends('layouts.panels')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('pg-calendar/css/style.css') }}"/>
@endsection
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant.celebrant-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.common.panel-header')
      <a href="/calendar" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-30"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
      <div class="row">
         <div class="col-12">
            <div class="card d panel-card ">
               <div class="card-body">
                  @if(Session::get('success'))
                  <p>{{ Session::get('success') }}</p>
                  @endif
                  <h1 class="h3 neutral-100 mb-4 align-self-center">Set your standard hours</h1>
                  <div class="d-flex align-self-center w-100">
                     <ul class=" calendar-btn nav nav-pills d-flex align-self-center mb-3 mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item  me-3" role="presentation">
                           <button class="nav-link @if($slots == 0) active @else disable @endif theme-btn primary-btn d-flex justify-content-center" id="rolling-tab" data-bs-toggle="pill" data-bs-target="#rolling" type="button" role="tab" aria-controls="rolling" aria-selected="true">
                           Rolling  Repeat form
                           </button>
                        </li>
                        <li class="nav-item  " role="presentation">
                           <button class="nav-link theme-btn primary-btn-border @if($slots != 0) active @endif" id="override-tab" data-bs-toggle="pill" data-bs-target="#override" type="button" role="tab" aria-controls="override" aria-selected="false">
                           Override form
                           </button>
                        </li>
                     </ul>
                     <div class="align-self-center ms-3 info-icon">
                        <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>Override is to make certain time and
                        dates not available, for example to go on holiday</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row pt-31">
         <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
               @if($page == 'rolling-form')
                  <div class="tab-pane fade show active" id="rolling" role="tabpanel" aria-labelledby="rolling-tab" tabindex="0">
                  @include('elements.celebrant.calander.rolling')
                  </div>
               @else
                  <!-- override -->
                  <div class="tab-pane fade active show" id="override" role="tabpanel" aria-labelledby="override-tab" tabindex="1">
                     @include('elements.celebrant.calander.override')
                  </div>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>

<!-- modal -->
   <div class="modal-success-form modal fade cancel-ceremony-popup" id="location_alert" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
               <h4 class="h4 netural-100 mb-4 mt-4">Please select different time to create slots for this location, As we found some other person is already created slots for this location in your givin time
               </h4>
               <div class="d-flex justify-content-center mt-3">

                     <button type="button" data-bs-dismiss="modal" aria-label="Close" role="button" class="theme-btn primary-btn me-3">Ok</button>
                     <!-- <a role="button" class="theme-btn primary-btn-border" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</a> -->

               </div>

            </div>
         </div>
      </div>
   </div>

@endsection

@section('scripts')
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pg-calendar@1.4.31/dist/js/pignose.calendar.full.js"></script> -->
<!-- <script src="/datepicker/main.js"></script> -->
<script>
   const dateFormatNs = 'YYYY-MM-DD';
</script>
<script src="{{ asset('pg-calendar/js/main.js') }}"></script>
@if($page == 'rolling-form')
<script>
   var FormError = false;
   $(document).ready(function(){
      $('.date-picker-js-ns').pignoseCalendar({
         multiple: true,
      });
      $('.pignose-calendar-body').css('pointer-events','none');
   })
   $('#submit-first-rolling-form').click(function(){
      let start_date = parseInt($('#choose-date').val());
      let end_date = parseInt($('#end-date').val());
      // console.log(start_date,end_date);
      if(start_date && end_date) 
      {
         let startNs = moment().add(start_date,'day').format(dateFormatNs);
         let endNs = moment().add(start_date + end_date,'day').format(dateFormatNs);
         // console.log(startNs,endNs);
         $('#form-2-after-1st').removeClass('d-none');
         $('.date-picker-js-ns').pignoseCalendar('set', startNs+'~'+endNs);
         $('#starting_date-ns').val(startNs);
         $('#ending_date-ns').val(endNs);
         $('.pignose-calendar-body').css('pointer-events','none');
      }
   })
   // $('#form-2-after-1st').removeClass('d-none');
   $(document).on('click','.get-sub-slots',function(){
      let data = $(this).data();
      let day = data.day;
      let url = data.url;
      let className = data.class;
      let key = $('.'+className+':last').data('keyid') || 1;
      console.log(data);
      // console.log(key);
      key++;
      $.ajax({
         url:url,
         data:{day:day,key:key},
         success : function(rs){
            // console.log(rs);
            $('tr.'+className+':last').after(rs);
            $('tr.'+className+':last select').select2({
               minimumResultsForSearch:Infinity
            });
         },
         error: function(er){
            console.log(er);
         }
      })
   });
   $(document).on('change','.ns-event-checkbox-uncheck',function(){
      $(this).prop('checked',true)
      let data = $(this).parent().parent().parent().data()
      let classes = $(this).parent().parent().parent().attr('class')
      $('.'+data.target).show()
      $('input.'+data.target).prop('checked',true)
      $('.'+classes).hide()
      $('.'+classes+'-addon').hide()
      // console.log($(document).find($(this)));
      $(document).find('.'+classes+' .ns-required').attr('required',false)
      // console.log('1 target',data.target);
      // console.log('1 classes',classes);
   });
   $(document).on('change','.ns-event-checkbox-check',function(){
      let data = $(this).parent().parent().parent().data()
      $(this).prop('checked',false)
      let classes = $(this).parent().parent().parent().attr('class')
      // console.log('2 target',data.target);
      // console.log('2 classes',classes);
      $('input.'+data.target).prop('checked',false)
      $('.'+data.target+'-addon').show()
      $('.'+data.target).show()
      $(document).find('.'+data.target+' .ns-required').attr('required',true)
      $('.'+classes).hide()
   })
   $(document).on('change','.location-select-ns',async function(){
      if(!$(this).val() || $(this).val() == ' ') 
      {
         $(this).parent().parent().find('input.total_fee').val('');
          return false;
      }
      let location = parseFloat($(this).val()) || 0;
      let admin_fee = parseFloat($(this).parent().parent().find('input.admin_fee').val()) || 0;
      let your_fee = parseFloat($(this).parent().parent().find('input.your_fee').val()) || 0;
      let location_price = parseFloat($(this).find('option[value="'+location+'"').data('price')) || 0;
      let total = location_price + admin_fee + your_fee;

      let start_time =$(this).parent().parent().find('select.start-time').val();
      let end_time =$(this).parent().parent().find('select.end-time').val();

      // console.log('ajax hitting');
      var element = $(this);
      let result = await $.ajax({
         url : "{{ route('celebrant-location-check') }}",
         type : 'POST',
         data : {
            start_date:$('#starting_date-ns').val(),
            end_date:$('#ending_date-ns').val(),
            start_time:start_time,
            end_time:end_time,
            day:$(this).data('day'),
            location_id:location,
         },
         success : function(rs){
            console.log('console success result');
            console.log(rs);
            if(rs.length != 0)
            {
               // $('#location_alert').modal('show');
               // element.val('');
               element.parent().parent().find('input.total_fee').val('');
               // console.log(element.parent().parent().find('.location-error'));
               element.parent().parent().find('.location-error').removeClass('d-none');
               element.parent().parent().find('.location-error').show();
            }
            else
            {
               element.parent().find('input.input-location_fee').val(location_price)
               element.parent().parent().find('input.total_fee').val(total)
               element.parent().parent().find('.location-error').hide();
               element.parent().parent().find('.location-error').addClass('d-none');
            }
         },
         error : function(er){
            console.log('console err result');
            console.log(er);
         }
      })
   })
   $(document).on('submit','.rolling-repeat-form-ns',function(e){
      
      duplicate_check('.ns-duplicate-check-validation .ns-required','common-error-ns');
      if(FormError == true){
         e.preventDefault();
         setTimeout(() => {
            
         }, 100);
         $("#loading").hide();
         return false;
      }
   })
   $(document).on('change','.ns-required.start-time,.ns-required.end-time',function(){
      console.log($(this));
      console.log($(this).parent().parent().parent());
      // $(this).parent().parent().parent().find('.location-select-ns').trigger('change');
      $('.location-select-ns').trigger('change');
   })
   // console.log({{ $slots }});
   @if($slots != 0)
      $('#override').addClass('show')
      $('#override').show();
   @endif
</script>
@else
<script>
   $(document).ready(function(){
      var emptyForm2 = $('.ns-empty-form2');
      var slotsForm2 = $('.ns-slots-form2');
      var over_ride_date_ar = [];
      var over_ride = {
         start : new Date('---'),
         end : new Date('---')
      }
      slotsForm2.hide();
      console.log('before if ',over_ride);
      over_ride.start = moment("{{ $slots_data->start_date }}").format(dateFormatNs)
      over_ride.end = moment("{{ $slots_data->end_date }}").format(dateFormatNs)
      $('.calendar-wrapper-ns').datepicker({
         multidate: true,
         format: 'dd-mm-yyyy',
         startDate: over_ride.start,
         // endDate: moment(over_ride.start).diff(moment(over_ride.end),'month',true)
         // endDate: over_ride.end,
      }).on('changeDate', function(e) {
         console.log(e);
         // over_ride_date_ar.pop();
         // over_ride_date_ar.push(e.dates);
         over_ride_date_ar = e.dates;
         
      });

      $('#submit-first-over-ride-form').click(function(){
         // console.log(over_ride_date_ar);
         // return false;
         if(over_ride_date_ar.length == 0){ slotsForm2.hide(); emptyForm2.show();}
         else {slotsForm2.show(); emptyForm2.hide();}
         // alert('sss');
         console.log($('.ns-slots-form2'));
         $('.ns-slots-form2 .ns-append-over-ride-slots').empty();
         over_ride_date_ar.forEach((dates,i) => {
            let day = moment(dates).format('dddd').toLowerCase();
            let dayText = moment(dates).format('ddd').toUpperCase();
            let date = moment(dates).format("YYYY-MM-DD");
            let dateText = moment(dates).format("DD MMMM YYYY");
            console.log(dates,i);
            $.ajax({
               url : "{{ route('calendar.overRideDay') }}",
               data:{day:day,date:date,dayText:dayText,dateText:dateText},
               success : function(rs){
                  $("#loading").hide();
                  // console.log(rs);
                  
                  $('.ns-slots-form2 .ns-append-over-ride-slots').append(rs);
                  $('.ns-slots-form2 .ns-append-over-ride-slots .ns-custom-append-override:last select').select2({
                     minimumResultsForSearch:Infinity
                  });
                  // $('.ns-empty-form').hide();
                  // $('.ns-slots-form').show();
                  // // $('tr.'+className+':last').after(rs);
                  // $('.ns-slots-form .ns-append-over-ride-slots .over-ride-form-slots-ns:last select').select2({
                  //    minimumResultsForSearch:Infinity
                  // });
               },
               error: function(er){
                  $("#loading").hide();
                  console.log(er);
               }
            })
         })
      })
      $(document).on('click','.get-override-sub-slots',function(){
         console.log($(this).data());
         // let className = data.class;
         let dataAttr = $(this).data();
         let parentData = $(this).closest('tr').parent().find('.ns-slots:last').data();
         let key = parentData?.key || 0;
         key++;
         var element = $(this);
         console.log(key);
         let data = {
            key: key,
            daytext : dataAttr.daytext,
            day : dataAttr.day,
            date : dataAttr.date,
            datetext : dataAttr.datetext
         }
         // return false;
         // console.log(key);
         key++;
         $.ajax({
            url:dataAttr.url,
            data:data,
            success : function(rs){
               // console.log(rs);
               element.closest('tr').parent().find('.ns-slots:last').after(rs);
               // $('tr.'+className+':last').after(rs);
               element.closest('tr').parent().find('.ns-slots:last select').select2({
                  minimumResultsForSearch:Infinity
               });
            },
            error: function(er){
               console.log(er);
            }
         })
      })
      $(document).on('change','.over-ride-location-select-ns',async function(){
         if(!$(this).val() || $(this).val() == ' ') 
         {
            $(this).parent().parent().find('input.total_fee').val('');
            return false;
         }
         let location = parseFloat($(this).val()) || 0;
         let admin_fee = parseFloat($(this).parent().parent().find('input.admin_fee').val()) || 0;
         let your_fee = parseFloat($(this).parent().parent().find('input.your_fee').val()) || 0;
         let location_price = parseFloat($(this).find('option[value="'+location+'"').data('price')) || 0;
         let total = location_price + admin_fee + your_fee;
         // console.log(location,admin_fee,your_fee,location_price,total);
         // console.log($(this).data());
         let dataAttr = $(this).data();
         // return false;
         let start_time = $(this).parent().parent().find('select.start-time').val();
         let end_time =$(this).parent().parent().find('select.end-time').val();

         // console.log('ajax hitting');
         var element = $(this);
         let result = await $.ajax({
            url : "{{ route('celebrant-location-check') }}",
            type : 'POST',
            data : {
               start_date : dataAttr.date,
               end_date : dataAttr.date,
               start_time:start_time,
               end_time:end_time,
               day : dataAttr.day,
               location_id:location,
            },
            success : function(rs){
               // console.log('console success result');
               // console.log(rs);
               if(rs.length != 0)
               {
                  element.parent().parent().find('input.total_fee').val('');
                  // console.log(element.parent().parent().find('.location-error'));
                  element.parent().parent().find('.location-error').removeClass('d-none');
                  element.parent().parent().find('.location-error').show();
               }
               else
               {
                  element.parent().find('input.input-location_fee').val(location_price)
                  element.parent().parent().find('input.total_fee').val(total)
                  element.parent().parent().find('.location-error').hide();
                  element.parent().parent().find('.location-error').addClass('d-none');
               }
            },
            error : function(er){
               console.log('console err result');
               console.log(er);
            }
         })
      })
      $(document).on('change','.ns-required.start-time,.ns-required.end-time',function(){
         console.log($(this));
         console.log($(this).parent().parent().parent());
         // $(this).parent().parent().parent().find('.location-select-ns').trigger('change');
         $(this).closest('tr').find('.over-ride-location-select-ns').trigger('change');
      })
      $(document).on('change','.ns-over-ride-checkbox-uncheck',function(){
         let dataAttr = $(this).closest('tr').data()
         $(this).prop('checked',true)
         $('.'+dataAttr.show).show();
         $(this).closest('tr').parent().find('tr.ns-slots').hide();
         $('.'+dataAttr.date+'-date-class').hide()

         $('.available-'+dataAttr.date).prop('checked',false)
         $(this).closest('tr').parent().find('tr.ns-slots').each(function(){
            // console.log($(this))
            $(this).find('.ns-required').attr('required',false)
         })
      })
      $(document).on('change','.ns-over-ride-checkbox-check',function(){
         $(this).prop('checked',false)
         let dataAttr = $(this).closest('tr').data()
         console.log(dataAttr);
         $('.'+dataAttr.show).show();
         $(this).closest('tr').parent().find('tr.ns-slots').show();
         $('.'+dataAttr.date+'-date-class').show()
         $(this).closest('tr').hide();
         
         $('.available-'+dataAttr.date).prop('checked',true)

         $('.'+dataAttr.show).parent().find('tr.ns-slots').each(function(){
            // console.log($(this))
            $(this).find('.ns-required').attr('required',true)
         })
      })
      $(document).on('submit','.over-ride-form-ns',function(e){
         makeData();
         if(FormError == true){
            e.preventDefault();
            $("#loading").hide();
            return false;
         }
      })
   })
   function makeData() {
      var count = 0;
      var data = [];
      var errorTarget = "error-custom-ns";
      $('.ns-custom-append-override').each(function(){
         // duplicate_check($(this).find('.error-custom-ns'))
         // console.log($(this).find('.error-custom-ns'));
         // console.log($(this).find('.ns-slots'));
         // var dataAttr = $(this).find('tr:first').data();
         console.log($(this).find('.error-custom-ns').data());
         $(this).find('.ns-slots').each(function(){
            // console.log($(this).closest('tr').data());
            // console.log(dataAttr);
            let el = $(this);
            let dataAttr = $(this).data();
            let day = dataAttr.date;
            // el.closest('tr').classList[0].replace('custom-class-','');
            let key = day;
            // var dayObject = {start:'',end:''};
            console.log($('input.available-'+day).prop('checked'));
            if($('input.available-'+day).prop('checked') == true)
            {
               if(!data.find((ar) => {return ar.day === day})) data.push({day:day,data:[]});
               // let cl = el.classList.value.split(" ")
               if($(this).find('.start-time').length > 0) 
               {
                  let start = $(this).find('.start-time').val();
                  data[data.length -1].data.push({start:start,end:''});
               }
               if($(this).find('.end-time').length > 0) 
               {
                  let end = $(this).find('.end-time').val();
                  let lastData = data[data.length -1].data.length;
                  data[data.length - 1].data[lastData - 1].end = end;
               }
            }
         })
      })
      return valueTestTime(data,errorTarget);
   }
</script>
@endif
<script>
   function duplicate_check(target = '',errorTarget = '') {
      // document.querySelectorAll('.location-select-ns').onchange();
      let element = document.querySelectorAll(target);
      var data = [];
      var count = 0;
      element.forEach((el, index) => {
         let day = el.closest('tr').classList[0].replace('custom-class-','');
         let key = day;
         // var dayObject = {start:'',end:''};
         if(!data.find((ar) => {return ar.day === day})) data.push({day:day,data:[]});
         let cl = el.classList.value.split(" ")
         if(cl.indexOf('start-time') >= 0) 
         {
            let start = el.value;
            data[data.length -1].data.push({start:start,end:''});
         }
         if(cl.indexOf('end-time') >= 0) 
         {
            let end = el.value;
            let lastData = data[data.length -1].data.length;
            data[data.length - 1].data[lastData - 1].end = end;
         }
      })
      return valueTestTime(data,errorTarget);
   }
   function valueTestTime(data,errorTarget){
      // console.log(document.getElementById(errorTarget),errorTarget);
      document.getElementById(errorTarget).innerHTML = '';
      var error = false;
      FormError = false;
      data.forEach((val) => {
         // console.log(val);
         var slots = [];
         if(error) return false;
         val.data.forEach((tm) => {
            // console.log(tm);
            if(error) return false;

            if(tm.start >= tm.end){
               error = true;
               let message = val.day+' has start time grater then end time';
               console.log(message);
               document.getElementById(errorTarget).innerHTML = message;
               return false;
            }
            console.log('function test ',slotsSortCheck(slots,tm));
            if(slotsSortCheck(slots,tm) == false)
            {
               error = true;
               let message = val.day+' has duplicate time'
               // console.log(message);
               // console.log('error find slot ==> ');
               // console.log('target ',errorTarget);
               document.getElementById(errorTarget).innerHTML = message;
               FormError = true;
               return false;
            }
            
            slots.push(tm);
         })
      })
   }
   function slotsSortCheck(slots,tm)
   {
      // console.log('slotsSortCheck function calling ========== ');
      // console.log('slots',slots);
      var error = true;
      slots.forEach((e) => {
         // console.log('slots loop');
         // console.log(e.start +' <= '+ tm.start+' && '+e.end+' > '+ tm.start);
         if(error == false) return error;
         if(e.start <= tm.start && e.end > tm.start)
         {
            // console.log('start lied ',e.start);
            error = false;
         }
         else if(e.start < tm.end && e.end >= tm.end)
         {
            // console.log('start lied ',e.start);
            error = false;
         }
         else if(tm.start <= e.start && tm.end > e.start)
         {
            // console.log('start lied ',e.start);
            error = false;
         }
         else if(tm.start < e.end && tm.end >= e.end)
         {
            // console.log('start lied ',e.start);
            error = false;
         }
         return error;
      });
      return error;
   }
</script>
@endsection