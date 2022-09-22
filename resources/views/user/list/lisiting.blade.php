@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-lg-2 p-0">
   @include('elements.common.user-sidebar')
</div>
<div class="col-md-9 col-lg-10 px-md-4">
   @include('elements.user-header')
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
         <div class="row">
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
                                 <li class="text-decoration-line-through">Upload NoIM</li>
                                 <li class="dot-list">&#x2022;</li>
                                 <li >Due May 25, 2022 <span  class="finished ms-2">Finished</span></li>
                              </ul>
                              <p class="mb-0 body-3-regular neutral-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam lorem, ullamcorper vel ante id, pellentesque venenatis nunc. Aen...</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-2  text-end">
                        <div class="dropdown align-self-center list-dropdown ">
                           <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="/images/icons/three-dots.svg" class="img-fluid" alt="dropdown-icon">
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#edit" aria-controls="edit">Edit</a></li>
                              <li><a class="dropdown-item cursor-pointer" href="#">Delete</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-3">
               <div class="list-box">
                  <div class="row">
                     <div class="col-10 ">
                        <div class="d-sm-flex">
                           <div class="form-check me-3">
                              <input class="form-check-input" type="checkbox" name="remember" id="checkbox2" autocomplete="off">
                              <label class="form-check-label small-text2" for="checkbox2">
                              </label>
                           </div>
                           <div class="mt-3 mt-sm-0">
                              <ul class="list ps-0 mb-2">
                                 <li class="text-decoration-line-through">Sett call with marriage celebrant</li>
                                 <li class="dot-list">&#x2022;</li>
                                 <li >Due Aug 3, 2022 </li>
                              </ul>
                              <p class="mb-0 body-3-regular neutral-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam lorem, ullamcorper vel ante id, pellentesque venenatis nunc. Aen...</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-2  text-end">
                        <div class="dropdown align-self-center list-dropdown ">
                           <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="/images/icons/three-dots.svg" class="img-fluid" alt="dropdown-icon">
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item cursor-pointer"  data-bs-toggle="offcanvas" data-bs-target="#edit" aria-controls="edit">Edit</a></li>
                              <li><a class="dropdown-item cursor-pointer" href="#">Delete</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-3">
               <div class="list-box">
                  <div class="row">
                     <div class="col-10 ">
                        <div class="d-sm-flex">
                           <div class="form-check me-3">
                              <input class="form-check-input" type="checkbox" name="remember" id="checkbox3" autocomplete="off">
                              <label class="form-check-label small-text2" for="checkbox3">
                              </label>
                           </div>
                           <div class="mt-3 mt-sm-0">
                              <ul class="list ps-0 mb-2">
                                 <li class="text-decoration-line-through">Check out add-ons</li>
                                 <li class="dot-list">&#x2022;</li>
                                 <li >Due Aug 10, 2022 </li>
                              </ul>
                              <p class="mb-0 body-3-regular neutral-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam lorem, ullamcorper vel ante id, pellentesque venenatis nunc. Aen...</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-2  text-end">
                        <div class="dropdown align-self-center list-dropdown ">
                           <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="/images/icons/three-dots.svg" class="img-fluid" alt="dropdown-icon">
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#edit" aria-controls="edit">Edit</a></li>
                              <li><a class="dropdown-item cursor-pointer" href="#">Delete</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.user.list.edit')
@include('elements.user.list.add')
@endsection