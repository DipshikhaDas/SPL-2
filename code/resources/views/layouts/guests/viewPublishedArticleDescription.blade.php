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
                <div class="col-md-7" style="height: 300px">
                    <div class="sidebar">
                        <div class="card-wrapper mb-1" style="padding-bottom: 24px;">
                            <div class="card shadow">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img class="img-fluid" src="{{ asset('frontend/website/images/journal.jpg') }}"
                                            alt="Journal Image" style="padding: 10%" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body" style="padding-top: 8%">
                                            <p class="card-text"><strong>Title:</strong> Article1</p>
                                            <p class="card-text"><strong>Issue no:</strong> 1</p>
                                            <p class="card-text"><strong>Author's Name: </strong>Abul Kalam</p>
                                            <p class="card-text"><strong>Date:</strong> June 1, 2023</p>
                                            {{-- <a href="#" class="btn btn-primary">View all volumes and issues</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-5" style="max-height:500px">
                    <div class="sidebar">
                        <div class="categories widget shadow">
                            <h3 class="widget-head">Article Title</h3>
                            <ul>
                                <li>
                                    <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                        <span class="material-symbols-outlined">
                                            picture_as_pdf
                                        </span>
                                        View Article</a>
                                </li>
                                <li>
                                    <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                        <span class="material-symbols-outlined">
                                            download
                                        </span>
                                        Download PDF</a>
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
