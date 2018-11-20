@extends('template.main')
@section('content')
<section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <img src="{{ asset('images/user.png') }}" alt="" />
                                </div>
                                <div class="col-md-offset-2">
                                <div class="main_slider_content2 wow zoomIn col-md-12" data-wow-duration="1s">
                                    <a href="pesan">
                                        <img src="{{ asset('images/p.png') }}" alt="" />
                                    </a>
                                </div>
                                    <div class="main_slider_content2 wow zoomIn col-md-12" data-wow-duration="1s">
                                        <a href="confirm">
                                            <img src="{{ asset('images/k.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="main_slider_content2 wow zoomIn col-md-12" data-wow-duration="1s">
                                        <a href="bayar">
                                            <img src="{{ asset('images/b.png') }}" alt="" />
                                        </a>
                                    </div> -->
                                    <div class="main_slider_content2 wow zoomIn col-md-12" data-wow-duration="1s">
                                        <a href="status">
                                            <img src="{{ asset('images/s.png') }}" alt="" />
                                        </a>
                                    </div> 
                                        
                                    </div>
                                </div>

                             
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection