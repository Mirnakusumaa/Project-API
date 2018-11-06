<!doctype html>
<html class="no-js" lang="">
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
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#slider">Home</a></li>
                                        <li><a href="#abouts">About</a></li>
                                        <li><a href="#features">News</a></li>
                                        <li><a href="#portfolio">Services</a></li>
                                        <li><a href="#ourPakeg">Orders</a></li>
                                        <li><a href="#mobaileapps">Contact Us</a></li>
                                        <!--<li><a href="#" class="booking">Table Booking</a></li>-->
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>  
        </header> <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <img src="{{ asset('images/2.png') }}" alt="" />
                                    
                                </div>
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-6">
                            <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                                <img src="{{ asset('images/m.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="single_abouts_text wow slideInRight" data-wow-duration="1s">
                                <h4><center>About us</center></h4></br>
                                <h3>"MORE THAN JUST CLEANING"</h3></br></br>
                                <div style="text-align:justify;"><p>&nbsp &nbsp &nbsp &nbsp &nbsp Andrrows and Care merupakan jasa perawatan sepatu di Yogyakarta yang berbasis media sosial.
                                Perbedaan lain dengan jasa perawatan sepatu lainnya, Andrrows and Care menerapkan sistem online serta layanan
                                antar jemput yang tidak mengharuskan customer datang ke offline store.</p></br>

                                <p>&nbsp &nbsp &nbsp &nbsp &nbsp Andrrows and Care melakukan perawatan sepatu secara profesional dengan teknik khusus, serta menggunakan alat
                                dan bahan premium untuk perawatan sepatu, baik produk lokal maupun luar negeri, selain melayani perawatan sepatu,
                                Andrrows and Care juga selalu memberikan tips-tips perawatan sepatu.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area  wow fadeIn" data-wow-duration="3s">
                            <div class="col-md-12">
                                <div class="main_features_content text-left">
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h4>Information</h4>
                                            <!--<h3>Taste of Precious</h3>-->
                                            <p>Mengenal jenis bahan sepatu : </br>
                                            KULIT SINTETIS adalah jenis bahan pembuat sepatu yang berasal dari campuran bahan-bahan kimia yang diolah dipabrik.
                                            Kulit sintetis sendiri mempunyai tekstur yang mengkilat. Kulit sintetis merupakan jenis bahan pembuat sepatu yang paling sering digunakan oleh para produsen.</p>

                                            <a href="" class="btn btn-primary">click here</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h4>News</h4>
                                            <!--<h3>Taste of Precious</h3>-->
                                            <p>HOT PROMO!!</br>
                                            5 kali cuci GRATIS 1 kali cuci</p></br></br></br></br>
                                            <a href="" class="btn btn-primary">click here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                        <div class="col-md-12">
                            <div class="head_title text-center">
                                <h4>SERVICES</h4></br>
                                <h3>Which Service Do You Need ?</h3>
                            </div>

                            <div class="main_portfolio_content">
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n1.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>FAST CLEANING</h6>
                                        <p class="product_price">Rp. 30.000</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view1"><i class="fa fa-search"></i> Learn More</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n2.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>DEEP CLEANING</h6>
                                        <p class="product_price">Rp. 40.000</p>
                                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view2"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n3.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>LEATHER CARE</h6>
                                        <p class="product_price">Rp. 60.000</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view3"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n4.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>REPAIR</h6>
                                        <p class="product_price">Rp. 45.000</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view4"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n5.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>REPAINT</h6>
                                        <p class="product_price">Rp. 50.000</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view5"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n6.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>UNYELLOWING AND WHITENING</h6>
                                        <p class="product_price">Rp. 70.000</p>
                                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view6"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n7.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>JUST FOR HER</h6>
                                        <p class="product_price">Rp. 30.000</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view7"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{ asset('images/n8.png') }}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>WATERPROFF ACTION</h6>
                                        <p class="product_price">Rp. 80.000</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view8"><i class="fa fa-search"></i> Learn More</button>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade product_view" id="product_view1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="{{ asset('images/hh.jpg') }}" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Fast Cleaning</h4><br>
                        <p>Semua jenis sepatu: sneakers, boots, flat shoes, high heels, wedges, kid shoes</p>
                        <p>Semua jenis bahan: canvas, suede, nubuck, mesh, knit, nylon, textile</p>
                        <p> Membersihkan bagian upper dan midsole</p>
                        <h4>Durasi :3 Hari</h4>
                        <h3 class="cost">Rp. 30.0000</h3>
                                              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="{{ asset('images/yt.jpg') }}" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Deep Cleaning</h4><br>
                        <p>Treatment untuk semua jenis sepatu : sneakers, boots, mountain boots, safety shoes, sport shoes</p>
                        <p> Membersihkan semua bagian sepatu: midsole, outsole, insole, upper, dan lace</p>
                        <p>Penghilangan noda : aspal, lumpur, oli, minyak, saus, cat, dll</p>
                        <h4>Durasi :4 Hari</h4>
                        <h3 class="cost">Rp. 40.0000</h3>
                                              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="images/t.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Leather Care</h4><br>
                        <p>Treatment untuk sepatu berbahan kulit (leather), baik genuine leather maupun synthetic leather.</p>
                        <p> Bahan leather memerlukan perawatan khusus agar tidak kering dan tahan lama. Dilakukan beberapa tahap untuk merawatnya, di antaranya, pembersihan sepatu dari debu dan kotoran, pemberian lotion agar leather tetap lembut dan awet, serta polishing agar sepatu lebih berkilau dan terlindungi.</p>
                        <h4>Durasi : 7 Hari</h4>
                        <h3 class="cost">Mild : Rp. 40.0000</h3>
                        <h3 class="cost">Hard : Rp. 60.0000</h3>
                                              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view4">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="images/te.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Repair</h4><br>
                        <p>Merekatkan kembali bagian midsole atau outsole yang lepas</p>
                        <p>Menggunakan bahan perekat khusus sepatu impor dan berkualitas</p>
                        <p> Mengganti sole sepatu yang telah rusak dengan sole sepatu lain</p>
                        <h4>Durasi : 7 Hari</h4>
                        <h3 class="cost">Rp. 45.0000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="images/tr.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Repaint</h4><br>
                        <p>Pewarnaan ulang warna sepatu yang telah pudar</p>
                        <p>Dilakukan special treatment sebelum di-repaint</p>
                        <p>Material yang bisa di-repaint: canvas, suede, leather</p>
                        <p> Mengganti sole sepatu yang telah rusak dengan sole sepatu lain</p>
                        <h4>Durasi : 7 Hari</h4>
                        <h3 class="cost">Rp. 50.0000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view6">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="images/x.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Unyellowing & Whitening</h4><br>
                        <p>Membersihkan semua bagian sepatu: midsole, outsole, insole, upper, dan lace</p>
                        <p>Penghilangan noda</p>
                        <p>Penghilangan yellowing / oksidasi pada midsole</p>
                        <h4>Durasi : 7 Hari</h4>
                        <h3 class="cost">Rp. 70.0000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view7">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="images/ee.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Just For Her</h4><br>
                        <p>Treatment untuk sepatu wanita, seperti flat shoes, wedges, dan high heels</p>
                        <h4>Durasi : 3 Hari</h4>
                        <h3 class="cost">Rp. 30.0000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view8">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><center>SERVICE</center></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="images/u.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Waterproof Action</h4><br>
                        <p>Melapisi sepatu anda dengan cairan talas dimana dapat melindungi sepatu dari air</p>
                        <p>Mempertahankan sepatu tetap kering walaupun terkena air</p>
                        <p>Mempertahankan sepatu tetap dalam keadan bersih</p> 
                        <h4>Durasi : 3 Hari</h4>
                        <h3 class="cost">Rp. 80.0000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </section>

        <section id="ourPakeg" class="ourPakeg">
            <div class="container">
        

