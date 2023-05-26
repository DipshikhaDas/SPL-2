@extends('layouts.main')

@section('main-section')
    <section class="global-page-header">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Journals A - Z </h2>
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

                @foreach ($alphabet as $letter)
                    <div class="categories widget shadow">
                        <h4> {{ $letter }} </h4>
                        <ul>
                            @foreach ($journals as $journal)
                                @if (strtoupper($journal->title[0]) === strtoupper($letter))
                                    <li style="border-bottom: 1px solid #d3d3d3; border-top: 1px solid #d3d3d3">
                                        <a href="{{route('individualJournal',['id'=>$journal->id])}}" style="color:#0099ff; font-size:18px; text-decoration: underline">
                                            {{ $journal->title }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
