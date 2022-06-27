@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2">
            @include('elements.user-sidebar')
        </div>
        <div class="col-md-9 col-lg-10">
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                           <div class="d-flex">
                              <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon"></div>
                                <div>
                                    <p class="body-1 mb-0">Before booking below you will need to have booked your ceremony.</p>
                                    <a href="/location" class="button-3">Register now</a>
                                </div>
                                <div>
                                    <button type="button" class="theme-btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <img src="/images/cross-blue-white.svg" class="img-fluid" alt="cross-icon">
                                    </button>
                                </div>
                           </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
