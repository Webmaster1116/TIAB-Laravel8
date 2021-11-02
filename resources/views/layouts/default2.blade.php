<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/about.css" />
    @if (Auth::user())
    <link rel="stylesheet" href="assets/css/after-login-home.css" />
    @endif
    <title>TEACH IN A BOX</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap");
    </style>
    <style type="text/css">
      @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z11lFd2JQEl8qw.woff2)
          format("woff2");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
          U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
      }
      /* latin-ext */
      @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z1JlFd2JQEl8qw.woff2)
          format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z1xlFd2JQEk.woff2)
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }
    </style>

    <link
      href="assets/css/main.css?c49053a638954f744dcd"
      rel="preload"
      as="style"
      onload="this.rel='stylesheet'"
    />
    <noscript>
      <link href="assets/css/main.css?c49053a638954f744dcd" rel="stylesheet" />
    </noscript>
    <noscript></noscript>
  </head>
  <body>
    @yield('content')

    <div class="modal fade" id="userModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
              <div class="modal-edge">
                <img src="assets/img/home/Union 1.png" />
              </div>
              <div class="body-content">
                <img src="assets/img/home/user-dashboard.svg" />
                <a href="/mydashboard">My Dashboard</a>
              </div>
              <div class="body-content">
                <img src="assets/img/home/user-sell.svg" />
                <a href="/sell-1">Sell</a>
              </div>
              <div class="body-content">
                <img src="assets/img/home/user-support.svg" />
                <a href="/support">Support</a>
              </div>
              <div class="body-content body-logout">
                <a href="{{ route('signout') }}"
                  ><img src="assets/img/home/user-logout.svg" />Logout</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="notificationModal" role="dialog">
        <div class="modal-dialog modal-notification">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
              <div class="modal-edge">
                <img src="assets/img/home/Union 1.png" />
              </div>
              <div class="body-content body-notification">
                <img src="assets/img/home/notification-completed.svg" />
                <a href="">Your order has been completed</a>
              </div>
              <div class="body-content body-notification">
                <img src="assets/img/home/notification-canceled.svg" />
                <a href="">Your order has been canceled</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script
      defer="defer"
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/main.bundle.js?c49053a638954f744dcd"
      defer="defer"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>