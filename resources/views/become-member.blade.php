@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/become-member.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid cart-jumbotron">
        @include('navbar')
        <div class="frontpage become-member-frontpage">
          <div class="container become-member">
            <div class="become-member-header">
              <span>BECOME A MEMBER</span>
            </div>
            <div class="sign-up-group col-lg-12">
              <div class="buyer-signup col-lg-4">
                <div class="signup-condition-group">
                  <div class="buyer-signup-header">
                    <span>BUYER</span>
                    <div class="round-free"><span>FREE</span></div>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Unlimited access to entire library of free
                      resources</span
                    >
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Purchase items from catalogue</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>New items daily</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Rate and comment on items purchased</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Mobile and tablet responsive for iPhone, iPad and android
                      devices</span
                    >
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Profile to appear on homepage</span>
                  </div>
                </div>
                <div class="free-btn-div">
                  <a href="/buyer-signup" class="free-btn">Sign Up Free</a>
                </div>
              </div>
              <div class="platinum-signup col-lg-4">
                <div class="signup-condition-group platinum-signup-group">
                  <div class="buyer-signup-header platinum-signup-header">
                    <span>PLATINUM</span>
                    <p>Best Value</p>
                    <div class="round-free round-platinum">
                      <span class="price"
                        >$4.95
                        <p>PER MONTH</p></span
                      >
                    </div>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Unlimited access to entire library of free
                      resources</span
                    >
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Purchase items from catalogue</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>New items daily</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Rate and comment on items purchased</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Mobile and tablet responsive for iPhone, iPad and android
                      devices</span
                    >
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Profile to appear on homepage</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Unlimited product listings & no listing fees</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Sell items & earn 100% royalty on all sales</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Items/Products to appear on homepage</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Items/Products to appear at the top of selected
                      categories</span
                    >
                  </div>
                </div>
                <div class="free-btn-div1">
                  <a href="/platinum-signup" class="now-btn">Sign Up Now</a>
                </div>
              </div>
              <div class="seller-signup col-lg-4">
                <div class="signup-condition-group">
                  <div class="buyer-signup-header">
                    <span>SELLER</span>
                    <div class="round-free"><span>FREE</span></div>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Unlimited access to entire library of free
                      resources</span
                    >
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Sell items & earn 80% royalty on all sales</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Purchase items from catalogue</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>New items daily</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Rate and comment on items purchased</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span
                      >Mobile and tablet responsive for iPhone, iPad and android
                      devices</span
                    >
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Store/Profile to appear on homepage</span>
                  </div>
                  <div class="signup-condition signup-condition1">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Sell items and earn 80% royalty</span>
                  </div>
                  <div class="signup-condition">
                    <img src="assets/img/become-member/check.svg" />
                    <span>Unlimited product listings and no listing fees</span>
                  </div>
                </div>
                <div class="free-btn-div">
                  <a href="/seller-register" class="free-btn"
                    >Sign Up Free</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
@endsection