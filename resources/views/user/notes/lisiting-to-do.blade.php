@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="card panel-card ">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="h3 neutral-100">Notes</h1>
                  </div>
                  <div class="col-md-6 text-md-end"> <a class="theme-btn primary-btn d-inline-flex justify-content-center" href="/user/create">
                     <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                     Create new note
                     </a>
                  </div>
               </div>
               <div class="row mt-4">
                     @include('elements.user.notes.list', ['title' => 'locations', '' => '', 'notes' => [
                           [
                            'title' => ' Title of the note',
                            'date' => ' June 20, 2022',
                            'share' => ' 2',
                            'info' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta...',
                            'attachment' => ' 3',

                           ],
                           [
                            'title' => ' Title of the note',
                            'date' => ' June 20, 2022',
                            'share' => ' 2',
                            'info' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta...',
                            'attachment' => '0',

                           ],
                           [
                            'title' => ' Title of the note',
                            'date' => ' June 20, 2022',
                            'share' => ' 2',
                            'info' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta...',
                            'attachment' => '2',

                           ],
                           [
                            'title' => ' Title of the note',
                            'date' => ' June 20, 2022',
                            'share' => ' 2',
                            'info' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta...',
                            'attachment' => '4',

                           ],
                           [
                            'title' => ' Title of the note',
                            'date' => ' June 20, 2022',
                            'share' => ' 2',
                            'info' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta...',
                            'attachment' => '2',

                           ],
                           [
                            'title' => ' Title of the note',
                            'date' => ' June 20, 2022',
                            'share' => ' 2',
                            'info' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta...',
                            'attachment' => '5',

                           ],
                     ]])
      
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection