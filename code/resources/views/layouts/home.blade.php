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
                                <span>{{ config('app.name') }} </span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible" style="font-size:20px;">View Published Article</b>
                                    <b style="font-size:20px;">Submit Article</b>
                                </span>
                            </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        {{-- <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    With 10 years experience, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
                                </h2> --}}
                        <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"
                            data-wow-delay=".9s" data-section="#feature" href="{{ route('atozjournals') }}">View
                            Journals</a>

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
                            Welcome to the Dhaka University Journal Publications. The goal of this journal system is to
                            increase the visibility to the participating journals, use and impact of the university's
                            research publications by offering them to use through the university's own online journal
                            system. The journal system consists of fulltext materials produced in the Dhaka University,
                            covering the full range of academic journals of the University.
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

    <section id="blog-full-width">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="sidebar">
                        <div class="categories widget shadow">
                            <h3 class="widget-head">Latest Published Articles</h3>
                            <ul>
                                <li class="row" style="border-bottom: 1px solid #999; border-top: 1px solid #999">
                                    <div class="col-6">
                                        <a href="#"
                                            style="color:#0099ff; font-size:18px; text-decoration: underline">Article's
                                            Name</a>
                                        <p>Author's Name</p>
                                        <p>Original Paper</p>
                                        <p>Published on: Date</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('frontend/website/images/journal2.jpg') }}"
                                            style="width: 170px; height:130px; float: right; padding: 3%" alt="">
                                    </div>
                                </li>
                                <li class="row" style="border-bottom: 1px solid #999;">
                                    <div class="col-6">
                                        <a href="#"
                                            style="color:#0099ff; font-size:18px; text-decoration: underline">Article's
                                            Name</a>
                                        <p>Author's Name</p>
                                        <p>Original Paper</p>
                                        <p>Published on: Date</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('frontend/website/images/journal1.jpg') }}"
                                            style="width: 170px; height:130px; float: right; padding: 3%" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-5">
                    <div class="sidebar">
                        {{-- <div class="card mb-3" style="padding: 3%; margin-bottom: 20px" > --}}
                        <div class="categories widget shadow">
                            <h3 class="widget-head">For Authors</h3>
                            <ul>
                                <li>
                                    <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                        <span class="material-symbols-outlined">
                                            featured_play_list
                                        </span>
                                        Submission Guidelines</a>
                                </li>
                                <li>
                                    <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                        <span class="material-symbols-outlined">
                                            contacts
                                        </span>
                                        Contact</a>
                                </li>
                                <li>
                                    <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                        <span class="material-symbols-outlined">
                                            upload_file
                                        </span>
                                        Submit An Article</a>
                                </li>
                                {{-- <li>
                                    <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                        <span class="material-symbols-outlined">
                                            groups
                                        </span>
                                        Advisory Panal</a>
                                </li> --}}
                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- #works -->
        <section id="feature">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <h1 class="blogpost-title" style="color: #0099ff">
                             Faculties for Journal Submission
                        </h1>
                    </div>
                    {{-- <h1 class="title wow fadeInDown" data-wow-delay=".3s">Faculties For Journal Publication</h1> --}}
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-flask-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                {{-- <h4 class="media-heading">Media heading</h4> --}}

                             <h4 style="padding-top: 15%;"><a href="">Engineering Faculty</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-lightbulb-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                             <h4 style="padding-top: 15%"><a href="" >Faculty of Arts</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-lightbulb-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 style="padding-top: 15%"><a href="">Faculty of Biological Sciences</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                            <div class="media-left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
