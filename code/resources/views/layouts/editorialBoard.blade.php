@extends('layouts.main')

@section('main-section')

<!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Editorial Board</h2>
                            <ol class="breadcrumb list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">Editorial Board</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=============================
=            Editorial board            =
==============================-->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"></h1>
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
                                <a target="_blank" href="single-portfolio.html">View all members</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Applied Science & Engineering
                            </a>
                        </h4>
                        {{-- <p>
                            Redesigne UI Concept
                        </p> --}}
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
                                <a target="_blank" href="single-portfolio.html">View all members</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Journal of Law
                            </a>
                        </h4>
                        {{-- <p>
                            Lorem ipsum dolor sit.
                        </p> --}}
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
                                <a target="_blank" href="single-portfolio.html">View all members</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Journal of Biological Science
                            </a>
                        </h4>
                        {{-- <p>
                            Lorem ipsum dolor sit amet.
                        </p> --}}
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
                                <a target="_blank" href="single-portfolio.html">View all members</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Arabic Journal
                            </a>
                        </h4>
                        {{-- <p>
                            Lorem ipsum dolor.
                        </p> --}}
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
                                <a target="_blank" href="single-portfolio.html">View all members</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Journal of Urdu
                            </a>
                        </h4>
                        {{-- <p>
                            Lorem ipsum dolor.
                        </p> --}}
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
                                <a target="_blank" href="single-portfolio.html">View all members</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Spectrum
                            </a>
                        </h4>
                        {{-- <p>
                            Lorem ipsum dolor.
                        </p> --}}
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> <!-- #works -->
<!-- /#feature -->


@endsection
