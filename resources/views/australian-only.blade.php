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
              <div class="login-header">
                <span>Seller Registration</span>
              </div>
              <div class="personal">
                <span>Australian Residents only</span>
              </div>
              <div class="login-input">
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
                  <input class="form-check-input" type="checkbox" />
                  <span> accept the User Agreement and Copyright Policy</span>
                </div>
                <div class="checkbox">
                  <input type="checkbox" />
                  <span> I am at least 18 years of age</span>
                </div>
              </div>
              <div class="login-btn-group">
                <button
                  class="login-btn"
                  data-toggle="modal"
                  data-target="#completeModal"
                >
                  Continue
                </button>
              </div>
            </div>
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