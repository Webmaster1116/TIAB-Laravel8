@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/buyer-signup.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid cart-jumbotron">
        @include('navbar')
        <div class="frontpage login-frontpage">
          <div class="login container">
            <div class="buyer-signup-bg">
              <img src="assets/img/become-member/buyer-signup.svg" />
            </div>
            <div class="login-box">
              <div class="login-header">
                <span>Seller Registration</span>
              </div>
              <div class="personal">
                <span>Personal Information</span>
              </div>
              <div class="login-input">
                <div>
                  <input class="input1" type="text" placeholder="First Name:" />
                  <input class="input1" type="text" placeholder="Last Name:" />
                </div>
                <input
                  class="input2"
                  type="text"
                  placeholder="Date of Birth (YYYY/MM/DD)"
                />
                <div>
                  <input
                    class="input1"
                    type="text"
                    placeholder="State / Territory"
                  />
                  <select class="form-control select1 select2">
                    <option selected>Country / Region</option>
                    <option>Australia</option>
                    <option>United State</option>
                    <option>United Kingdom</option>
                    <option>Russia</option>
                  </select>
                </div>

                <input
                  class="input2"
                  type="text"
                  placeholder="Referral Code / Referred By "
                />
                <select class="form-control select1">
                  <option selected>How did you hear about TeachInABox</option>
                  <option>Friend</option>
                  <option>Teacher</option>
                  <option>Family</option>
                  <option>Colleague</option>
                </select>
              </div>
              <div class="login-btn-group">
                <a href="/seller-login-information" class="login-btn"
                  >Continue</a
                >
              </div>
            </div>
          </div>
        </div>
      </header>

     @include('footer')

      
@endsection