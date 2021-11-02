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
                  <input type="email" placeholder="Email" name="email" required autofocus/>
                  <hr />
                    @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  <input type="password" placeholder="Password" name="password" required/>
                  <hr />
                    @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="login-btn-group">
                  <button type="submit" class="login-btn">Login</button>
                  <a href="/forgot-password">Forgot Password?</a>
                </div>
                <div class="login-register">
                  <span>Don't have an account yet?</span>
                  <a href="/register">Register here</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>


    <!-- @section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection -->