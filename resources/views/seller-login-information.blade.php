@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/buyer-login-information.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid seller-jumbotron">
        @include('navbar')
        <div class="frontpage login-frontpage">
          <div class="login container">
            <div class="buyer-signup-bg">
              <img src="assets/img/become-member/seller-login-information.svg" />
            </div>
            <div class="login-box">
              <form action="{{ route('seller-signup-information2') }}" method="POST">
                @csrf
                <div class="login-header">
                  <span>Seller Registration</span>
                </div>
                <div class="personal">
                  <span>Login Information</span>
                </div>
                <div class="login-input">

                  <input type="hidden" name="first_name" value="{{$first_name}}"/>
                  <input type="hidden" name="last_name" value="{{$last_name}}"/>
                  <input type="hidden" name="birthday" value="{{$birthday}}"/>
                  <input type="hidden" name="country" value="{{$country}}"/>
                  <input type="hidden" name="state" value="{{$state}}"/>
                  <input type="hidden" name="hear" value="{{$hear}}"/>
                  <input type="hidden" name="referral_code" value="{{$referral_code}}"/>
                  <input
                    class="buyer-input"
                    type="email"
                    placeholder="Email Address"
                    name="email"
                    required
                  />
                  <input
                    class="buyer-input"
                    type="email"
                    placeholder="Re Enter Email Address"
                    name="email_confirmation"
                    required
                  />
                  <input
                    class="buyer-input"
                    type="email"
                    placeholder="Paypal Email Address"
                    name="paypal"
                    required
                  />
                  <span
                    >Please enter your current paypal address so we are able to
                    deposit the money from your sales monthly. If you do not have
                    a paypal account it is a very simple process, follow the link
                    below. We also recommend you sign up to a premier or business
                    PayPal account. If you have an existing personal paypal
                    account, then we recommend you upgrade to one the above
                    accounts, it's free to do so</span
                  >
                  <input
                    class="user-id buyer-input"
                    type="text"
                    placeholder="Create your Teach In A Box User ID / Store Name"
                    name="user_id"
                    required
                  />
                  <span
                    >Please note that no spaces or special characters are allowed
                    in the User ID / Store Name - Characters allowed include
                    letters A-Z and numbers 0-9. You can also utilise fullstops
                    (.) and underscores (_) to space out your User ID / Store
                    Name. Please note: User ID / Store Name cannot be changed once
                    you have registered, so please choose your name
                    carefully.</span
                  >
                  <input
                    class="password buyer-input"
                    type="password"
                    placeholder="Create your Password"
                    name="password"
                    required
                  />
                  <input
                    class="buyer-input"
                    type="password"
                    placeholder="Re enter your password"
                    name="password_confirmation"
                    required
                  />

                  <select class="form-control select1" id="secret_question" name="secret_question">
                    <option vlaue="0">Pick a secret question</option>
                    <option vlaue="Your first pet's name?">Your first pet's name?</option>
                    <option value="Your most favorite song?">Your most favorite song?</option>
                    <option value="Your dream car?">Your dream car?</option>
                    <option value="Your most favorite football player?">Your most favorite football player?</option>
                  </select>
                  <span
                    >This will be required if you happen to forget your username
                    or password to regain access to your account</span
                  >
                  <input
                    class="secret-answer buyer-input"
                    type="text"
                    placeholder="Your secret answer"
                    name="answer"
                    required
                  />
                </div>
                <div class="login-btn-group">
                  <button type="submit" class="login-btn">Continue</button>
                </div>
              </form>

              
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
@endsection