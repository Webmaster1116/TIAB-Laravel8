@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/login.css" />
<link rel="stylesheet" href="assets/css/forgot-password.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid cart-jumbotron">
      @include('navbar')
        <div class="frontpage login-frontpage">
          <div class="login container forgot-password">
            <div class="login-box">
              <div class="login-header">
                <span>Forgot Password</span>
              </div>

              <div class="login-input forgot-header-content">
                <span
                  >Please enter the email address you provided in the
                  registration process so we can send you your password</span
                >
                <input type="email" placeholder="Email" />
                <hr />
              </div>
              <div class="login-btn-group forgot-btn-group">
                <button class="login-btn forgot-btn">Send my Password</button>
                <a href="/login">Login</a>
              </div>
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
@endsection
