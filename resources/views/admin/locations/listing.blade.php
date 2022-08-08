@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
      @include('elements.panel-header')
      <div class="row pt-32">
   <div class="col-12">
      <ul class="nav theme-tabs location-tabs">
            <li class="nav-item">
               <a class="nav-link active" id="all-requests" data-bs-toggle="tab" data-bs-target="#requests" href="#">All request</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="all-packages" data-bs-toggle="tab" data-bs-target="#packages" href="#">All location packages</a>
            </li>
          </ul>
         <!-- tab content -->
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="requests" role="tabpanel" aria-labelledby="requests-tab">
               @include('elements.admin.location.all-requests')
            </div>
            <div class="tab-pane fade" id="packages" role="tabpanel" aria-labelledby="packages-tab">
               @include('elements.admin.location.all-packages')
            </div>
         </div>
         <!-- tab content -->
   </div>
</div>
      </div>
   </div>
</div>
@endsection