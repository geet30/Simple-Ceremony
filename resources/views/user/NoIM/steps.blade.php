@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 p-0">
      @include('elements.user.steps.sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.user.steps.header')
      <div class="card noim-card mb-4">
         <form class="card-body needs-validation pb-5"  method="POST" novalidate>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="100" class="scrollspy-example" tabindex="0" >
               <div id="person-1" >
                  @include('elements.user.steps.person-1')
               </div>
               <div id="person-2">
                  @include('elements.user.steps.person-2')
               </div>
               <div id="parents-1">
                  @include('elements.user.steps.parents-1')
               </div>
               <div id="parents-2">
                  @include('elements.user.steps.parents-2')
               </div>
               <div id="details-1">
                  @include('elements.user.steps.details-1')
               </div>
               <div id="details-2">
                  @include('elements.user.steps.details-2')
               </div>
               <div id="witness">
                  @include('elements.user.steps.witness')
               </div>
            </div>
            <div class="col-12">
               <a href="/user/step-2" class="theme-btn primary-btn ">Save and continue to fill referrers <img src="/images/icons/right-arrow.svg" class="img-fluid ms-2"></a> 
            </div>
         </form>
      </div>
   </div>
</div>
@endsection