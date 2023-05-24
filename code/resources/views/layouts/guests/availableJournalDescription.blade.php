@extends('layouts.main')

@section('main-section')
    <section class="global-page-header">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Blog with right sidebar</h2>
                        <ol class="breadcrumb list-inline text-center">
                            <li class="list-inline-item">
                                <a href="index.html">
                                    <i class="ion-ios-home"></i>
                                    Home &nbsp; &nbsp;/
                                </a>
                            </li>
                            <li class="active list-inline-item">Blog</li>
                        </ol>
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


            <div style="float: left; width: 20%; background-color: #e6f2ff; height: 50px; ">
                <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline"><span class="material-symbols-outlined">
                    group
                    </span>Editorial Board</a>
            </div>

            <div style="float: left; width: 20%; background-color: #f2f2f2; height: 50px;">
                <!-- Content for the middle division -->
            </div>

            <div style="clear: both;"></div>



            <div class="row">
                <div class="col-md-7">
                    <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                        <div class="blog-content" style="margin-top: 4%">
                            <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum
                                consectetur euismod
                                malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur
                                dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et
                                magniseget dis
                                parturient montes sed quia consequuntur magni dolores eos qui ratione.

                                Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum
                                consectetur euismod
                                malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur
                                dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et
                                magniseget dis
                                parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum
                                consectetur euismod
                                malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur
                                dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et
                                magniseget dis
                                parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum
                                consectetur euismod
                                malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur
                                dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et
                                magniseget dis
                                parturient montes sed quia consequuntur magni dolores eos qui ratione.
                                Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum
                                consectetur euismod
                                malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur dictum.Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur dictum.Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien
                                consectetur dictum.

                            </p>
                            {{-- <a href="single-post.html" class="btn btn-dafault btn-details hvr-bounce-to-right">Continue Reading</a> --}}
                    </article>
                    <div class="sidebar">
                        <div class="card-wrapper mb-1" style="padding-bottom: 24px;">
                            <div class="card">
                                <ul>
                                    <li>
                                        <h3>Latest Issue</h3>
                                    </li>
                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-md-3">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/website/images/journal.jpg') }}" alt=""
                                                    style="padding: 4%" />
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body" style="padding: 10%">
                                                    <p class="card-text">Volume no: </p>
                                                    <p class="card-text" style="padding-bottom: 8%">Issue no: and Date </p>
                                                    <a href="" class="btn btn-primary"> View all volumes and issues
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="categories widget">
                            <h3 class="widget-head">Latest Articles of this Journal</h3>
                            <ul>
                                <li class="row" style="border-bottom: 1px solid #999; border-top: 1px solid #999">
                                    <div class="col-6">
                                        <a href="#"
                                            style="color:#0099ff; font-size:18px; text-decoration: underline">Article's
                                            Name</a>
                                        <p>Author's Name</p>
                                        <p>Original Paper | Open Access </p>
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
                                        <p>Original Paper | Open Access </p>
                                        <p>Published on: Date</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('frontend/website/images/journal1.jpg') }}"
                                            style="width: 170px; height:130px; float: right; padding: 3%" alt="">
                                    </div>
                                </li>
                            </ul>
                            <p><a href="" style="font-size:18px; text-decoration: underline"> View all volumes and
                                    issues </a></p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-5">
                    <div class="sidebar">
                        {{-- <div class="card mb-3" style="padding: 3%; margin-bottom: 20px" > --}}
                        <div class="card-wrapper mb-3" style="padding-bottom: 24px;">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <img class="img-fluid" src="{{ asset('frontend/website/images/journal.jpg') }}"
                                            alt="" style="padding: 4%" />
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">

                                            <h4 class="card-title fw-bold" style="margin-top: 2%;"> title </h4>
                                            <p class="card-text"> faculty name: </p>
                                            <p class="card-text">Volume no: </p>
                                            <p class="card-text">Issue no: </p>
                                            <p class="card-text">Deadline: </p>

                                            <a href="" class="btn btn-primary">Submit An Article </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories widget">
                            <h3 class="widget-head">Latest Articles</h3>
                            <ul>
                                <li>
                                    <a href=""
                                        style="color:#0099ff; font-size:18px; text-decoration: underline">Submission
                                        Guidelines</a>
                                </li>
                                <li>
                                    <a href=""
                                        style="color:#0099ff; font-size:18px; text-decoration: underline">Contact</a>
                                </li>
                                <li>
                                    <a href=""
                                        style="color:#0099ff; font-size:18px; text-decoration: underline">Advisory
                                        Panal</a>
                                </li>
                            </ul>
                        </div>

                        <div class="recent-post widget">
                            <h3>Recent Posts</h3>

                            <ul>
                                <li>
                                    <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                    <time>16 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Statistics,analysis. The key to succes.</a><br>
                                    <time>15 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post without image, only text.</a><br>
                                    <time>14 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post with audio player. Share your creations.</a><br>
                                    <time>14 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post with classic Youtbube player.</a><br>
                                    <time>12 May, 2015</time>
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
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK
                            ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus
                                vero magni recusandae? Dolore, maxime praesentium.</p>
                            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown"
                                data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
