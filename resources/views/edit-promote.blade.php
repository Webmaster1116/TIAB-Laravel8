@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/mydashboard.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid promote-jumbotron">
        @include('navbar')
        <div class="frontpage">
          <div class="col-lg-12">
            <div class="container bashboard-container">
              <img src="assets/img/mydashboard/round-avatar.svg" />
            </div>
            <div class="container">
                @include('mydashboard-sidebar')
              <div class="col-lg-8 profile">
                <div class="profile-header">
                  Badges for my TeachInABox store
                </div>
                <div class="sell-descript">
                  Choose one of the three badges below, then click that badge to
                  retrieve the code that you will then paste on your blog or
                  website. This will then provide a direct link back to your
                  TeachInABox store
                </div>
                <div class="promote-imgs">
                  <div>
                    <img src="assets/img/mydashboard/upload-sm.svg" />
                    <img src="assets/img/mydashboard/upload-md.svg" />
                  </div>
                  <img src="assets/img/mydashboard/upload-big.svg" />
                </div>
                <div class="profile-inputs">
                  <div class="profile-input">
                    <span>Title / Heading</span>
                    <input type="text" placeholder="Heading" />
                  </div>
                  <div class="profile-input">
                    <span>Description</span>
                    <input type="text" placeholder="Heading" />
                  </div>
                  <div class="profile-input">
                    <span>Price</span>
                    <input type="text" placeholder="Price" />
                  </div>
                  <div class="profile-input">
                    <span>Discount Price</span>
                    <input type="text" placeholder="Discount Price" />
                  </div>
                  <div class="sell-btns">
                    <a class="sell-btn" href="javacript:void(0)">Continue</a>
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