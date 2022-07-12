@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.partner-panel-header')
         <div class="card panel-card">
            <div class="card-body">
               <div class="align-items-center d-flex justify-content-center create-notes">
                  <div class="row">
                    <div class="col-12 text-center">
                        <img src="/images/admin/partner/create-notes.svg" alt="Create Notes" class="img-fluid">
                    </div>
                    <div class="col-12 text-center">
                        <a class="theme-btn primary-btn d-inline-block mt-5 mb-2" href="./create-tax-invoice" data-bs-toggle="offcanvas" data-bs-target="#partner_create_note_sidebar">
                            <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                            Create notes
                        </a>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.partner-create-note-sidebar')
@endsection