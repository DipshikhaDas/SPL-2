@extends('layouts.main')
@section('main-section')
    <!--
            ==================================================
            Slider Section Start
            ================================================== -->
    <section id="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">

                        <!-- Slider -->
                        <section class="cd-intro">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                                <span>Dhaka University Journal</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible" style="font-size:20px;">View Published Article</b>
                                    <b style="font-size:20px;">Submit Article</b>
                                    {{-- <b style="font-size:20px;">Automated Article Submission process</b> --}}
                                </span>
                            </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        {{-- <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    With 10 years experience, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
                                </h2> --}}
                        <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"
                            data-wow-delay=".9s" href="#feature" data-section="#feature">View Journals</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#main-slider-->
    <!--
                ==================================================
                Slider Section Start
                ================================================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                        <h2>
                            ABOUT Dhaka University Journal
                        </h2>
                        <p>
                            Journal Management System is a software solution designed to streamline the entire process of
                            managing a scholarly journal, including tasks such as article submission, peer review, editorial
                            decision-making, and publishing. The system automates many manual tasks, reducing the workload
                            of editors, reviewers, and administrators. It provides a secure, centralized platform where all
                            relevant stakeholders can collaborate and communicate efficiently, ensuring that the publishing
                            process is transparent, efficient, and fast.
                        </p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                        <img src="{{ asset('frontend/website/images/about/about.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#about -->

    <!--
                ==================================================
                Journals Section Start
                ================================================== -->
    <section id="feature">
        <div class="container">
            <div class="section-heading">
                <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <b style="color:black"> Journals of University of
                        Dhaka </b> </h1>
                {{-- <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p> --}}
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-flask-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Applied Science
                                & Engineering</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Arts Faculty Journal</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Science</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-americanfootball-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Business
                                Administration</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-keypad-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Sociology</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-barcode-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of
                                Microbiology</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-flask-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Library and
                                Information Science</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Nutrition</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Psychological
                                Studies</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-flask-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Arabic Journal</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Biological
                                Sciences</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Business
                                Studies</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-flask-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Earth and
                                Environmental Sciences</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of
                                Linguistics</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of
                                Pharmaceutical Sciences</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-flask-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Urdu</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Law Journal</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-lightbulb-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Journal of Statistical
                                Research</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-americanfootball-outline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <a target="_blank" href="single-portfolio.html" style="color: black">Spectrum</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!--
                ==================================================
                Latest work section start
                ================================================== -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-heading">
                <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Published articles</h1>
                {{-- <p class="wow fadeInDown" data-wow-delay=".5s">
                            Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                        </p> --}}
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms"
                        data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend/website/images/portfolio/item-1.jpg') }}" class="img-responsive"
                                alt="this is a title" height="200">
                            <div class="overlay">
                                <div class="buttons">
                                    {{-- <a rel="gallery" href="{{ asset('frontend/website/images/portfolio/item-1.jpg') }}"></a> --}}
                                    <a target="_blank" href="single-portfolio.html">View full journal</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Dew Drop
                                </a>
                            </h4>
                            <p>
                                Redesigne UI Concept
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend/website/images/portfolio/item-2.jpg') }}" class="img-responsive"
                                alt="this is a title" height="200">
                            <div class="overlay">
                                <div class="buttons">
                                    {{-- <a rel="gallery" class="fancybox" href="{{ asset('frontend/website/images/portfolio/item-2.jpg') }}">Demo</a> --}}
                                    <a target="_blank" href="single-portfolio.html">View full journal</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Bottle Mockup
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend/website/images/portfolio/item-3.jpg') }}" class="img-responsive"
                                alt="" height="200">
                            <div class="overlay">
                                <div class="buttons">
                                    {{-- <a rel="gallery" class="fancybox" href="{{ asset('images/portfolio/item-3.jpg') }}">Demo</a> --}}
                                    <a target="_blank" href="single-portfolio.html">View full journal</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Table Design
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend/website/images/portfolio/item-4.jpg') }}" class="img-responsive"
                                alt="" height="200">
                            <div class="overlay">
                                <div class="buttons">
                                    {{-- <a rel="gallery" class="fancybox" href="{{ asset('frontend/website/images/portfolio/item-4.jpg') }}">Demo</a> --}}
                                    <a target="_blank" href="single-portfolio.html">View full journal</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Make Up elements
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend/website/images/portfolio/item-5.jpg') }}" class="img-responsive"
                                alt="" height="200">
                            <div class="overlay">
                                <div class="buttons">
                                    {{-- <a rel="gallery" class="fancybox" href="{{ asset('frontend/website/images/portfolio/item-5.jpg') }}">Demo</a> --}}
                                    <a target="_blank" href="single-portfolio.html">View full journal</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Shoping Bag Concept
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend/website/images/portfolio/item-6.jpg') }}" class="img-responsive"
                                alt="" height="200">
                            <div class="overlay">
                                <div class="buttons">
                                    {{-- <a rel="gallery" class="fancybox" href="{{ asset('frontend/website/images/portfolio/item-6.jpg') }}">Demo</a> --}}
                                    <a target="_blank" href="single-portfolio.html">View full journal</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Caramel Bottle
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor.
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section> <!-- #works -->
    <!-- /#feature -->
@endsection
