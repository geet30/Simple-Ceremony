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
   $(document).on('click','.get-sub-slots',function(){
      let data = $(this).data();
      let day = data.day;
      let url = data.url;
      let className = data.class;
      let key = $('.'+className+':last').data('keyid') || 1;
      console.log(data);
      key++;
      $.ajax({
         url:url,
         data:{day:day,key:key},
         success : function(rs){
            // console.log(rs);
            $('.'+className+':last').after(rs);
         },
         error: function(er){
            console.log(er);
         }
      })
   });
   $(document).on('click','.ns-event-checkbox-uncheck',function(){
      let data = $(this).parent().parent().parent().data()
      let classes = $(this).parent().parent().parent().attr('class')
      $('.'+data.target).show()
      $('.'+classes).hide()
      console.log('unchecked',data);
      console.log('classes',classes);
   });
   $(document).on('click','.ns-event-checkbox-check',function(){
      let data = $(this).parent().parent().parent().data()
      let classes = $(this).parent().parent().parent().attr('class')
      console.log('checked',data);
      console.log('classes',classes);
      $('.'+data.target).show()
      $('.'+classes).hide()
   })
   // function ajaxRequest($url,callback){
   //    $ajax
   // }
</script>
@endsection