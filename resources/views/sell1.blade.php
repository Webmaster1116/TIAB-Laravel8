@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/sell.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid sell-jumbotron">
        @include('navbar')
        <div class="sell-frontpage">
          <div class="sell container">
            <div class="sell-header">Sell</div>
            <div class="sell-descript">
              Follow the steps below to begin selling your teaching materials on
              TeachInABox. These may be lesson plans, exams, quizzes, fun
              activities etc. Provide a detailed description and a price which
              you feel is fair and you are on your way. To see our seller tips
              click here this will give you in-depth information on how to
              become a top seller, setting prices, providing the right
              information to attract buyers etc.
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
                >If your item is a hard good then make sure to provide your
                postage specifications including locations to where you will
                post along with cost of postage. If you are not providing
                postage as part of your sale then provide an estimation as to
                what suburb/city the buyer can pick up the item from.</span
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
                >Please choose the single most appropriate Resource Type, if you
                feel your item falls under a number of categories then choose
                the most suitable and explain your items versatility in your
                item description.</span
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
              <a class="sell-btn1" href="/sell-1"
                >List your item as a free resource?</a
              >
              <a class="sell-btn2" href="/sell-2"
                >Is your item a hard good?</a
              >
            </div>
          </div>
          <div class="free-resource container">
            <div class="free-upload">
              <div class="free-resource-title">Upload Gallery Image</div>
              <span class="sell-descript"
                >(Upload the image which will be the face of the item for sale.
                This will be the first image that buyers will see, so make sure
                it is accurate and engaging. Please make sure your images are
                saved as .png, .gif or .jpeg files.)</span
              >
              <div>
                <img src="assets/img/home/upload.svg" />
              </div>
            </div>
            <div class="free-upload free-upload2">
              <div class="free-resource-title">Upload Gallery Image</div>
              <span class="sell-descript"
                >(Please ensure you have adequate preview photos which are clear
                and display what you are selling, this is crucial to your
                success as a seller) (Max of 8 preview images. Please make sure
                your images are saved as .png, .gif or .jpeg files.)</span
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
              <a class="sell-btn" href="/sell-2">Continue</a>
            </div>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
