@extends('layouts.master')
@section('content')
<div class="container h-100vh">
   <div class="row align-items-center h-100">
      <div class="col-md-12">
        <div class="text-center">
          <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M40 0C17.91 0 0 17.91 0 40C0 62.09 17.91 80 40 80C62.09 80 80 62.09 80 40C80 17.91 62.09 0 40 0ZM53.1853 53.2243C52.2104 54.1992 50.6206 54.1942 49.6501 53.2243L40 43.5396L30.3549 53.2249C29.38 54.1947 27.7946 54.1997 26.8197 53.2249C25.8398 52.255 25.8398 50.6646 26.8147 49.6897L36.4698 39.9994L26.8147 30.3097C25.8398 29.3292 25.8398 27.7494 26.8197 26.7696C27.8002 25.7997 29.38 25.7997 30.3549 26.7796L40 36.4593L49.6501 26.779C50.62 25.7991 52.2004 25.7991 53.1753 26.764C54.1552 27.7439 54.1552 29.3243 53.1853 30.3041L43.5252 39.9994L53.1853 49.6891C54.1602 50.6646 54.1602 52.2494 53.1853 53.2243L53.1853 53.2243Z" fill="#FF5C5C"/>
          </svg>
          <h3 class="h3 netural-100 mb-2 mt-4">Your payment has been failed</h3>
          @if($errors->any())
          <p class="subheader-3 mb-4">{{$errors->first()}}</p>
          @endif
          <a href="{{url('location')}}" class="theme-btn primary-btn-border d-inline-block mb-3">Back to home</a>
        </div>
      </div>
   </div>
</div>
<style>
  .theme-navbar{
    display: none;
  }
  footer {
    display: none;
  }
</style>
@endsection
