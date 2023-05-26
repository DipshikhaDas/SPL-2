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
                                <span>{{ config ('app.name') }} </span><br>
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
                            data-wow-delay=".9s" data-section="#feature" href="{{ route('atozjournals')}}">View Journals</a>

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
                        <p class="text-justify">
                         Welcome to the Dhaka University Journal Publications. The goal of this journal system is to increase the visibility to the participating journals, use and impact of the university's research publications by offering them to use through the university's own online journal system. The journal system consists of fulltext materials produced in the Dhaka University, covering the full range of academic journals of the University. 
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


@endsection
