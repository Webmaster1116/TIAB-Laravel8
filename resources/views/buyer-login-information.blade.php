@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/buyer-login-information.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid buyer-jumbotron">
        @include('navbar')
        <div class="frontpage login-frontpage">
          <div class="login container">
            <div class="buyer-signup-bg">
              <img src="assets/img/become-member/buyer-login-information.svg" />
            </div>
            
            <div class="login-box">
              <form action="{{ route('buyer-signup') }}" method="POST">
              @csrf
                <div class="login-header">
                  <span>Buyer Registration</span>
                </div>
                <div class="personal">
                  <span>Login Information</span>
                </div>
                <input id="success" type="hidden" name="success" value="{{$success}}"/>
                <input type="hidden" name="first_name" value="{{$first_name}}"/>
                <input type="hidden" name="last_name" value="{{$last_name}}"/>
                <input type="hidden" name="birthday" value="{{$birthday}}"/>
                <input type="hidden" name="country" value="{{$country}}"/>
                <input type="hidden" name="state" value="{{$state}}"/>
                <input type="hidden" name="hear" value="{{$hear}}"/>
                <input type="hidden" name="referral_code" value="{{$referral_code}}"/>
                <div class="login-input">
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
                  <div class="checkbox">
                    <input type="checkbox" required />
                    <span> accept the User Agreement and Copyright Policy</span>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" required />
                    <span> I am at least 18 years of age</span>
                  </div>
                </div>
                <div class="login-btn-group">
                  <button
                    type="submit"
                    class="login-btn"
                  >
                    Continue
                  </button>
                </div>
              </form>
            </div>
            <button
              id="modalShow"
              style="display:none"
              class="login-btn"
              data-toggle="modal"
              data-target="#completeModal"
            >
              Continue
            </button> 
            
          </div>
        </div>
      </header>

      @include('footer')

      <!-- Modal -->
      <div class="modal fade" id="completeModal" role="dialog">
        <div class="modal-dialog buyer-modal">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <img src="assets/img/become-member/complete-modal.svg" />
            </div>
            <div class="modal-body">
              <div class="modal-body-content">
                <span class="modal-body-top">REGISTRATION COMPLETE</span>
                <span class="modal-body-middle">Welcome to Teach in a box</span>
                <span class="modal-body-bottom"
                  >You now have access to the world’s first online teaching
                  resource network where teachers receive 100% royalty on sales
                  and buyers have access to thousands of teaching materials
                  developed by their fellow educators</span
                >
              </div>
              <div class="button-login-now">
                <a href="/login" class="login-now-btn"
                  >Login to Your Account Now</a
                >
              </div>
            </div>
            <div class="modal-footer"></div>
          </div>
        </div>
      </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
  $( document ).ready(function() {
    var success = $('#success').val();
    console.log(success);
    if(success == 'success'){
      $('#modalShow').click();
    }
});
  
</script>