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





    <section id="blog-full-width">
        <div class="container">


            <div class="sidebar">

                <div class="search-bar" style="padding-bottom: 3%">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <form class="search-form" action="#" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="categories widget shadow">
                    <h3 class="widget-head">For Authors</h3>
                    <ul>
                        <li style="border-bottom: 1px solid #d3d3d3; border-top: 1px solid #d3d3d3">
                            <a href="" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                Journal Name</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection
