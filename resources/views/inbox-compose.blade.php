@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/inbox.css" />
<link rel="stylesheet" href="assets/css/inbox-compose.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid inbox-jumbotron">
        @include('navbar')
        <div class="inbox-frontpage">
          <div class="inbox container">
            <div class="inbox-header">Inbox</div>
            <div class="inbox-btns">
              <a class="compose-message" href="javascript:void(0)"
                >Compose Message</a
              >
              <a class="sent-message" href="">Sent Message</a>
            </div>
            <hr />
            <div>
              <span>Member</span>
              <div class="inbox-member">
                <input type="search" placeholder="Search....." />
                <img src="assets/img/home/inbox-icon-search.svg" />
              </div>
            </div>
            <hr />
            <div>
              <span>Subject</span>
              <input type="text" placeholder="Text....." />
            </div>
            <hr />
            <div>
              <span>Message</span>
              <textarea placeholder="Text..." rows="5"></textarea>
            </div>
            <hr />
            <div class="compose-btns">
              <a class="send-btn" href="javascript:void(0)">Send</a>
              <a class="go-inbox" href="inbox.html">Go to my inbox</a>
              <a class="cancel-inbox" href="inbox-compose.html">Cancel</a>
            </div>
          </div>
        </div>
      </header>

     @include('footer')
    </div>
@endsection
