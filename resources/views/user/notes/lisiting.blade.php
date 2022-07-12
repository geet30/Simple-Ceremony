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
               <div class="col-9 col-md-6 col-xl-4 col-xxl-3 mx-auto text-center empty-content">
                  <img src="/images/emplty-folder.png" class="img-fluid" alt="emplty-folder">
                  <div class="align-self-center  mt-5  ">
                     <a class="theme-btn primary-btn d-inline-flex justify-content-center" href="./lisiting-to-do">
                     <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                     Create note
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection