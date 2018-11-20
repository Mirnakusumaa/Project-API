<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="shortcut icon" href="{{ asset('images/3.png')}}">
        <title>Andrrows&Care</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('css/animate/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('css/style-order.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--<div class='preloader'><div class='loaded'>&nbsp;</div></div>-->
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">  
                <div class="container">
                    <div class="row">   
                        <div class="col-md-10 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
                                <a href=""><i class="fa fa-clock-o"></i> Admin 24/7</a>
                                <a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                        </div>

                    </div>          
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="{{ asset('images/3.png') }}" alt="" /></a>
                                </div>

                                
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>  
        </header> <!-- End Header Section -->

      


        <section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area text-center  wow fadeIn" data-wow-duration="3s">
                            <div class="col-md-12">
                                <div class="head_title text-center">
                                <h4>KONFIRMASI</h4>
                                </div>
                                <div class="konfirmasi">
                                <div class="single_pakeg_one text-right wow rotateInDownRight">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-8">
                                <div class="single_pakeg_text" style="color: #000">
                                 
<table>
  <tr>
    <td>Nomor Order &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->id_order}}</td>
  </tr>
  <tr>
    <td>Nama &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->nama}}</td>
  </tr>
  <tr>
    <td>Alamat &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->alamat}}</td>
  </tr>
  <tr>
    <td>Nomor Telepon &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->no_telp}}</td>
  </tr>

</table>
<hr>
<table>
  <tr>
    <td>Jenis Layanan &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->jenis_layanan}}</td>
    <td></td>
  </tr>
  <tr>
    <td>Harga &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->harga}}</td>
    <td></td>
  </tr>
  <tr>
    <td>Jumlah Sepatu &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->jumlah_sepatu}}</td>
    <td></td>
  </tr>
  <tr>
    <td>Warna &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->warna}}</td>
    <td></td>
  </tr>
  <tr>
    <td>Keterangan &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->keterangan}}</td>
    <td></td>
  </tr>
</table>
<hr>
<table>
  <tr>
    <td>Biaya Antar &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$tampil->ongkir}}</td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Total Harga &nbsp</strong></td>
    <td><strong>: &nbsp</strong></td>
    <td><strong>{{$tampil->total_harga}}</strong></td>
    <td></td>
  </tr>
</table>
<br><br>
<a href="status">
  <button class="btn-primary">
      Submit
  </button>
</a>
                                </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>      


        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-easing/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/wow/wow.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>