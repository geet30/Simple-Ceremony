<?php
$cart_count = 0;
if (Cookie::get('myCart')) {
    $cart = json_decode(Cookie::get('myCart'));
    $cart_count = count($cart);
}
?>
<header class="panel-header">
   <div class="row m-0">
      <div class="col-md-12 col-lg-8 booking-custom-location align-self-center">
         <div class="booking-process-bar d-flex align-items-center">
            <div class="align-self-center me-3">
               <a  href="/user/NoIM" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn "><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="progress body-1 w-75 align-self-center">
               <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{config('ceremonyStatus.booking_progress.'.Auth::user()->booking->status) }}" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">{{config('ceremonyStatus.booking_progress.'.Auth::user()->booking->status) }}</div>
            </div>
            <div class="booking-info ms-3">
               <img src="/images/user/info-light.svg" alt="Information" class="info-icon">
               <div class="booking-info-details">
                  <p class="body-2 neutral-100">Please, set your NoIM to get your marriage legal documents :</p>
                  <ul class="body-2 neutral-100">
                     <li>Notice of Intended Marriage form</li>
                     <li>Official Certificate of Marriage</li>
                     <li>Statement of No Legal Barriers</li>
                     <li>Marriage certificate</li>
                     <li>Certificate of Faithful performance of Interpreter</li>
                  </ul>
                  <a href="{{url('user/NoIM')}}" class="user-dash-links turquoise-100 d-inline-block mt-3">Click here here to set up NoIM</a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-12 col-lg-4 d-flex justify-content-end">
         <nav class="navbar navbar-expand-sm bg-light p-0 align-self-center">
            <div class=" navbar-collapse" id="navbarScroll">
               <ul class="navbar-nav ms-auto my-2 my-lg-0 l d-flex flex-row ">
                  <li class="nav-item dropdown align-self-center me-3 user-header-login">
                     <a role="button" class="cart-icon-header position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                     <img src="{{asset('/images/cart-icon.svg')}}" lass="img-fluid" alt="Cart Icon">
                     <span class="cart-item-counting">{{ $cart_count }}</span>
                     </a>
                  </li>
                  <li class="nav-item dropdown align-self-center me-3">
                     <a type="button" class="nav-link dropdown-toggle notification"  href="#" id="notification" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="notification-img" width="18" height="22" viewBox="0 0 18 22" >
                           <path d="M8.9769 21.0855C10.5715 21.0855 11.8641 19.7929 11.8641 18.1983C11.8641 18.1713 11.8637 18.1443 11.863 18.1174C11.8566 17.8846 11.6546 17.7152 11.4217 17.7125L6.54364 17.6572C6.3107 17.6546 6.10494 17.8193 6.09333 18.052C6.09091 18.1005 6.08968 18.1492 6.08968 18.1983C6.08968 19.7929 7.38233 21.0855 8.9769 21.0855Z" fill="#B6CED0"/>
                           <path d="M2.24006 8.09304C2.24006 4.37239 5.25624 0.875 8.9769 0.875C12.6976 0.875 15.7137 4.37239 15.7137 8.09304V10.4612C15.7137 11.7096 16.2476 12.8984 17.1807 13.7278C18.1819 14.6178 17.5524 16.2735 16.2128 16.2735H1.74102C0.401429 16.2735 -0.228077 14.6178 0.773148 13.7278C1.70621 12.8984 2.24006 11.7096 2.24006 10.4612V8.09304Z" fill="#B6CED0"/>
                        </svg>
                        <span class="position-absolute  translate-middle notification-icon bg-accent-blue-100 border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                        </span>
                     </a>
                     <div class="dropdown-menu p-0 notification-dropdwon" aria-labelledby="notification">
                        <div class="card card-notification">
                           <div class="card-header d-flex justify-content-end ">
                              Mark all as read
                           </div>
                           <div class="card-body  scrollbar"  id="style-3">
                              <div class="force-overflow">
                                 <ul>
                                    <li class="turquoise-20">
                                       <div class="d-flex">
                                          <div class="me-2 align-self-start"><span class="dot align-self-start"></span></div>
                                          <div>
                                             <p class="neutral-70 small-text3 mb-2px">15-03-2022 11.00</p>
                                             <p class="body-3-medium  text-black mb-0">Documents David and Sarah are approved by Marriage Celebrant</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="d-flex">
                                          <div class="me-2 align-self-start">&nbsp;</div>
                                          <div>
                                             <p class="neutral-70 small-text3 mb-2px">15-03-2022 09.00</p>
                                             <p class="body-3-medium  text-black mb-0">Documents David & Sarah add add-on videographer</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li  class="turquoise-20">
                                       <div class="d-flex">
                                          <div class="me-2 align-self-start"><span class="dot align-self-start"></span></div>
                                          <div>
                                             <p class="neutral-70 small-text3 mb-2px">15-03-2022 08.00</p>
                                             <p class="body-3-medium  text-black mb-0">New booking : John & Emma</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li  class="turquoise-20">
                                       <div class="d-flex">
                                          <div class="me-2 align-self-start"><span class="dot align-self-start"></span></div>
                                          <div>
                                             <p class="neutral-70 small-text3 mb-2px">14-03-2022 17.00</p>
                                             <p class="body-3-medium  text-black mb-0">Marriage Celebrant Michael cancelled a wedding</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="d-flex">
                                          <div class="me-2 align-self-start">&nbsp;</div>
                                          <div>
                                             <p class="neutral-70 small-text3 mb-2px">14-03-2022 15.00</p>
                                             <p class="body-3-medium  text-black mb-0">Marriage Celebrant Michael cancelled a wedding</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="d-flex">
                                          <div class="me-2 align-self-start">&nbsp;</div>
                                          <div>
                                             <p class="neutral-70 small-text3 mb-2px">12-03-2022 08.00</p>
                                             <p class="body-3-medium  text-black mb-0">Prisillia decoration requested a new package</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown align-self-center">
                     <a class="nav-link dropdown-toggle d-flex admin-profile py-0" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="img-fluid me-3"></div>
                        <div class="align-self-center">

                           @if(Auth::user()->roles->first()->name =='User')
                           @php
                              $username ='';
                              $username = \App\Models\Booking::where(['user_id' => Auth::user()->id])->pluck('first_couple_name')->first();

                           @endphp
                           <p class="body-2 text-black mb-0">{{ ucfirst($username)}}</p>

                           @else
                              <p class="body-2 text-black mb-0">{{ (isset(auth()->user()->name)) ? auth()->user()->name : '' }}</p>
                              
                           @endif
                           <p class="small-text3 mb-0 text-black">{{ auth()->user()->roles()->first()->name }}
                           </p>
                           </div>
                        <div class="fa-solid fa-chevron-down icon-rotate align-self-center ms-3"></div>
                     </a>
                     <ul class="dropdown-menu  admin-profile-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#"><img src="/images/icons/team.svg" class="img-fluid">Setting Profile</a></li>
                        <li><a class="dropdown-item logout" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <img src="/images/icons/logout.svg" class="img-fluid">{{ __('translation.logout') }} </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>
@include('elements.common.basket')