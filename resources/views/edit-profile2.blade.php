@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/mydashboard.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid profile-jumbotron">
        @include('navbar')
        <div class="frontpage">
          <div class="col-lg-12">
            <div class="container bashboard-container">
              <img src="assets/img/mydashboard/round-avatar.svg" />
            </div>
            <div class="container">
                @include('mydashboard-sidebar')
              <div class="col-lg-8 profile">
                <div class="profile-header">Edit Profile</div>
                <div class="login-info">Login Information</div>
                <div class="profile-inputs">
                  <div class="profile-input">
                    <span>Email Address</span>
                    <input type="email" placeholder="Enter Email" />
                  </div>
                  <div class="profile-input">
                    <span>Paypal Email Address</span>
                    <input
                      type="email"
                      placeholder="Enter Paypal email address"
                    />
                    <span class="sell-descript"
                      >Please enter your current paypal address so we are able
                      to deposit the money from your sales monthly. If you do
                      not have a paypal account it is a very simple process,
                      follow the link below. We also recommend you sign up to a
                      premier or business PayPal account. If you have an
                      existing personal paypal account, then we recommend you
                      upgrade to one the above accounts, it's free to do
                      so</span
                    >
                  </div>
                  <div class="profile-input">
                    <span>Teach In A Box User ID / Store Name</span>
                    <input type="text" placeholder="Enter Store name" />
                  </div>
                  <div class="profile-input">
                    <span>New Password</span>
                    <input type="password" placeholder="*************" />
                  </div>
                  <div class="profile-input">
                    <span>Re enter your new password</span>
                    <input type="password" placeholder="*************" />
                  </div>
                  <div class="profile-input">
                    <span class="sell-title-header"
                      >Pick a secret question</span
                    >
                    <select class="form-control">
                      <option>select</option>
                      <option>select</option>
                      <option>select</option>
                    </select>
                    <span class="sell-descript"
                      >This will be required if you happen to forget your
                      username or password to regain access to your
                      account</span
                    >
                  </div>
                  <div class="profile-input">
                    <span>Your secret answer</span>
                    <input type="text" placeholder="Your aswer" />
                  </div>
                  <div class="login-info australian-only">
                    Australian Residents Only
                  </div>

                  <div class="profile-input">
                    <div class="gst-register">
                      <span>GST Registered:</span>
                      <!-- <input class="gst-register-input" type="checkbox" /> -->
                      <img src="assets/img/home/Icon-sm-checkbox.svg" />
                      <span>Yes</span>
                    </div>
                    <input
                      class="buyer-input"
                      type="text"
                      placeholder="Provide ABN :"
                    />
                  </div>
                  <div>
                    <div class="login-info australian-only">
                      Upload Profile Picture or Logo
                    </div>
                    <span class="sell-descript"
                      >This will assist buyers with transaction confidence and
                      familiarity with sellers</span
                    >
                    <img
                      class="upload-img upload-img1"
                      src="assets/img/mydashboard/upload-sm.svg"
                    />
                  </div>
                  <div>
                    <div class="login-info australian-only">
                      Store Banner Image
                    </div>
                    <span class="sell-descript banner-content"
                      >Upload your image (.gif, .jpg, .jpeg, and .png. files
                      accepted. Image size is recommended to be between 700H x
                      100V px.)</span
                    >
                    <img
                      class="upload-img upload-img2"
                      src="assets/img/mydashboard/upload-big.svg"
                    />
                  </div>
                  <div class="sell-btns">
                    <a class="sell-btn" href="javacript:void(0)">Update</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
@endsection