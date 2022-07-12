@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="card panel-card ">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="h3 neutral-100">Notes</h1>
                  </div>
                  <div class="col-md-6 text-md-end"> <a class="theme-btn primary-btn d-inline-flex justify-content-center" href="./lisiting-to-do">
                     <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                     Create new note
                     </a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-4 mb-3">1</div>
                  <div class="col-md-6 col-lg-4 mb-3">1</div>
                  <div class="col-md-6 col-lg-4 mb-3">1</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection