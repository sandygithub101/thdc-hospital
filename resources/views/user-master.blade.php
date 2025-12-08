<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"> 
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
  <style>
    .theme-black-color{
      background: linear-gradient(to bottom,#2f4066 0%,#192135 100%);
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .form-control-dark {
      border-color: var(--bs-gray);
    }
    .form-control-dark:focus {
      border-color: #fff;
      box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
    }

    .text-small {
      font-size: 85%;
    }

    .dropdown-toggle {
      outline: 0;
    }

    .product-device {
      position: absolute;
      right: 10%;
      bottom: -30%;
      width: 300px;
      height: 540px;
      background-color: #333;
      border-radius: 21px;
      transform: rotate(30deg);
    }

    .product-device::before {
      position: absolute;
      top: 10%;
      right: 10px;
      bottom: 10%;
      left: 10px;
      content: "";
      background-color: rgba(255, 255, 255, .1);
      border-radius: 5px;
    }

    .product-device-2 {
      top: -25%;
      right: auto;
      bottom: 0;
      left: 5%;
      background-color: #e5e5e5;
    }


/*
 * Extra utilities
 */

    .flex-equal > * {
      flex: 1;
    }
    @media (min-width: 768px) {
      .flex-md-equal > * {
        flex: 1;
      }
    }


    .gm-style .gm-style-iw-t::after {
      background: linear-gradient(45deg,
        rgba(18, 18, 32, 0.616) 50%,rgba(18, 18, 32, 0) 51%,
        rgba(18, 18, 32, 0) 100%); 
    }
    .gm-style .gm-style-iw-d {
      box-sizing: border-box;
      overflow: auto;
      color: #fff!important;
    }
  </style>
  <style> 
    #map {
     width: 100%;
     height: 400px;
     background-color: grey;
   }

   .container-steps {
    max-width: 800px;
    margin: 0 auto;
    margin-bottom: 80px;
  }

  .step-indicator {
    margin-top: 50px;
    display: flex;
    align-items: center;
    padding: 0 40px;
  }

  .step {
    display: flex;
    align-items: center;
    flex-direction: column;
    position: relative;
    z-index: 1;
  }

  .step-indicator .step-icon {
    height: 50px;
    width: 50px;
    border-radius: 50%;
    background: #c2c2c2;
    font-size: 10px;
    text-align: center;
    color: #ffffff;
    position: relative;
    line-height: 50px;
    font-size: 16px;
  }

  .step.active .step-icon {
    background: #18A558;
  }

  .step.done .step-icon {
    background: #1475b6;
  }

  .step p {
    text-align: center;
    position: absolute;
    bottom: -65px;
    color: #c2c2c2;
    font-size: 11px;
    font-weight: bold;
  }

  .step.active p {
    color: #18A558;
  }

  .step.done p {
    color: #1475b6;
  }

  .step.step2 p,
  .step.step3 p {
    left: 50%;
    transform: translateX(-50%);
  }

  .indicator-line {
    width: 100%;
    height: 2px;
    background: #c2c2c2;
    flex: 1;
  }

  .indicator-line.active {
    background: #18A558;
  }

  .indicator-line.done {
    background: #1475b6;
  }

  @media screen and (max-width: 500px) {
    .step p {
      font-size: 11px;
      bottom: -20px;
    }
  }

/*============================= OWL SLIDER ========================*/


.carousel-wrap {
  margin: 30px auto;
  padding: 0 5%;
  width: 80%;
  position: relative;
}

/* fix blank or flashing items on carousel */
.owl-carousel .item {
  position: relative;
  z-index: 100; 
  -webkit-backface-visibility: hidden; 
  height: 104px;
}

/* end fix */
.owl-nav > div {
  margin-top: -26px;
  position: absolute;
  top: 50%;
  color: #cdcbcd;
}

.owl-nav i {
  font-size: 14px;
}

.owl-nav .owl-prev {
  left: -30px;
}

.owl-nav .owl-next {
  right: -30px;
}


/*============================= OWL SLIDER ENDS ========================*/

/*gift card*/
.gift-card {
  border-radius: 10px;
  background: #fafafa;
  width: 100%;
  color: #3d3d3d;
  font-family: sans-serif; 
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2); 
}

.gift-card__image {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px; 
  max-width: 100%;
  background-size: cover;
  height: auto;
}

.gift-card__content {
  padding: 30px 20px;
  //flex: 1;  
}

.gift-card__msg {
  font-size: 14px;
  display: block;
  margin-top: 10px;
}

.gift-card__details {
  margin-top: auto;
  align-items: center;
  line-height: 1;
}

.gift-card__code {
  display: inline-block;
  background: white;
  color: black;
  padding: 10px 13px;
  margin-top: 20px;
  font-size: 20px;
  border: 1px solid #e3e3e3;
}

.gift-card__amount {
  font-size: 20px;
  font-weight: 700px;
}
.gift-card__amount-remaining {
  font-size: 14px;
  margin-top: 7px;
}
    input.parsley-success,
      select.parsley-success,
      textarea.parsley-success {
      color: #468847;
      background-color: #DFF0D8;
      border: 1px solid #D6E9C6;
      }
      
      input.parsley-error,
      select.parsley-error,
      textarea.parsley-error {
      color: #B94A48;
      background-color: #F2DEDE;
      border: 1px solid #EED3D7;
      }
      
      .parsley-errors-list {
      margin: 2px 0 3px;
      padding: 0;
      list-style-type: none;
      font-size: 0.9em;
      line-height: 0.9em;
      opacity: 0;
      color: #ff0000;
      background: #e03838;
      padding: 2px;
      text-align: left;
      color: #fff;
      padding:2px;
      transition: all .3s ease-in;
      -o-transition: all .3s ease-in;
      -moz-transition: all .3s ease-in;
      -webkit-transition: all .3s ease-in;
      }
      
      .parsley-errors-list.filled {
      opacity: 1;
      }
      
      .parsley-type, .parsley-required, .parsley-equalto{
      color: #ff0000;
      background: #e03838;
      padding: 2px;
      text-align: left;
      color: #fff;
      padding:2px;
      }
      
      input.parsley-success,
      select.parsley-success,
      textarea.parsley-success {
      color: #468847;
      background-color: #DFF0D8;
      border: 1px solid #D6E9C6;
      }
      
      input.parsley-error,
      select.parsley-error,
      textarea.parsley-error {
      color: #B94A48;
      background-color: #F2DEDE;
      border: 1px solid #EED3D7;
      }
      
      .parsley-errors-list div.parsley-required, div.parsley-pattern, div.parsley-type , div.parsley-min {
      background:   #e03838;
      padding: 2px;
      text-align:center;
      color: #fff;
      }

      .bg-navbar{ 
        opacity: 1;
  background: linear-gradient(to bottom,#2f4066 0%,#192135 100%);
}

</style>
<script src="https://checkout.clover.com/sdk.js"></script>
</head>
<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Dashboard</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
    </symbol>
  </svg>
  @yield('user-navbar') 
  @yield('content')  
  @yield('user-footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  
   <script src="https://code.jquery.com/jquery-2.2.4.min.js"data-cfasync="false"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" data-cfasync="false"></script>
        
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <script type="//cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
  @yield('appointmentJsFile')
  @yield('loginJs')
  @yield('registrationJs')
  @yield('gift_js')
  @yield('cloverJsFile')
  @yield('userAppointJs')
</body>
</html>