@extends('layouts.panels')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-lg-2 p-0">
   @include('elements.common.user-sidebar')
</div>
<div class="col-md-9 col-lg-10 px-md-4">
   @include('elements.common.panel-header')
   <div class="card panel-card h-87vh">
      <div class="card-body">
         <div class="row mb-4">
            <div class="col-sm-6">
               <h1 class="h3 neutral-100 mb-0">List to-do</h1>
            </div>
            <div class="col-sm-6 text-sm-end mt-3 mt-sm-0"> <a class="theme-btn primary-btn d-inline-flex justify-content-center"  data-bs-toggle="offcanvas" data-bs-target="#add" aria-controls="add">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Create list to do
               </a>
            </div>
         </div>
         
         @if (session()->has('message'))
            <div class="alert {{ \Session::get('class') }} alert-dismissible fade show">
               {{ session()->get('message') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endif
         <div class="row">
         @foreach($lists as $list)
            <div class="col-12 mb-3">
               <div class="list-box">
                  <div class="row">
                     <div class="col-10 ">
                        <div class="d-sm-flex">
                           <div class="form-check me-3">
                              <input class="form-check-input" type="checkbox" name="remember" id="checkbox1" autocomplete="off" checked>
                              <label class="form-check-label small-text2" for="checkbox1">
                              </label>
                           </div>
                           <div class="mt-3 mt-sm-0">
                              <ul class="list ps-0 mb-2">
                                 <li class="text-decoration-line-through">{{$list->name}}</li>
                                 <li class="dot-list">&#x2022;</li>
                                 <li >Due {{date('M d, Y',strtotime($list->due_date))}}<span  class="finished ms-2">Finished</span></li>
                              </ul>
                              <p class="mb-0 body-3-regular neutral-100">{{$list->description}}</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-2  text-end">
                        <div class="dropdown align-self-center list-dropdown ">
                           <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="/images/icons/three-dots.svg" class="img-fluid" alt="dropdown-icon">
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item cursor-pointer getListToDoEditData" data-bs-toggle="offcanvas" data-id="{{$list->id}}" data-bs-target="#edit"  data-due_date="{{ $list->due_date }}"
                              data-name="{{ $list->name }}" data-description="{{ $list->description }}" aria-controls="edit" data-action="{{ route('list-to-do.update', $list->id)}}">Edit</a></li>
                              <li><a class="dropdown-item cursor-pointer" href="{{ route('list-to-do.destroy', $list->id) }}">Delete</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@include('elements.user.list.edit')
@include('elements.user.list.add')
@include('elements.common.js')
@endsection