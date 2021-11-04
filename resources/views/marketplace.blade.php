@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid teach-jumbotron">
        @include('navbar')
        <div class="frontpage">
          <div class="col-lg-12 marketplace">
            <div class="col-lg-3 select-grade">
              <div class="market-search">
                <img src="assets/img/marketplace/Icon-search.svg" />
                <input type="search" placeholder="Search....." />
              </div>
              <hr />
              <div class="market-select">
                <span class="select-title"> School Grade </span>
                <select class="form-control">
                  <option selected>Select</option>
                  <option>First Grade</option>
                  <option>Second Grade</option>
                  <option>Third Grade</option>
                </select>
              </div>
              <hr />
              <div class="market-select">
                <span class="select-title"> Subject Area </span>
                <select class="form-control">
                  <option selected>Select</option>
                  <option>Mathmatics</option>
                  <option>Physics</option>
                  <option>Philosophy</option>
                </select>
              </div>
              <hr />
              <div class="market-select">
                <span class="select-title"> Categories </span>
                <select class="form-control">
                  <option selected>Select</option>
                  <option>Categories 1</option>
                  <option>Categories 2</option>
                  <option>Categories 3</option>
                </select>
              </div>
              <hr />
              <div class="market-checkbox">
                <span class="checkbox-title"> Price-Range </span>
                <div class="checkboxs">
                  <input type="checkbox" />
                  <span>Free</span>
                </div>
                <div class="checkboxs">
                  <input type="checkbox" />
                  <span>Under $5</span>
                </div>
                <div class="checkboxs">
                  <input type="checkbox" />
                  <span>$5 - $10</span>
                </div>
                <div class="checkboxs">
                  <input type="checkbox" />
                  <span>$10 - $20</span>
                </div>
                <div class="checkboxs">
                  <input type="checkbox" />
                  <span>$20 and over</span>
                </div>
              </div>
            </div>
            <div class="col-lg-8 market-cards">
              <div class="container resource-first">
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
                          >4.5</span
                        >
                      </p>
                    </div>
                    <div class="col-lg-8">
                      <div class="card-imgs">
                        <img
                          class="resource-image resource-image1"
                          src="assets/img/marketplace/card1.png"
                        />
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container resource-first">
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container resource-first">
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container resource-first">
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 lg-image">
                  <div class="stats">
                    <div class="col-lg-2">
                      <p>
                        <img src="assets/img/marketplace/Icon-star.svg" /><span
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
                      <img src="assets/img/marketplace/Icon-circle.svg" />
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
                      <span class="price-tag1">Price</span>
                      <span class="price-value">$4.20</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="marketplace-pagination">
                <button class="page-btn arrow-btn arrow-left">
                  <img src="assets/img/marketplace/Icon-left.svg" />
                </button>
                <button class="page-btn number-btn">1</button>
                <button class="page-btn number-btn">2</button>
                <button class="page-btn number-btn">3</button>
                <button class="page-btn arrow-btn arrow-right">
                  <img
                    class="arrow-right-img"
                    src="assets/img/marketplace/Icon-left.svg"
                  />
                </button>
              </div>
            </div>
          </div>
        </div>
      </header>
        @include('footer')
    </div>
@endsection
   
