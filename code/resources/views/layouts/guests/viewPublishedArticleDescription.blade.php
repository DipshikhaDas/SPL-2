@extends('layouts.main')

@section('main-section')
    <section class="global-page-header">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>About this Journal</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================
        =            Blog With Right Sidebar            =
          ==============================================-->
    <section id="blog-full-width">
        <div class="container">
            <div style="border: 2px solid #999; padding: 10px;">
                <h1 class="blogpost-title">
                    <a href="post-fullwidth.html">Title</a>
                </h1>
                <div class="blog-meta">
                    <p style="margin: 0;">Faculty Name</p>
                </div>
            </div>


            <div
                style="float: left; width: 20%; background-color: #e6f2ff; height: 60px; padding-top: 1.6%; padding-left: 3%">
                <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline; font-weight: bold;">
                    <span class="material-symbols-outlined">
                        group
                    </span>Editorial Board
                </a>
            </div>

            <div
                style="float: left; width: 20%; background-color: #f2f2f2; height: 60px; padding-top: 1.6%; padding-left: 1.4%">
                <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline; font-weight: bold">
                    <span class="material-symbols-outlined">
                        auto_stories
                    </span>Journal Description
                </a>
            </div>

            <div
                style="float: left; width: 20%; background-color: #e6f2ff; height: 60px; padding-top: 1.6%; padding-left: 3%">
            </div>

            <div
                style="float: left; width: 20%; background-color: #f2f2f2; height: 60px; padding-top: 1.6%; padding-left: 3%">
            </div>

            <div
                style="float: left; width: 20%; background-color: #e6f2ff; height: 60px; padding-top: 1.6%; padding-left: 3%">
            </div>


            <div style="clear: both;"></div>



            <div class="row">
                <div class="col-md-7">
                    <div class="sidebar">
                        <div class="card-wrapper mb-1" style="padding-bottom: 24px;">
                            <div class="card shadow">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img class="img-fluid" src="{{ asset('frontend/website/images/journal.jpg') }}"
                                            alt="Journal Image" style="padding: 4%" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <p class="card-text"><strong>Volume no:</strong> 1</p>
                                            <p class="card-text"><strong>Issue no:</strong> 1</p>
                                            <p class="card-text"><strong>Date:</strong> June 1, 2023</p>
                                            <a href="#" class="btn btn-primary">View all volumes and issues</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="categories widget shadow" style="margin-top: 3%">
                            <h3 class="widget-head">Latest Articles of this Journal</h3>
                            <ul>
                                <li class="row" style="border-bottom: 1px solid #999; border-top: 1px solid #999">
                                    <div class="col-6">
                                        <a href="#"
                                            style="color:#0099ff; font-size:18px; text-decoration: underline">Article's
                                            Name</a>
                                        <p>Author's Name</p>
                                        <p>Original Paper </p>
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
                                        <p>Original Paper </p>
                                        <p>Published on: Date</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('frontend/website/images/journal1.jpg') }}"
                                            style="width: 170px; height:130px; float: right; padding: 3%" alt="">
                                    </div>
                                </li>
                            </ul>
                            <p><a href="" style="font-size:18px; text-decoration: underline">View all volumes and
                                    issues</a></p>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-5">
                    <div class="sidebar">
                        {{-- <div class="card mb-3" style="padding: 3%; margin-bottom: 20px" > --}}
                        <div class="card-wrapper mb-3" style="padding-bottom: 24px;">
                            <div class="card shadow">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <img class="img-fluid" src="{{ asset('frontend/website/images/journal.jpg') }}"
                                            alt="" style="padding: 4%" />
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title fw-bold" style="margin-top: 2%;">title</h4>
                                            <p class="card-text">faculty name:</p>
                                            <p class="card-text">Volume no:</p>
                                            <p class="card-text">Issue no:</p>
                                            <a href="" class="btn btn-primary">Submit An Article</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recent-post widget shadow">
                            <ul>
                                <li class="row">
                                    <div class="col-6">
                                        <div class="card mb-3" style="background-color: #e6f2ff">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Impact Factor</h5>
                                                <h4 class="card-text">3.44</h4>
                                                <p class="card-subtitle text-muted">2015</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card mb-3" style="background-color: #f2f2f2">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Downloads</h5>
                                                <h4 class="card-text">3744</h4>
                                                <p class="card-subtitle text-muted">2015</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                                            groups
                                        </span>
                                        Advisory Panal</a>
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
                                                          ==================================================
                                                          Call To Action Section Start
                                                          ================================================== -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <a href="" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s"
                            data-wow-duration="500ms">View A-Z Journals</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
