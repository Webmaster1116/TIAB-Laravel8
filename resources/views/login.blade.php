@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/login.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid cart-jumbotron">
        @include('navbar')
        <div class="frontpage login-frontpage">
          <div class="login container">
            <div>
              <img src="assets/img/login/login-bg.svg" />
            </div>
            <div class="login-box">
              <div class="login-header">
                <span>Sign in to Teach in a box</span>
              </div>
              <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="login-input">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <input type="email" placeholder="Email" name="email" required autofocus/>
                  <hr />
                  <input type="password" placeholder="Password" name="password" required/>
                  <hr />
                </div>
                <div class="login-btn-group">
                  <button type="submit" class="login-btn">Login</button>
                  <a href="/forgot-password">Forgot Password?</a>
                </div>
                <div class="login-register">
                  <span>Don't have an account yet?</span>
                  <a href="/become-member">Register here</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>