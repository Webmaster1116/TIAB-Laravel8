@extends('layouts.default1')

@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid">
        @include('home-navbar')
        <div class="frontpage" id="about">
          <div class="frontpage2">
            <span class="headline"
              >The Leading Teachers Education Marketplace</span
            >
            <p class="slogan">
              By using teach in a Box, You're supporting thousands of talented
              teachers positively contributing to the future of education
            </p>
            <span class="home-search">
              <input class="serach-name" placeholder="Education Resources" />
              <button class="search-button">search</button>
            </span>
          </div>
          <div class="home-header-img">
            <img
              src="assets/img/home/header-teachers.svg"
              alt="Home header teachers"
            />
          </div>
        </div>
      </header>
      <section class="featured" id="howItWorks">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 feature feature1">
              <h2>Register Now</h2>
              <p>
                Whether you’re looking to buy, sell or share teaching resources
              </p>
              <span
                >It’s
                <div>FREE!</div></span
              >
              <div class="middle-buttons">
                <button class="middle-button middle-button1">Join Now</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 feature feature2">
              <h2>Free Resources</h2>
              <p>Browse and Download thousands of FREE resources right now!</p>
              <span></span>
              <div class="middle-buttons">
                <button class="middle-button middle-button2">Browse</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 feature feature1">
              <h2>Time Poor?</h2>
              <p>
                Browse Downloadable teaching resources from our world class
                teachers...
              </p>
              <span></span>
              <div class="middle-buttons">
                <button class="middle-button middle-button2">Browse</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 feature feature2">
              <h2>100% Royalties</h2>
              <p>Turn your passion for teaching into a thriving business.</p>
              <span
                >START
                <div>SELLING!</div></span
              >
              <div class="middle-buttons">
                <button class="middle-button middle-button1">Browse</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container container1">
          <img src="assets/img/home/round-button.svg" />
        </div>
      </section>
      <section class="main-grid">
        <div class="green-section" id="services">
          <div class="row resource-header-bar">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <span class="resource-header">Featured Resources</span>
              <span class="resource-header-content">
                Online education is a flexible instructional delivery system
                that encompasses any kind of learning that takes place via the
                Internet
              </span>
            </div>
            <div class="col-lg-3"></div>
          </div>
          <div class="container resource-first">
            <a href=""
              ><img class="rotate-img" src="assets/img/home/icon-arrow-left.svg"
            /></a>
            <div class="col-lg-4 lg-image">
              <div class="stats">
                <div class="col-lg-2">
                  <p><img src="assets/img/home/icon-star.svg" /><span>4.5</span></p>
                </div>
                <div class="col-lg-8">
                  <img
                    class="resource-image resource-image1"
                    src="assets/img/home/resource1.svg"
                  />
                </div>
                <div class="col-lg-2">
                  <img src="assets/img/home/icon-circle.svg" />
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
                    <span class="resource-title1">Spelling</span>
                  </p>
                </div>
                <div class="col-lg-6 resource-buttons2">
                  <p class="resource-button">
                    <span class="resource-title-header">Duration :-</span>
                    <span class="resource-title1">Lifelong Tool</span>
                  </p>
                </div>
              </div>
              <div class="col-lg-12 resource-buttons-group">
                <div class="col-lg-6 resource-buttons1">
                  <p class="resource-button">
                    <span class="resource-title-header">Type :-</span>
                    <span class="resource-title1">Posters</span>
                  </p>
                </div>
                <div class="col-lg-6 resource-buttons2">
                  <p class="resource-button">
                    <span class="resource-title-header">File :-</span>
                    <span class="resource-title1">PDF.</span>
                  </p>
                </div>
              </div>
              <div class="col-lg-12 resource-buttons-group1">
                <div class="col-lg-7 resource-buttons1">
                  <button class="resource-button1">
                    <img src="assets/img/home/icon-eye.svg" />Watch
                  </button>
                </div>
                <div class="col-lg-5 resource-price">
                  <span class="price-tag">Price</span>
                  <span class="price-value">$4.20</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 lg-image">
              <div class="stats">
                <div class="col-lg-2">
                  <p><img src="assets/img/home/icon-star.svg" /><span>4.5</span></p>
                </div>
                <div class="col-lg-8">
                  <img
                    class="resource-image resource-image2"
                    src="assets/img/home/resource2.svg"
                  />
                </div>
                <div class="col-lg-2">
                  <img src="assets/img/home/icon-circle.svg" />
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
                    <span class="resource-title-header">Duration :-</span>
                    <span class="resource-title1">30 Minutes</span>
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
                <div class="col-lg-6 resource-buttons2">
                  <p class="resource-button">
                    <span class="resource-title-header">File :-</span>
                    <span class="resource-title1">PDF.</span>
                  </p>
                </div>
              </div>
              <div class="col-lg-12 resource-buttons-group1">
                <div class="col-lg-7 resource-buttons1">
                  <button class="resource-button1">
                    <img src="assets/img/home/icon-eye.svg" />Watch
                  </button>
                </div>
                <div class="col-lg-5 resource-price">
                  <span class="price-tag">Price</span>
                  <span class="price-value">$4.20</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 lg-image">
              <div class="stats">
                <div class="col-lg-2">
                  <p><img src="assets/img/home/icon-star.svg" /><span>4.5</span></p>
                </div>
                <div class="col-lg-8">
                  <img
                    class="resource-image resource-image3"
                    src="assets/img/home/resource3.svg"
                  />
                </div>
                <div class="col-lg-2">
                  <img src="assets/img/home/icon-circle.svg" />
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
                    <span class="resource-title1">English Language Arts</span>
                  </p>
                </div>
                <div class="col-lg-6 resource-buttons2">
                  <p class="resource-button">
                    <span class="resource-title-header">Duration :-</span>
                    <span class="resource-title1">N/A</span>
                  </p>
                </div>
              </div>
              <div class="col-lg-12 resource-buttons-group">
                <div class="col-lg-6 resource-buttons1">
                  <p class="resource-button">
                    <span class="resource-title-header">Type :-</span>
                    <span class="resource-title1">Posters</span>
                  </p>
                </div>
                <div class="col-lg-6 resource-buttons2">
                  <p class="resource-button">
                    <span class="resource-title-header">File :-</span>
                    <span class="resource-title1">PDF.</span>
                  </p>
                </div>
              </div>
              <div class="col-lg-12 resource-buttons-group1">
                <div class="col-lg-7 resource-buttons1">
                  <button class="resource-button1">
                    <img src="assets/img/home/icon-eye.svg" />Watch
                  </button>
                </div>
                <div class="col-lg-5 resource-price">
                  <span class="price-tag">Price</span>
                  <span class="price-value">$4.20</span>
                </div>
              </div>
            </div>
            <a href=""><img src="assets/img/home/icon-arrow-left.svg" /></a>
          </div>
          <div class="container resource-view-more">
            <button class="resource-button1 view-more">
              View all Featured
            </button>
          </div>
        </div>
      </section>
      <section>
        <div class="why-teach">
          <div class="col-lg-2"></div>
          <div class="why-content col-lg-4">
            <span class="why-content-title">Why teach in a box?</span>
            <div class="why-main why-main1">
              <img src="assets/img/home/check-btn.svg" />
              <div>
                <span class="why-description1">
                  Nemo Enim Ipsam Voluptatem Quia.</span
                >
                <span class="why-description2"
                  >No one rejects, dislikes, or avoids pleasure itself, because
                  it is pleasure</span
                >
              </div>
            </div>
            <div class="why-main">
              <img src="assets/img/home/check-btn.svg" />
              <div>
                <span class="why-description1">
                  Nemo Enim Ipsam Voluptatem Quia.</span
                >
                <span class="why-description2"
                  >No one rejects, dislikes, or avoids pleasure itself, because
                  it is pleasure</span
                >
              </div>
            </div>
            <div class="why-main">
              <img src="assets/img/home/check-btn.svg" />
              <div>
                <span class="why-description1">
                  Nemo Enim Ipsam Voluptatem Quia.</span
                >
                <span class="why-description2"
                  >No one rejects, dislikes, or avoids pleasure itself, because
                  it is pleasure</span
                >
              </div>
            </div>
            <div class="container why-know-more">
              <button class="resource-button1">Know More</button>
            </div>
          </div>
          <div class="why-bg col-lg-6"></div>
        </div>
        <div class="download-app">
          <div class="app-bg col-lg-7"></div>
          <div class="app-content col-lg-4">
            <span class="app-content-title">Download Our App</span>
            <span class="app-description">
              Take your journal wherever you go with our apps for iPhone, iPad,
              and Android phones & tablets.
            </span>
            <div class="container app-buttons">
              <button class="app-button app-button1">
                <img src="assets/img/home/app-btn1.svg" />
              </button>
              <button class="app-button app-button2">
                <img src="assets/img/home/app-btn2.svg" />
              </button>
            </div>
          </div>

          <div class="col-lg-1"></div>
        </div>
      </section>
      @include('home-footer')
    </div>
@endsection



    
    
