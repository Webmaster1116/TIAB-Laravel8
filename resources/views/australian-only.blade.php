@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/australian-only.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid cart-jumbotron">
        @include('navbar')
        <div class="frontpage login-frontpage">
          <div class="login container">
            <div class="buyer-signup-bg">
              <img src="assets/img/become-member/buyer-login-information.svg" />
            </div>
            <div class="login-box">
              <form action="{{ route('seller-signup') }}" method="POST">
                @csrf
                <div class="login-header">
                  <span>Seller Registration</span>
                </div>
                <div class="personal">
                  <span>Australian Residents only</span>
                </div>
                <div class="login-input">
                  <input id="success" type="hidden" name="success" value="{{$success}}"/>
                  <input type="hidden" name="first_name" value="{{$first_name}}"/>
                  <input type="hidden" name="last_name" value="{{$last_name}}"/>
                  <input type="hidden" name="birthday" value="{{$birthday}}"/>
                  <input type="hidden" name="country" value="{{$country}}"/>
                  <input type="hidden" name="state" value="{{$state}}"/>
                  <input type="hidden" name="hear" value="{{$hear}}"/>
                  <input type="hidden" name="referral_code" value="{{$referral_code}}"/>
                  <input type="hidden" name="email" value="{{$email}}"/>
                  <input type="hidden" name="paypal" value="{{$paypal}}"/>
                  <input type="hidden" name="password" value="{{$password}}"/>
                  <input type="hidden" name="user_id" value="{{$user_id}}"/>
                  <input type="hidden" name="secret_question" value="{{$secret_question}}"/>
                  <input type="hidden" name="answer" value="{{$answer}}"/>

                  <div class="gst-register">
                    <span>GST Registered:</span>
                    <input class="gst-register-input" type="checkbox" name="gst_registered" />
                    <!-- <img src="assets/img/home/Icon-sm-checkbox.svg" /> -->
                    <span>Yes</span>
                  </div>
                  <input
                    class="buyer-input"
                    type="text"
                    placeholder="Provide ABN :"
                    name="ABN"
                    required
                  />
                  <div class="upload-file">
                    <span class="upload-header"
                      >Upload Profile Picture or Logo</span
                    >
                    <span class="upload-content"
                      >This helps buyers with transaction confidence and
                      familiarity with sellers.</span
                    >
                    <button><img src="assets/img/become-member/upload.svg" /></button>
                  </div>
                  <div class="upload-file free-download">
                    <span class="upload-header">Free Download</span>
                    <span class="upload-content"
                      >Please upload a sample of your work, for members to
                      download so they can view the quality of your work, this can
                      be a preview of a current resource that you are
                      selling.</span
                    >
                    <button><img src="assets/img/become-member/upload.svg" /></button>
                  </div>
                  <div class="checkbox">
                    <input class="form-check-input" type="checkbox" required/>
                    <span> accept the User Agreement and Copyright Policy</span>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" required/>
                    <span> I am at least 18 years of age</span>
                  </div>
                </div>
                <div class="login-btn-group">
                  <button type="submit" class="login-btn">
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
        <div class="modal-dialog aus-modal-dialog">
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