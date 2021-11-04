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
              <form action="{{ route('seller-signup-information1') }}" method="POST">
              @csrf
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <div class="login-header">
                  <span>Seller Registration</span>
                </div>
                <div class="personal">
                  <span>Personal Information</span>
                </div>
                <div class="login-input">
                  <div>
                    <input class="input1" type="text" placeholder="First Name:" name="first_name" required/>
                    <input class="input1" type="text" placeholder="Last Name:" name="last_name" required/>
                  </div>
                  <input
                    class="input2"
                    type="date"
                    placeholder="Date of Birth (YYYY/MM/DD)"
                    name="birthday" required
                  />
                  <div>
                    <input
                      class="input1"
                      type="text"
                      placeholder="State / Territory"
                      name="state" required
                    />
                    <select class="form-control select1 select2" id="country" name="country">
                      <option>Country / Region</option>
                      <option value="australia">Australia</option>
                      <option value="united_state">United State</option>
                      <option value="united_kingdom">United Kingdom</option>
                      <option value="russia">Russia</option>
                    </select>
                  </div>

                  <input
                    class="input2"
                    type="text"
                    placeholder="Referral Code / Referred By "
                    name="referral_code" required
                  />
                  <select class="form-control select1" id="hear" name="hear">
                    <option value="0">How did you hear about TeachInABox</option>
                    <option value="friend">Friend</option>
                    <option value="teacher">Teacher</option>
                    <option value="family">Family</option>
                    <option value="colleague">Colleague</option>
                  </select>
                </div>
                <div class="login-btn-group">
                  <button type="submit" class="login-btn"
                    >Continue
                    </button>
                </div>
              </form>
            </div>
            
            
          </div>
        </div>
      </header>

     @include('footer')

      
@endsection