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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @foreach ($journals as $journal)
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ file_exists(public_path(str_replace('public', 'storage', $journal->cover_photo))) ? asset(str_replace('public', 'storage', $journal->cover_photo)) : asset(str_replace('public','storage',$defaultCover)) }}"
                                        class="card-img" alt="cover">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold"> {{ $journal->title }} </h5>
                                            <p class="card-text"> {{ $journal->faculty->name }}</p>


                                            <a href="{{ route('submitArticle', ['journal_id' => $journal->id])}}" class="btn btn-secondary">Submit An Article </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
