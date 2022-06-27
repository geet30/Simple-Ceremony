<nav class="navbar sticky-top navbar-expand-lg theme-navbar navbar-light ">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="/">
        <img src="images/main-logo.svg" class="img-fluid" alt="Logo">
      </a>
      <!-- Mobile Cart Icon With Toggle-->
      <div class="d-flex mobile-toogle-with-cart align-items-center">
        <a class="nav-item nav-link align-self-lg-center cart-icon-header d-block d-lg-none position-relative me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <img src="images/cart-icon.svg" lass="img-fluid" alt="Cart Icon">
          <span class="cart-item-counting">3</span>
        </a>
        <!-- Navbar toggle -->
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <!-- Collapse -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <!-- Nav -->
        <div class="navbar-nav ">
          <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/" aria-current="page">Home</a>
          <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/location">Location</a>
          <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/how-it-works">How it works</a>
          <a class="nav-item nav-link align-self-lg-center me-lg-4" href="/contact-us">Contact us</a>
          <a class="nav-item nav-link align-self-lg-center cart-icon-header d-none d-lg-block me-lg-4 position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img src="images/cart-icon.svg" lass="img-fluid" alt="Cart Icon">
            <span class="cart-item-counting">3</span>
          </a>
          <a href="/location" class="theme-btn primary-btn w-full w-lg-auto me-lg-4 mb-3 mb-lg-0">Make a booking</a>
          <a href="#" class="theme-btn primary-btn-border w-full w-lg-auto">Login</a>
        </div>
      </div>
    </div>
</nav>
@include('elements.basket')