<?php
$cart_count = 0;
if (Cookie::get('myCart')) {
    $cart = json_decode(Cookie::get('myCart'));
    $cart_count = count($cart);
    // dd($cart_count);
}
?>
<nav class="navbar sticky-top navbar-expand-lg theme-navbar navbar-light ">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">

            <img src="{{ asset('/images/main-logo.svg') }}" class="img-fluid" alt="Logo">
        </a>
        <!-- Mobile Cart Icon With Toggle-->
        <!-- <div class="d-flex mobile-toogle-with-cart align-items-center">
            <a class="nav-item nav-link align-self-lg-center cart-icon-header d-block d-lg-none position-relative me-3 show-addon-basket-header"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="{{ asset('/images/cart-icon.svg') }}" lass="img-fluid" alt="Cart Icon">
                <span class="cart-item-counting">{$cart_count }}</span>
            </a>
           
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div> -->
        <!-- Collapse -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <!-- Nav -->
            <div class="navbar-nav ">
                <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/" aria-current="page">Home</a>
                <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/location">Location</a>
                <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/how-it-works">How it works</a>
                <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/contact-us">Contact us</a>
                <!-- <a class="nav-item nav-link align-self-lg-center cart-icon-header d-none d-lg-block me-lg-4 position-relative show-addon-basket-header"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <img src="{{ asset('/images/cart-icon.svg') }}" lass="img-fluid" alt="Cart Icon">
                    <span class="cart-item-counting">{{ $cart_count }}</span>
                </a> -->
                <a href="{{ route('user.booking') }}"
                    class="theme-btn primary-btn w-full w-lg-auto me-lg-4 mb-3 mb-lg-0">Make a booking</a>
                <a href="/login" class="theme-btn primary-btn-border w-full w-lg-auto">Login</a>
            </div>
        </div>
    </div>
</nav>
@include('pages.js')
@include('elements.common.basket')
