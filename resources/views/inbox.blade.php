@extends('layouts.default1')
<link rel="stylesheet" href="assets/css/marketplace.css" />
<link rel="stylesheet" href="assets/css/inbox.css" />
@section('content')
    <div class="overflow">
      <header class="jumbotron jumbotron-fluid inbox-jumbotron">
       @include('navbar')
        <div class="inbox-frontpage">
          <div class="inbox container">
            <div class="inbox-header">Inbox</div>
            <div class="inbox-btns">
              <a class="compose-message" href="/inbox-compose"
                >Compose Message</a
              >
              <a class="sent-message" href="">Sent Message</a>
            </div>
            <hr />
            <div class="inbox-body inbox-body1">
              <span>
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
                45 BC, making it over 2000 years old.
              </span>
              <img src="assets/img/home/inbox-delete.svg" />
            </div>
            <div class="inbox-body">
              <span>
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
                45 BC, making it over 2000 years old.
              </span>
              <img src="assets/img/home/inbox-delete.svg" />
            </div>
            <div class="inbox-body">
              <span>
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
                45 BC, making it over 2000 years old.
              </span>
              <img src="assets/img/home/inbox-delete.svg" />
            </div>
            <div class="inbox-body">
              <span>
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
                45 BC, making it over 2000 years old.
              </span>
              <img src="assets/img/home/inbox-delete.svg" />
            </div>
          </div>
        </div>
      </header>

      @include('footer')
     
    </div>
@endsection    
