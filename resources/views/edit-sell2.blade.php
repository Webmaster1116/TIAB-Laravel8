@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/sell.css" />
<link rel="stylesheet" href="assets/css/mydashboard.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid edit-sell2-jumbotron">
        @include('navbar')
        <div class="frontpage">
          <div class="col-lg-12">
            <div class="container bashboard-container">
              <img src="assets/img/mydashboard/round-avatar.svg" />
            </div>
            <div class="container">
                @include('mydashboard-sidebar')
              <div class="col-lg-8 profile">
                <div class="sell">
                  <div class="profile-header">Sell</div>
                  <div class="sell-descript">
                    Follow the steps below to begin selling your teaching
                    materials on TeachInABox. These may be lesson plans, exams,
                    quizzes, fun activities etc. Provide a detailed description
                    and a price which you feel is fair and you are on your way.
                    To see our seller tips click here this will give you
                    in-depth information on how to become a top seller, setting
                    prices, providing the right information to attract buyers
                    etc.
                  </div>
                  <div class="sell-title">
                    <span class="sell-title-header">Title / Heading</span>
                    <input type="text" placeholder="Title" />
                    <span class="sell-descript">Allow max 300 characters</span>
                  </div>
                  <div class="sell-title">
                    <span class="sell-title-header">Description</span>
                    <textarea rows="3" placeholder="Text....."></textarea>
                    <span class="sell-descript"
                      >If your item is a hard good then make sure to provide
                      your postage specifications including locations to where
                      you will post along with cost of postage. If you are not
                      providing postage as part of your sale then provide an
                      estimation as to what suburb/city the buyer can pick up
                      the item from.</span
                    >
                  </div>
                  <div class="sell-title sell-resource">
                    <span class="sell-title-header">Type of Resource</span>
                    <select class="form-control">
                      <option>Type</option>
                      <option>Type1</option>
                      <option>Type2</option>
                    </select>
                    <span class="sell-descript"
                      >Please choose the single most appropriate Resource Type,
                      if you feel your item falls under a number of categories
                      then choose the most suitable and explain your items
                      versatility in your item description.</span
                    >
                  </div>
                  <div class="sell-title">
                    <div>
                      <select class="form-control">
                        <option>School Grade</option>
                        <option>Grade 1</option>
                        <option>Grade 2</option>
                        <option>Grade 3</option>
                      </select>
                      <select class="form-control">
                        <option>Subject Area</option>
                        <option>Maths</option>
                        <option>Physics</option>
                        <option>Chemistry</option>
                      </select>
                    </div>
                    <div>
                      <select class="form-control">
                        <option>Teaching Duration</option>
                        <option>1 Year</option>
                        <option>2 Years</option>
                        <option>3 Years</option>
                      </select>
                      <input type="text" placeholder="Number of Pages/Slides" />
                    </div>
                    <div>
                      <select class="form-control">
                        <option>Aligned to</option>
                        <option></option>
                        <option></option>
                      </select>
                    </div>
                  </div>
                  <div class="sell-btns">
                    <a class="sell-btn1 sell-btn-nocolor" href="/edit-sell1"
                      >List your item as a free resource?</a
                    >
                    <a class="sell-btn2 sell-btn-color" href="/edit-sell2"
                      >Is your item a hard good?</a
                    >
                  </div>
                  <div class="sell-title">
                    <span class="sell-title-header">Price</span>
                    <input type="text" placeholder="$" />
                    <span class="sell-descript"
                      >If your item is a hard good and you will be posting to
                      buyers then please include the postage cost as part of the
                      total price of your item. You can provide the specific
                      cost of postage added to your total price in the
                      description above.</span
                    >
                  </div>
                  <div class="sell-title">
                    <span class="sell-title-header">Listing Price</span>
                    <input type="text" placeholder="$" />
                    <span class="sell-descript"
                      >The listing price is the price of your item once live,
                      TeachInABox adds a small admin fee to your item which
                      TeachInABox takes out once a sale has been made</span
                    >
                  </div>
                  <div class="hard-checkbox">
                    <!-- <input type="checkbox" /> -->
                    <img src="assets/img/home/Icon-checkbox.svg" />
                    <span
                      >Please tick this checkbox if you intend to apply a
                      discount</span
                    >
                  </div>
                  <div class="sell-title">
                    <span class="sell-title-header">Discount Price</span>
                    <input type="text" placeholder="$" />
                    <span class="sell-descript"
                      >Make sure that the discount price is lower than your
                      original price above, not just lower than your final
                      listing price</span
                    >
                  </div>
                  <div class="sell-title">
                    <span class="sell-title-header"
                      >Listing Price After Discount</span
                    >
                    <input type="text" placeholder="$" />
                    <span class="sell-descript"
                      >The listing price is the price of your discounted item
                      once live, TeachInABox adds a small admin fee to your item
                      which TeachInABox takes out once a sale has been
                      made</span
                    >
                  </div>
                </div>
                <div class="free-resource container">
                  <div class="free-upload">
                    <div class="free-resource-title hard-upload-title">
                      Upload Gallery Image
                    </div>
                    <span class="sell-descript"
                      >(Upload the image which will be the face of the item for
                      sale. This will be the first image that buyers will see,
                      so make sure it is accurate and engaging. Please make sure
                      your images are saved as .png, .gif or .jpeg files.)</span
                    >
                    <div>
                      <img src="assets/img/home/upload.svg" />
                    </div>
                  </div>
                  <div class="free-upload free-upload2">
                    <div class="free-resource-title">Upload Gallery Image</div>
                    <span class="sell-descript"
                      >(Please ensure you have adequate preview photos which are
                      clear and display what you are selling, this is crucial to
                      your success as a seller) (Max of 8 preview images. Please
                      make sure your images are saved as .png, .gif or .jpeg
                      files.)</span
                    >
                    <div>
                      <img src="assets/img/home/upload.svg" />
                      <img src="assets/img/home/upload.svg" />
                      <img src="assets/img/home/upload.svg" />
                      <img src="assets/img/home/upload.svg" />
                    </div>
                    <div>
                      <img src="assets/img/home/upload.svg" />
                      <img src="assets/img/home/upload.svg" />
                      <img src="assets/img/home/upload.svg" />
                      <img src="assets/img/home/upload.svg" />
                    </div>
                  </div>
                  <div class="sell-btns">
                    <a class="sell-btn" href="">Continue</a>
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