<!--HALAMAN POP UP LOGIN-->
<div class="login text-right">  
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sign In</button>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Sign Up</button>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Sign In</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form" action="{{url('login')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="input-group">
                            <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" style="width:350px;" required autofocus>

                        @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                        
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" style="width:350px;" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                            
                        </div><!-- /.input-group -->
                    </div> <!-- /.form-group -->

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div> <!-- /.checkbox -->
                    <input type="submit" class="form-control btn btn-primary" value="ok">
                </form>

            </div> <!-- /.modal-body -->

            <div class="modal-footer">
                <button type="hidden" class="btn btn-link">Forgot Password?</button>
            </div> <!-- /.modal-footer -->

        </div>
    </div>
</div>



<!--SIGN UP-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form" action="{{url('register')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="input-group">

                            <input type="text" class="form-control" id="uLogin" name="username" placeholder="Username" style="width:350px;">   
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="input-group">

                            <input type="text" class="form-control" id="uLogin" name="email" placeholder="Email" style="width:350px;">   
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="uPassword" name="password" placeholder="Password" style="width:350px;">
                        </div><!-- /.input-group -->
                    </div> <!-- /.form-group -->

                    
                    <input type="submit" class="form-control btn btn-primary" value="ok">
                </form>

            </div> <!-- /.modal-body -->

            <div class="modal-footer">
                <button type="hidden" class="btn btn-link">By signing up you agree to our<br>Term & Conditions</button>
            </div> <!-- /.modal-footer -->

        </div>
    </div>
</div>




                <div class="main_pakeg_content">
                    <div class="row">
                        <div class="head_title text-center">
                            <div class="sign_in text-right">
                            <!--<a href="#" class="sign">Sign In</a>
                            <a href="#" class="sign">Sign Up</a>-->
                        </div>
                            <h4>Orders</h4>
                            <h3>Do you want to repair your shoes?</h3>
                        </div>
                        
                        <div class="single_pakeg_one text-right wow rotateInDownRight">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Notes</h4>
                                    </div>

                                    <ul>
                                        <li> Order bisa dilakukan secara langsung ataupun melalui website. </li>
                                        <li> Semua treatment mendapatkan ziplock. </li>
                                        <li> Semua treatment mendapatkan garansi selama 2 hari untuk cleaning, 1 bulan untuk repaint dan repair. </li>
                                        <li> Pelanggan yang sepatunya telah selesai akan mendapatkan sms notifikasi. </li>
                                        <li> Sepatu yang tidak diambil lebih dari 2 minggu setelah sms notifikasi, bukan menjadi tanggung jawab kami. </li>
                                        <li>Menerima kiriman sepatu dari dalam kota dan luar kota.</li>
                                        <li>Melayani jasa antar jemput untuk dalam kota dan luar kota (syarat dan ketentuan berlaku).</li>
                                        <li>Kotak line official @andrrowscare untuk info lebih lanjut.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mobaileapps" class="mobailapps">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="footer_widget_content text-center">
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <h3>Our Location</h3>

                                <div class="single_widget_info">
                                    <p>Jalan Parangtritis Km 4.5

                                        <span>Sewon Bantul</span>
                                        <span>Yogyakarta</span>
                                        <span class="phone_email">phone: 081-57676658</span>
                                        <span>Email: Andrrowsandcare@gmail.com</span></p>
                                </div>

                                <div class="footer_socail_icon">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <!--<a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-phone"></i></a>
                                    <a href=""><i class="fa fa-camera"></i></a>-->
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="4s">
                                <h3>Open Order</h3>

                                <div class="single_widget_info">
                                    <p><span class="date_day">Monday To Friday</span>
                                        <span>9:00am to 9:00pm</span>
                                        

                                        <span class="date_day">Saturday & Sunday</span>
                                        <span>11:00am to 10:00pm</span>
                                        </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="5s">
                                <h3>Send Message</h3>

                                <div class="single_widget_form text-left">
                                    <form action="#" id="formid">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div> <!-- end of form-group -->

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                                        </div>

                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--<div class="main_mobail_apps_content wow zoomIn">  
                        </div>-->
                    </div>
                </div>
            </div>
        </section>

        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <!--<div class="footer_widget_content text-center">
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_info">
                                    <p>112-Legere ancillae vix ne.

                                        <span>Te elit putent propriae eum,</span>
                                        <span>aliquip nominati</span>
                                        <span class="phone_email">phone: 00 000 000</span>
                                        <span>Email: support@templatemela.com</span></p>
                                </div>

                                <div class="footer_socail_icon">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-phone"></i></a>
                                    <a href=""><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="4s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_info">
                                    <p><span class="date_day">Monday To Friday</span>
                                        <span>8:00am to 10:00pm(Breakfast)</span>
                                        <span>11:00am to 10:00pm(Lunch/Diner)</span>

                                        <span class="date_day">Saturday & Sunday</span>
                                        <span>10:00am to 11:00pm(Brunch)</span>
                                        <span>11:00am to 12:00pm(Lunch/Dinner)</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="5s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_form text-left">
                                    <form action="#" id="formid">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div> --><!-- end of form-group -->

                                        <!--<div class="form-group">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                                        </div>

                                        <input type="submit" value="click here" class="btn btn-primary">
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>



        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright wow zoomIn" data-wow-duration="3s">
                            <p>Made with <i class="fa fa-heart"></i> by Andrrows&Care 2017. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
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

