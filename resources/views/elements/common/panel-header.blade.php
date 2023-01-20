@include('elements.admin.account.admin-fee-sidebar')
<?php
$cart_count = 0;
if (Cookie::get('myCart')) {
    $cart = json_decode(Cookie::get('myCart'));
    $cart_count = count($cart);
}
?>
<header class="panel-header">
    <div class="row m-0 align-items-center">
        @if(Auth::user()->roles->first()->name =='User')
            @if( Request::segment(2) != 'profile')
            <div class="col-12 col-md-12 col-lg-7 booking-custom-location order-2 order-lg-1">
                <div class="booking-process-bar d-flex align-items-center flex-wrap flex-md-nowrap gap-1">
                    <span class="h4 text-nowrap mb-0 turquoise-100 me-3">Booking progress</span>
                    <div class="d-flex align-items-center w-100">
                        <div class="progress body-1 w-100">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{config('ceremonyStatus.booking_progress.'.Auth::user()->booking->status) }}" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">{{config('ceremonyStatus.booking_progress.'.Auth::user()->booking->status) }}</div>
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
                                <a href="#" class="user-dash-links turquoise-100 d-inline-block mt-3">Click here here to
                                    set up NoIM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endif
        <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-end mb-4 mb-md-0 order-lg-2 order-1">
            <nav class="navbar navbar-expand-sm bg-light p-0 align-self-center">
                <div class=" navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 l d-flex flex-row ">
                        @if(Auth::user()->roles->first()->name =='User')
                        <li class="nav-item dropdown align-self-center me-3 user-header-login">
                            <a role="button" class="cart-icon-header position-relative show-addon-basket-header" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <img src="/images/cart-icon.svg" lass="img-fluid" alt="Cart Icon">
                                <span class="cart-item-counting">{{ $cart_count }}</span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item dropdown align-self-center me-3">
                            <a type="button" class="nav-link dropdown-toggle notification" href="#"
                                id="notification" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg" class="notification-img" width="18"
                                    height="22" viewBox="0 0 18 22">
                                    <path
                                        d="M8.9769 21.0855C10.5715 21.0855 11.8641 19.7929 11.8641 18.1983C11.8641 18.1713 11.8637 18.1443 11.863 18.1174C11.8566 17.8846 11.6546 17.7152 11.4217 17.7125L6.54364 17.6572C6.3107 17.6546 6.10494 17.8193 6.09333 18.052C6.09091 18.1005 6.08968 18.1492 6.08968 18.1983C6.08968 19.7929 7.38233 21.0855 8.9769 21.0855Z"
                                        fill="#B6CED0" />
                                    <path
                                        d="M2.24006 8.09304C2.24006 4.37239 5.25624 0.875 8.9769 0.875C12.6976 0.875 15.7137 4.37239 15.7137 8.09304V10.4612C15.7137 11.7096 16.2476 12.8984 17.1807 13.7278C18.1819 14.6178 17.5524 16.2735 16.2128 16.2735H1.74102C0.401429 16.2735 -0.228077 14.6178 0.773148 13.7278C1.70621 12.8984 2.24006 11.7096 2.24006 10.4612V8.09304Z"
                                        fill="#B6CED0" />
                                </svg>
                                @if (count(auth()->user()->unreadNotifications) > 0)
                                    <span
                                        class="position-absolute  translate-middle notification-icon bg-accent-blue-100 border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                @endif
                            </a>
                            <div class="dropdown-menu p-0 notification-dropdwon" aria-labelledby="notification">
                                <div class="card card-notification">
                                    <div class="cursor-pointer card-header d-flex justify-content-end "
                                        onclick="event.preventDefault(); document.getElementById('notification-form').submit();">
                                        Mark all as read
                                    </div>
                                    <form id="notification-form" action="{{ route('notifications.store') }}"
                                        method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <div class="card-body scrollbar" id="style-3">
                                        <div class="force-overflow">
                                            <ul>

                                                @if (count(auth()->user()->notifications) > 0)
                                                    @foreach (auth()->user()->notifications as $not)
                                                        <li class="turquoise-20">
                                                            <div class="d-flex">
                                                                @if ($not->status == 0)
                                                                    <div class="me-2 align-self-start"><span
                                                                            class="dot align-self-start"></span>
                                                                    </div>
                                                                @endif
                                                                <div>
                                                                    <p class="neutral-70 small-text3 mb-2px">
                                                                        {{ $not->created_at }}
                                                                    </p>
                                                                    <a class="cursor-pointer text-decoration-none"
                                                                        onclick="readNotification('{{ route('notifications.update', $not->id) }}', '/{{ $not->redirection_url }}')">
                                                                        <p class="body-3-medium  text-black mb-0">
                                                                            {{ $not->title }}:
                                                                            {{ $not->body }}</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="turquoise-20">
                                                        <div class="d-flex">
                                                            <p class="neutral-70 small-text3 mb-2px">
                                                                No notification found.
                                                            </p>
                                                        </div>
                                                    </li>
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link dropdown-toggle d-flex admin-profile py-0" href="#"
                                id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="align-self-center"><img src="/images/icons/header-logo.svg"  class="img-fluid me-2" style="min-width: 51px;"></div>
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
                                
                                <li>
                                    @if(Auth::user()->roles->first()->name =='Admin')
                                        <a class="dropdown-item" href="/account"><img src="/images/icons/team.svg" class="img-fluid">Settings Profile</a>
                                    
                                    @elseif(Auth::user()->roles->first()->name =='Celebrant')
                                        <a class="dropdown-item" href="{{route('getCelebrantAccount')}}"><img src="/images/icons/team.svg" class="img-fluid">Settings Profile</a>
                                    @elseif(Auth::user()->roles->first()->name =='User')
                                        <a class="dropdown-item" href="{{route('getUserAccount')}}"><img src="/images/icons/team.svg" class="img-fluid">Settings Profile</a>
                                    @endif
                                </li>
                                {{-- <li><a class="dropdown-item" href="role"><img src="/images/icons/roles.svg" class="img-fluid">Roles & right</a></li> --}}

                              
                                @if(Auth::user()->roles->first()->name =='Admin')
                                <li>
                                    <a role="button" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#admin_fee_sidebar"><img src="/images/icons/tax-icon.svg" class="img-fluid">Settings admin tax</a>
                                </li>
                                @endif

                                <li>
                                    <a class="dropdown-item logout" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <img src="/images/icons/logout.svg" class="img-fluid">Log out</a>
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
        @if(Auth::user()->roles->first()->name !='User')
        <div class="col-sm-6 align-self-center order-2 order-lg-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php $segments = ''; ?>

                    @foreach (Request::segments() as $segment)
                        <?php 
                        
                            // echo $segment."<br>";
                            if($segment =='user' || $segment =='noim'){
                                // dd(Request::segment(3));
                                $segments = '/marriages/detail/'.Request::segment(3);
                            }
                            else if($segment =='upcoming' || $segment =='all-records-tab'){
                             
                                $segments = '/upcoming/all-records-tab';
                            }

                            else if($segment =='marriages' || $segment =='all-records-tab'){
                                $segments = '/marriages/all-records-tab';
                            }
                            else if($segment =='locations' || $segment == 'all-requests'){
                                $segments = '/locations/all-requests';
                            }
                            else if($segment =='all-payments' || $segment =='invoice-couple' || $segment =='celebrants-invoice'){
                                $segments = '/all-payments/celebrants-invoice';
                            }
                            else if($segment =='addons' || $segment =='all-ads-on-tab'){
                                $segments = '/addons/all-ads-on-tab';
                            }
                            else{
                                $segments .= '/' . $segment;
                            } 
                        ?>
                        <li class="breadcrumb-item" style="text-transform: capitalize;">
                            <?php  if(is_numeric($segment)){?>
                            @if (trim($__env->yieldContent('page-name')))
                                <a>@yield('page-name')</a>
                            @endif
                            <?php }else{?>
                            <a href="{{ $segments }}">{{ $segment }}</a>
                            <?php  }?>
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
        @endif
    </div>
</header>
@include('pages.js')
@include('elements.common.basket')
