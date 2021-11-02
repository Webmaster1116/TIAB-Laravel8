@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/mydashboard.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid dashboard-jumbotron">
        @include('navbar')
        <div class="frontpage">
          <div class="col-lg-12">
            <div class="container bashboard-container">
              <img src="assets/img/mydashboard/round-avatar.svg" />
            </div>
            <div class="container">
              @include('mydashboard-sidebar')
              <div class="col-lg-8 profile">
                <div class="profile-header">My Profile</div>
                <div class="profile-inputs">
                  <div class="profile-input">
                    <span>From</span>
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
                  <div class="profile-input half-input">
                    <div>
                      <span>Subjects Taught</span>
                      <input type="text" placeholder="Text....." />
                    </div>
                    <div>
                      <span>Grades Taught</span>
                      <input type="text" placeholder="Text....." />
                    </div>
                  </div>
                  <div class="profile-input">
                    <span>Teaching Experience</span>
                    <input type="text" placeholder="Text....." />
                  </div>
                  <div class="profile-input">
                    <span>Brief Statement & Additional Information</span>
                    <textarea rows="3" placeholder="Text....."></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
