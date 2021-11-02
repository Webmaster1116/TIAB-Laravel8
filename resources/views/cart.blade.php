@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/cart.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid cart-jumbotron">
      @include('navbar')
        <div class="frontpage cart-frontpage">
          <div class="teach-cart container">
            <div class="cart-title col-lg-12">
              <div class="col-lg-5">
                <div>Product Title</div>
              </div>
              <div class="col-lg-7">
                <div class="col-lg-4">Price</div>
                <div class="col-lg-4">Qty</div>
                <div class="col-lg-4">Amount</div>
              </div>
            </div>
            <div class="cart-title col-lg-12 cart-content">
              <div class="col-lg-5">
                <div class="cart-image-title">
                  <img src="assets/img/cart/cart-image1.svg" />
                  <div class="content1">READING RESPONSE WORKSHEETS</div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="col-lg-4 content2">$4.00</div>
                <div class="col-lg-4 content2">1</div>
                <div class="col-lg-4 content2 content3">
                  <span>$4.00</span>
                  <img src="assets/img/cart/Icon-delete.svg" />
                </div>
              </div>
            </div>
            <div class="col-lg-12 cart-total">
              <div class="col-lg-6"></div>
              <div class="col-lg-6 cart-total-content">
                <span class="content1">Total</span>
                <span class="content2">$4.00</span>
              </div>
            </div>
          </div>
          <div class="container cart-btn-group">
            <div class="middle-buttons">
              <button class="middle-button middle-button2">
                Continue Shopping
              </button>
            </div>
            <div class="middle-buttons">
              <button class="middle-button middle-button2">Checkout</button>
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
@endsection
