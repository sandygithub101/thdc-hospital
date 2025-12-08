<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{URL::to('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JQVMap -->


  <link rel="stylesheet" href="{{URL::to('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('dist/css/adminlte.css?var=')}}{{rand(10,999)}}">
  <link rel="stylesheet" href="{{URL::to('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('css/card-design.css?var=')}}{{rand(10,100)}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::to('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::to('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL::to('plugins/summernote/summernote-bs4.min.css')}}">
  <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
  /*--------------------------------------------------------------
# gogle map size
--------------------------------------------------------------*/
div #map {
  height: 450px!important;
  width: 100%!important;
}

.gm-style-iw.gm-style-iw-c {
  max-width: 487px;
  max-height: 164px;
  background-color: rgba(18, 18, 32, 0.616);
  .gm-style-iw-d {
    max-width: 451px;
    max-height: 128px;
    //background-color: #000000c2;
    div {
      div {
        color: $white;
        h5 {}
        p {
          // padding-left: .73rem;
          .icon.address-icon { 
            display: none;
            //background-image: url('/images/baseline_icon/baseline_place.png');
          } 
        }
      }
    }
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
  width: 430px;
  color: #3d3d3d;
  font-family: sans-serif;
  display: flex;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2); 
}

.gift-card__image {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  flex: 1;
  max-width: 150px;
  background-size: cover;
  
}

.gift-card__content {
  padding: 30px 20px;
  //flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.gift-card__msg {
  font-size: 10px;
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
  font-size: 70px;
}
.gift-card__amount-remaining {
  font-size: 14px;
  margin-top: 7px;
}

    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
  <!-----<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>------>
  @yield('navbar')
  @yield('sidebar')
  @yield('content')
</div>
<!-- ./wrapper -->
@yield('footer')
<!-- jQuery -->
<script src="{{URL::to('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::to('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>



<!-- Bootstrap 5 -->
<script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<!-- ChartJS -->
<script src="{{URL::to('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::to('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::to('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::to('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::to('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{URL::to('plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::to('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::to('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{URL::to('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::to('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('dist/js/demo.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('dist/js/pages/dashboard.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>



@yield('serviceJsFile')
@yield('mappingjs')
@yield('Service_And_Tag_js_1')
@yield('Service_And_Tag_js')
@yield('gift_js')
<script type="text/javascript">
  var add_button      = $(".addFieldButton");
  var max_fields      = 10;
  var inputs = 1;
  
  $(document).on("click",".addFieldButton", function(e){ 
    e.preventDefault();
    var add;
    add = $('<div class="row subEdu"><div class="col-md-12"><div class="form-group"><label>Alternate Phone Number</label><input type="text" name="alter_ph_num[]" value=" " class="form-control" id="alter_ph_num" required></div></div><div class="col-md-12"><a class="btn btn-sm float-right btn-danger deleteEdu" href="javascript:;"><i class="fas fa-times-circle"></i></a></div><div class="col-md-12"><hr></div></div><div class="clearfix"></div>');
    if(inputs < max_fields){
     inputs++;
			$(".formBoxArea").append(add); //add input box
		}
		else
		{
			alert('You Reached the limits')
		}
	});
  $(document).on("click",".deleteEdu", function(e){
    e.preventDefault();$(this).closest(".subEdu").remove(); /*$(this).parent('div').remove(); */inputs--;
  });	
  $(".sidebar-mini").addClass("sidebar-collapse");
</script>
<!--map-->

<!--map end-->
<script>
 CKEDITOR.replace( 'editor' );
</script>

<!-- <script type="text/javascript">
  
  $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
      },
      600: {
          items: 3
      },
      1000: {
          items: 5
      }
  }
});

</script> -->



</body>
</html>