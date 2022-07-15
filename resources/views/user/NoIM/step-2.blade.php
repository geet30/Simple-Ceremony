@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 p-0 d-none d-md-block">
      @include('elements.user.steps.sidebar-text')
   </div>
   <div class="col-12 col-md-9 col-lg-10 px-md-4">
      @include('elements.user.steps.header')
      <div class="card noim-card mb-4">
         <form class="card-body needs-validation pb-5"  method="POST" novalidate>
            @include('elements.user.steps.step2-content')
           
            <div class="col-12">
               <a href="/user/documents" class="theme-btn primary-btn ">Save<img src="/images/icons/right-arrow.svg" class="img-fluid ms-2"></a> 
            </div>
         </form>
      </div>
   </div>
</div>
@endsection