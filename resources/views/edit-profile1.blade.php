@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/mydashboard.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid profile1-jumbotron">
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

                <div class="profile-inputs">
                  <div class="login-info">Personal Information</div>
                  <div class="profile-input half-input">
                    <div>
                      <span>First Name</span>
                      <input type="text" placeholder="Teachinabox" />
                    </div>
                    <div>
                      <span>Last Name</span>
                      <input type="text" placeholder="Teachinabox" />
                    </div>
                  </div>
                  <div class="profile-input">
                    <span>Date of Birth</span>
                    <input type="text" placeholder="dd/mm/yyyy" />
                  </div>
                  <div class="profile-input">
                    <span>Street Address</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input half-input">
                    <div>
                      <span>Town/Suburb</span>
                      <input type="text" placeholder="Text....." />
                    </div>
                    <div>
                      <span>State/ Territory</span>
                      <input type="text" placeholder="Text....." />
                    </div>
                  </div>
                  <div class="profile-input half-input">
                    <div>
                      <span>Country/Region</span>
                      <input type="text" placeholder="Text....." />
                    </div>
                    <div>
                      <span>Postcode</span>
                      <input type="number" placeholder="Text....." />
                    </div>
                  </div>
                  <div class="profile-input">
                    <span>Preferred Telephone</span>
                    <input type="number" placeholder="Text....." />
                  </div>
                  <div class="login-info professional-info">
                    Professional Information
                  </div>
                  <div class="profile-input">
                    <span>Personal Motto / Favourite Quote</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>Professional Qualifications</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>School/University Name</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>Subjects Taught</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>Grades Taught</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>Teaching Experience</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>Brief Statement & Additional Information</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="sell-btns">
                    <a class="sell-btn" href="/edit-profile2">Next</a>
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