@extends('layouts.panels')
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
                           <button class="nav-link active theme-btn primary-btn d-flex justify-content-center" id="rolling-tab" data-bs-toggle="pill" data-bs-target="#rolling" type="button" role="tab" aria-controls="rolling" aria-selected="true">
                           Rolling  Repeat form
                           </button>
                        </li>
                        <li class="nav-item  " role="presentation">
                           <button class="nav-link theme-btn primary-btn-border" id="override-tab" data-bs-toggle="pill" data-bs-target="#override" type="button" role="tab" aria-controls="override" aria-selected="false">
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
               <div class="tab-pane fade show active" id="rolling" role="tabpanel" aria-labelledby="rolling-tab" tabindex="0">
               @include('elements.celebrant.calander.rolling')
               </div>
               <!-- override -->
               <div class="tab-pane fade" id="override" role="tabpanel" aria-labelledby="override-tab" tabindex="1">
               @include('elements.celebrant.calander.override')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection

@section('scripts')
<script src="/datepicker/main.js"></script>
<script>
   // $('.calendar-wrapper').datepicker('remove');
   $('.date-picker-js-ns').datepicker({
      multidate: true,
      date: new Date().toLocaleDateString("fr-CA"),
      format: 'dd-mm-yyyy',
      weekDayLength: 2,
   });
   $('#submit-first-rolling-form').click(function(){
      let start_date = $('#choose-date').val();
      let end_date = $('#end-date').val();
      console.log(start_date,end_date);
      if(start_date && end_date) $('#form-2-after-1st').removeClass('d-none');
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
   $(document).on('change','.location-select-ns',function(){
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

      $(this).parent().find('input.input-location_fee').val(location_price)
      // console.log('location_price => ',location_price);
      // console.log('admin_fee => ',admin_fee);
      // console.log('your_fee => ',your_fee);
      // console.log('total => ',total);
      $(this).parent().parent().find('input.total_fee').val(total)
   })
</script>
@endsection