<nav
  class="navbar navbar-expand-md justify-content-between fixed-navbar teach-fixed-navbar"
  id="navigation"
>
  <div class="logo">
    <a href="/"
      ><img src="assets/img/home/home-logo.svg" alt="Home logo"
    /></a>
  </div>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarToggler"
    aria-controls="navbarToggler"
    aria-expanded="false"
    aria-label="Toggle navigation"
    id="mobileNav"
  >
    &#9776;
  </button>
  <div
    class="collapse navbar-collapse justify-content-end"
    id="navbarToggler"
  >
    <ul class="nav navbar-nav text-center">
      <li class="nav-item">
        <a class="nav-link nav-home" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-about" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-marketplace" href="/marketplace"
          >Marketplace</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link nav-pricing" href="/become-member"
          >Pricing</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link nav-contactus" href="">Contact Us</a>
      </li>
      @if (Auth::guest())
      <li class="nav-item">
        <a href="/login" class="home-login">
          <img src="assets/img/home/Icon-lock.svg" />Login
        </a>
      </li>
      @else 
      <li class="nav-item">
        <a class="nav-link nav-shopingcart" href="/cart"
          ><img src="assets/img/home/navicon-shopping-cart.svg"
        /></a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-hipchat" href="/inbox"
          ><img src="assets/img/home/navicon-hipchat.svg"
        /></a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link nav-notifications"
          data-toggle="modal"
          data-target="#notificationModal"
          ><img src="assets/img/home/navicon-notifications.svg"
        /></a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link nav-avatar"
          data-toggle="modal"
          data-target="#userModal"
          ><img src="assets/img/home/nav-avatar.svg"
        /></a>
      </li>
      @endif
    </ul>
  </div>
</nav>