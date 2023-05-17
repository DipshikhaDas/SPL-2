@extends('layouts.main')

@section('main-section')
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Submit Articles</h2>
                        <ol class="breadcrumb list-inline text-center">
                            <li class="list-inline-item">
                                <a href="{{ route('/') }}">
                                    <i class="ion-ios-home"></i>
                                    Home &nbsp; &nbsp;/
                                </a>
                            </li>
                            <li class="active list-inline-item">Submit Articles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="works" class="works">
        <div class="container">
            <p> You can submit articles in the following journals </p>
            
        </div>
    </section>
@endsection
