@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/details.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid teach-jumbotron">
        @include('navbar')
        <div class="frontpage detail-frontpage">
          <div class="container details">
            <div class="col-lg-5">
              <div class="detail-sidebar border-opacity-20">
                <div class="detail-title">ITEM No: <span>002275</span></div>
                <div class="details-imgs">
                  <img src="assets/img/details/detail-big.svg" />
                </div>
              </div>
              <div class="details-image-group">
                <div class="image-box">
                  <img src="assets/img/details/detail-small.svg" />
                </div>
                <div class="image-box">
                  <img src="assets/img/details/detail-small.svg" />
                </div>
                <div class="image-box">
                  <img src="assets/img/details/detail-small.svg" />
                </div>
                <div class="image-box">
                  <img src="assets/img/details/detail-small.svg" />
                </div>
              </div>
            </div>
            <div class="col-lg-7 detail-content">
              <div class="detail-content-title">
                READING RESPONSE WORKSHEETS
              </div>
              <div class="seller-box">
                <div>
                  <p>
                    <span class="seller-content-title">Seller :-</span>
                    <a class="seller-content"> TwinklEducationalPublishing </a>
                  </p>
                  <p class="seller-rating">
                    <img src="assets/img/details/Icon-star.svg" /><span
                      class="detail-rating"
                      >4.5</span
                    >
                  </p>
                </div>
                <div>
                  <img src="assets/img/details/Icon-share.svg" />
                </div>
              </div>
              <div class="seller-box">
                <span class="reading-title">Grade:</span>
                <span class="reading-content">Pre-K - Year 6 </span>
              </div>
              <div class="seller-box">
                <span class="reading-title">Subject:</span>
                <span class="reading-content">English Language Arts </span>
              </div>
              <div class="seller-box">
                <span class="reading-title">No of Pages / Slides:</span>
                <span class="reading-content">14</span>
              </div>
              <div class="seller-box">
                <span class="reading-title">Answers Provided:</span>
                <span class="reading-content">No</span>
              </div>
              <div class="seller-box">
                <span class="reading-title">Type:</span>
                <span class="reading-content">Graphic Organizers </span>
              </div>
              <div class="seller-box">
                <span class="reading-title">Aligned to:</span>
                <span class="reading-content">Not Specified </span>
              </div>
              <div class="seller-box">
                <span class="reading-title">Duration:</span>
                <span class="reading-content">1 Year </span>
              </div>
              <div class="detail-price">
                <span>Price</span>
                <p>$4.00</p>
              </div>
              <div class="details-main">
                <span>Details:</span>
                <p>
                  When teaching reading strategies (making connections,
                  visualizing, questioning, inferring, story elements,
                  summarizing, author's purpose, compare and contrast,
                  predicting), these worksheets provide a great organizer for
                  students to apply and demonstrate what they know. I have used
                  these for many years during read alouds, literacy centers,
                  guided groups, individual work and with students from grade 3
                  - 8. They have also supported students with varying needs as
                  they are easy to follow, provide thinking prompts and help to
                  keep ideas organized!
                </p>
              </div>
              <div class="details-btn-group">
                <div class="middle-buttons">
                  <button
                    class="middle-button"
                    data-toggle="modal"
                    data-target="#myModal"
                  >
                    Buy Now
                  </button>
                </div>
                <div class="middle-buttons">
                  <a href="/cart" class="middle-button">
                    <img src="assets/img/details/Icon-cart.svg" />Add to Cart
                  </a>
                </div>
                <div>
                  <a class="detail-icon-eye">
                    <img src="assets/img/details/Icon-eye.svg" />
                  </a>
                </div>
              </div>
              <div class="follow">
                <div class="follow-img">
                  <img src="assets/img/details/image0.svg" />
                </div>
                <div>
                  <span class="schoolhouse">Simpsons_SchoolHouse</span>
                  <div class="follow-content">
                    <img src="assets/img/details/Icon-star.svg" />
                    <span>4.5</span>
                    <span>(2 Followers)</span>
                    <span class="follow-register">Registered:</span>
                    <span>24 / 10 / 2015</span>
                  </div>
                  <div class="follow-content">
                    <img src="assets/img/details/Icon-location.svg" />
                    <span>ONTARIO, Canada</span>
                  </div>
                  <div class="follow-btns">
                    <div class="middle-buttons">
                      <button class="middle-button middle-button-follow">
                        Follow Seller
                      </button>
                    </div>
                    <div class="middle-buttons">
                      <button class="middle-button middle-button-follow">
                        View Profile
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="interested">interested in</div>
            <div class="col-lg-12 details-cards">
              <div class="col-lg-3 lg-image">
                <div class="stats">
                  <div class="col-lg-2">
                    <p>
                      <img src="assets/img/marketplace/icon-star.svg" /><span
                        >4.5</span
                      >
                    </p>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-imgs">
                      <img
                        class="resource-image resource-image1"
                        src="assets/img/marketplace/card1.svg"
                      />
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <img src="assets/img/marketplace/icon-circle.svg" />
                  </div>
                </div>
                <div class="resource-content col-lg-12">
                  <span class="resource-content-header"
                    >RECYCLING WORD MAT (AUSTRALIA)</span
                  >
                  <p>
                    <span class="resource-title-header">Seller :-</span>
                    <span class="resource-title"
                      >TwinklEducationalPublishing</span
                    >
                  </p>
                  <p>
                    <span class="resource-title-header">Grade :-</span>
                    <span class="resource-title">Year 1 – Year 3 </span>
                  </p>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Subject :-</span>
                      <span class="resource-title1">Reading</span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2">
                    <p class="resource-button">
                      <span class="resource-title-header">File :-</span>
                      <span class="resource-title1">PDF.</span>
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Type :-</span>
                      <span class="resource-title1">Activities </span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2"></div>
                </div>
                <div class="col-lg-12 resource-buttons-group1">
                  <div class="col-lg-7 resource-buttons1 market-icons">
                    <a href="/details" class="resource-button1">
                      <img src="assets/img/marketplace/Icon-eye.svg" />
                    </a>
                    <a href="/cart" class="resource-button1 cart-btn">
                      <img src="assets/img/marketplace/Icon-cart.svg" />
                    </a>
                  </div>
                  <div class="col-lg-3 resource-price">
                    <span class="price-tag">Price</span>
                    <span class="price-value">$4.20</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 lg-image">
                <div class="stats">
                  <div class="col-lg-2">
                    <p>
                      <img src="assets/img/marketplace/icon-star.svg" /><span
                        >4.5</span
                      >
                    </p>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-imgs">
                      <img
                        class="resource-image resource-image1"
                        src="assets/img/marketplace/card2.svg"
                      />
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <img src="assets/img/marketplace/icon-circle.svg" />
                  </div>
                </div>
                <div class="resource-content col-lg-12">
                  <span class="resource-content-header"
                    >BOOK REVIEW WORKSHEET</span
                  >
                  <p>
                    <span class="resource-title-header">Seller :-</span>
                    <span class="resource-title"
                      >TwinklEducationalPublishing</span
                    >
                  </p>
                  <p>
                    <span class="resource-title-header">Grade :-</span>
                    <span class="resource-title">Year 1 – Year 3 </span>
                  </p>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Subject :-</span>
                      <span class="resource-title1">Reading</span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2">
                    <p class="resource-button">
                      <span class="resource-title-header">File :-</span>
                      <span class="resource-title1">PDF.</span>
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Type :-</span>
                      <span class="resource-title1">Activities </span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2"></div>
                </div>
                <div class="col-lg-12 resource-buttons-group1">
                  <div class="col-lg-7 resource-buttons1 market-icons">
                    <a href="/details" class="resource-button1">
                      <img src="assets/img/marketplace/Icon-eye.svg" />
                    </a>
                    <a href="/cart" class="resource-button1 cart-btn">
                      <img src="assets/img/marketplace/Icon-cart.svg" />
                    </a>
                  </div>
                  <div class="col-lg-3 resource-price">
                    <span class="price-tag">Price</span>
                    <span class="price-value">$4.20</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 lg-image">
                <div class="stats">
                  <div class="col-lg-2">
                    <p>
                      <img src="assets/img/marketplace/icon-star.svg" /><span
                        >4.5</span
                      >
                    </p>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-imgs">
                      <img
                        class="resource-image resource-image1"
                        src="assets/img/marketplace/card3.svg"
                      />
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <img src="assets/img/marketplace/icon-circle.svg" />
                  </div>
                </div>
                <div class="resource-content col-lg-12">
                  <span class="resource-content-header"
                    >THE INCY WINCY SPIDER DISPLAY BANNER</span
                  >
                  <p>
                    <span class="resource-title-header">Seller :-</span>
                    <span class="resource-title"
                      >TwinklEducationalPublishing</span
                    >
                  </p>
                  <p>
                    <span class="resource-title-header">Grade :-</span>
                    <span class="resource-title">Pre-K - Kindergarten </span>
                  </p>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Subject :-</span>
                      <span class="resource-title1">Reading</span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2">
                    <p class="resource-button">
                      <span class="resource-title-header">File :-</span>
                      <span class="resource-title1">PDF.</span>
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Type :-</span>
                      <span class="resource-title1">Activities </span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2"></div>
                </div>
                <div class="col-lg-12 resource-buttons-group1">
                  <div class="col-lg-7 resource-buttons1 market-icons">
                    <a href="/details" class="resource-button1">
                      <img src="assets/img/marketplace/Icon-eye.svg" />
                    </a>
                    <a href="/cart" class="resource-button1 cart-btn">
                      <img src="assets/img/marketplace/Icon-cart.svg" />
                    </a>
                  </div>
                  <div class="col-lg-3 resource-price">
                    <span class="price-tag">Price</span>
                    <span class="price-value">$4.20</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 lg-image">
                <div class="stats">
                  <div class="col-lg-2">
                    <p>
                      <img src="assets/img/marketplace/icon-star.svg" /><span
                        >4.5</span
                      >
                    </p>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-imgs">
                      <img
                        class="resource-image resource-image1"
                        src="assets/img/marketplace/card2.svg"
                      />
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <img src="assets/img/marketplace/icon-circle.svg" />
                  </div>
                </div>
                <div class="resource-content col-lg-12">
                  <span class="resource-content-header"
                    >BOOK REVIEW WORKSHEET</span
                  >
                  <p>
                    <span class="resource-title-header">Seller :-</span>
                    <span class="resource-title"
                      >TwinklEducationalPublishing</span
                    >
                  </p>
                  <p>
                    <span class="resource-title-header">Grade :-</span>
                    <span class="resource-title">Year 1 – Year 3 </span>
                  </p>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Subject :-</span>
                      <span class="resource-title1">Reading</span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2">
                    <p class="resource-button">
                      <span class="resource-title-header">File :-</span>
                      <span class="resource-title1">PDF.</span>
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 resource-buttons-group">
                  <div class="col-lg-6 resource-buttons1">
                    <p class="resource-button">
                      <span class="resource-title-header">Type :-</span>
                      <span class="resource-title1">Activities </span>
                    </p>
                  </div>
                  <div class="col-lg-6 resource-buttons2"></div>
                </div>
                <div class="col-lg-12 resource-buttons-group1">
                  <div class="col-lg-7 resource-buttons1 market-icons">
                    <a href="/details" class="resource-button1">
                      <img src="assets/img/marketplace/Icon-eye.svg" />
                    </a>
                    <a href="/cart" class="resource-button1 cart-btn">
                      <img src="assets/img/marketplace/Icon-cart.svg" />
                    </a>
                  </div>
                  <div class="col-lg-3 resource-price">
                    <span class="price-tag">Price</span>
                    <span class="price-value">$4.20</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="interested">Rating & Feedback</div>
            <hr />
            <div class="comments">Comments</div>
            <div class="details-comments">
              <div><img src="assets/img/details/image2.svg" /></div>
              <div class="comments-content">
                <p>Esther Oustin<span>20 May, 2020</span></p>
                <span class="comment-main"
                  >Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500sLorem Ipsum is simply
                  dummy text of the printing and typesetting industry. Lorem
                  Ipsum has been the industry's standard dummy text ever since
                  the 1500s, ,
                </span>
                <span class="details-reply">Reply</span>
                <hr />
                <div class="details-comments">
                  <div><img src="assets/img/details/image3.svg" /></div>
                  <div class="comments-content">
                    <p>Esther Oustin<span>20 May, 2020</span></p>
                    <span class="comment-main"
                      >Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                    </span>
                    <span class="details-reply mid-reply">Reply</span>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <div class="details-comments">
              <div><img src="assets/img/details/image1.svg" /></div>
              <div class="comments-content">
                <p>Esther Oustin<span>20 May, 2020</span></p>
                <span class="comment-main"
                  >Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500sLorem Ipsum is simply
                  dummy text of the printing and typesetting industry. Lorem
                  Ipsum has been the industry's standard dummy text ever since
                  the 1500s, ,
                </span>
                <span class="details-reply">Reply</span>
              </div>
            </div>
          </div>
          <div class="container details-post">
            <div class="post-comment">Post a comment</div>
            <div class="post-comment-stars">
              <img class="comment-star1" src="assets/img/details/Icon-grey-star.svg" />
              <img class="comment-star2" src="assets/img/details/Icon-grey-star.svg" />
              <img class="comment-star3" src="assets/img/details/Icon-grey-star.svg" />
              <img class="comment-star4" src="assets/img/details/Icon-grey-star.svg" />
              <img class="comment-star5" src="assets/img/details/Icon-grey-star.svg" />
            </div>
            <textarea rows="3" placeholder="Your comment"></textarea>
            <hr />
            <input type="text" placeholder="Name" />
            <hr />
            <button class="view-featured">View all Featured</button>
          </div>
        </div>
      </header>

      @include('footer')
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog details-modal">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="close modal-close"
                data-dismiss="modal"
              >
                <img src="assets/img/details/modal-close.svg" />
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-body-content">
                <img src="assets/img/details/modal-logo.svg" />
              </div>
              <div class="modal-body-content">
                <span>You Are About to Purchase this item</span>
              </div>
              <div class="modal-body-content">
                <button class="payment-btn">Continue with Payment</button>
              </div>
            </div>
            <div class="modal-footer"></div>
          </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(".comment-star1").click(function () {
        $(".comment-star1").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star2").attr("src", "assets/img/details/Icon-grey-star.svg");
        $(".comment-star3").attr("src", "assets/img/details/Icon-grey-star.svg");
        $(".comment-star4").attr("src", "assets/img/details/Icon-grey-star.svg");
        $(".comment-star5").attr("src", "assets/img/details/Icon-grey-star.svg");
      });
      $(".comment-star2").click(function () {
        $(".comment-star1").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star2").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star3").attr("src", "assets/img/details/Icon-grey-star.svg");
        $(".comment-star4").attr("src", "assets/img/details/Icon-grey-star.svg");
        $(".comment-star5").attr("src", "assets/img/details/Icon-grey-star.svg");
      });
      $(".comment-star3").click(function () {
        $(".comment-star1").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star2").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star3").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star4").attr("src", "assets/img/details/Icon-grey-star.svg");
        $(".comment-star5").attr("src", "assets/img/details/Icon-grey-star.svg");
      });
      $(".comment-star4").click(function () {
        $(".comment-star1").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star2").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star3").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star4").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star5").attr("src", "assets/img/details/Icon-grey-star.svg");
      });
      $(".comment-star5").click(function () {
        $(".comment-star1").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star2").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star3").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star4").attr("src", "assets/img/details/Icon-star.svg");
        $(".comment-star5").attr("src", "assets/img/details/Icon-star.svg");
      });
    </script>
