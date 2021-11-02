@extends('layouts.default2')

@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid about-jumbotron">
      @include('home-navbar')
        <div class="frontpage about-frontpage" id="about">
          <div class="frontpage2 about-frontpage2">
            <span class="headline">About Us</span>
            <p class="slogan">
              Stuart Binny ipsum dolor sit amet, elitr ipscing sad, consetetur
              diam nonumy eirmod invidunt tempor ut elitr labore
            </p>
          </div>
          <div>
            <img src="assets/img/about/about-bg.svg" alt="Home header teachers" />
          </div>
        </div>
      </header>
      <section class="featured" id="teachBox">
        <div class="col-lg-12 testimonial">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <span class="about-teach"> What can you do on </span>
            <span class="testimonial-title about-title"> Teach In A Box?</span>
            <span class="testimonial-description">
              We are the world’s marketplace for teachers; allowing educators to
              create, share and sell everything from lesson plans to worksheets
              and much, much more. All of our resources are teacher created and
              available for immediate digital download on any device.
            </span>
          </div>
          <div class="col-lg-3"></div>
        </div>
        <div class="teach-box col-lg-12">
          <div class="col-lg-2"></div>
          <div class="about-teach-imgs col-lg-8">
            <div class="teach-card col-lg-2">
              <div class="card-about">
                <img src="assets/img/about/teach1.svg" />
              </div>
              <div class="card-detail">
                <span>EDUCATE</span>
              </div>
            </div>
            <div class="teach-card col-lg-2">
              <div class="card-about">
                <img src="assets/img/about/teach2.svg" />
              </div>
              <div class="card-detail">
                <span>PROSPER</span>
              </div>
            </div>
            <div class="teach-card col-lg-2">
              <div class="card-about">
                <img src="assets/img/about/teach3.svg" />
              </div>
              <div class="card-detail">
                <span>TEACH</span>
              </div>
            </div>
            <div class="teach-card col-lg-2">
              <div class="card-about">
                <img src="assets/img/about/teach4.svg" />
              </div>
              <div class="card-detail">
                <span>INSPIRE</span>
              </div>
            </div>
            <div class="teach-card col-lg-2">
              <div class="card-about">
                <img src="assets/img/about/teach5.svg" />
              </div>
              <div class="card-detail">
                <span>SELL</span>
              </div>
            </div>
            <div class="teach-card col-lg-2">
              <div class="card-about">
                <img src="assets/img/about/teach6.svg" />
              </div>
              <div class="card-detail">
                <span>DISCOVER</span>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </section>
      <section class="about-works">
        <div class="about-works-title">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <span class="resource-header">How it Works</span>
              <span class="resource-header-content about-works-content">
                Online education is a flexible instructional delivery system
                that encompasses any kind of learning that takes place via the
                Internet
              </span>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </div>
        <div class="container about-container">
          <div class="row">
            <div class="col-lg-3 col-md-6 feature about-feature">
              <img src="assets/img/about/about-icon1.svg" />
              <h2>Visualise</h2>
              <p>
                Yourself as a teacher getting recognised for what you know and
                love.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 feature about-feature">
              <img src="assets/img/about/about-icon2.svg" />
              <h2>Create</h2>
              <p>
                Teaching resources that you feel the teaching community requires
                and would appreciate or utilise materials you have previously
                created in the past.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 feature about-feature">
              <img src="assets/img/about/about-icon3.svg" />
              <h2>Reach</h2>
              <p>
                Assist, support and sell to thousands of teachers daily through
                the fastest growing teachers marketplace.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 feature about-feature">
              <img src="assets/img/about/about-icon4.svg" />
              <h2>Earn</h2>
              <p>
                Serious money, build your store and brand all while making a
                real difference in the lives of teachers and students.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="about-people">
        <div class="container about-container1">
          <div class="row">
            <div class="col-lg-3 col-md-6 feature about-feature about-number">
              <div class="round-numbers">
                <div class="number-round">
                  <span>1</span>
                </div>
              </div>
              <h2>Flexibility</h2>
              <p>
                Create and share resources in your own time, use existing
                material you have created in the past or develop new work to
                share and sell.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 feature about-feature about-number">
              <div class="round-numbers">
                <div class="number-round">
                  <span>2</span>
                </div>
              </div>
              <h2>Financial Freedom</h2>
              <p>
                A second income that most teachers can only dream about. Build
                your store/brand and reach thousands daily.
              </p>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>

            <div class="col-lg-3 col-md-6 feature about-feature about-number">
              <div class="round-numbers">
                <div class="number-round">
                  <span>3</span>
                </div>
              </div>
              <h2>Maximum Profit</h2>
              <p>
                Keep 100% of the royalty from every sale when you sign up to our
                platinum membership. We are the world’s first marketplace for
                teachers to do so.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 feature about-feature about-number">
              <div class="round-numbers">
                <div class="number-round">
                  <span>4</span>
                </div>
              </div>
              <h2>Control</h2>
              <p>
                Maintain ownership and rights to your content and resources,
                stipulate how teachers can share and use your materials through
                a creative commons license.
              </p>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </section>
      @include('home-footer')
    </div>
@endsection


  
    