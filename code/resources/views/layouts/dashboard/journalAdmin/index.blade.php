@extends('layouts.dashboard.index')

@section('body-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- theme meta -->
        <meta name="theme-name" content="focus" />
        <title>Journal Admin Dashboard</title>

    </head>

    <body>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"> <a href="{{ url('/dashboard') }}"
                                                style="color:#0099ff; font-size:18px; font-weight: bold;"> Dashboard </a>
                                        </li>
                                        <li class="breadcrumb-item active"
                                            style="color:#0099ff; font-size:18px; font-weight: bold">Journal Admin</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="card">
                                    <div class="card-title text-center"><h4>My Info</h4></div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <td>
                                                    <b>User Name:</b>
                                                </td>
                                                <td>
                                                    {{ auth()->user()->name}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Email:</b>
                                                </td>
                                                <td>
                                                    {{auth()->user()->email}}
                                                </td>
                                            </tr>
                                            <td>
                                                <b>Associated Faculty:</b>
                                            </td>
                                            <td>
                                                {{$faculty? $faculty->name : "No faculty"}}
                                            </td>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <x-dashboard.card-link route="{{ route('createUserIndex') }}" logo="person_add"
                                    text="Create User" />
                            </div>

                            <div class="col-lg-4">
                                <x-dashboard.card-link route="{{ route('createUserIndex') }}" logo="Note"
                                    text="Articles and Related stuffs" />
                            </div>

                            <div class="col-lg-3">
                                <x-dashboard.card-link route="{{ route('rolesIndex') }}" logo="settings_accessibility"
                                    text="Set Role" />
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-3">
                                <x-dashboard.card-link route="{{ route('rolesIndex') }}" logo="Send"
                                    text="Send Articles to Editor" />
                            </div>

                            <div class="col-lg-3">
                                <x-dashboard.card-link route="{{ route('rolesIndex') }}" logo="QuickReply"
                                    text="Send Review Request" />
                            </div>
                            <div class="col-lg-3">
                                <x-dashboard.card-link class="card-link"
                                route="{{ route('createJournalPage') }}"
                                logo="library_add"
                                text="Open a Journal" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <x-dashboard.card-link class="card-link"
                                route="{{ route('submitPublishedArticle') }}"
                                logo="library_add"
                                text="Add Published Article" />
                            </div>
                            <div class="col-lg-3">
                                <x-dashboard.card-link class="card-link"
                                route="{{ route('addPublishedJournalTable') }}"
                                logo="library_add"
                                text="Add Published Journal" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <x-dashboard.card-link class="card-link" 
                                route="{{ route('viewSubmittedArticles') }}" 
                                logo="view_list"
                                text="View Submitted Articles" />
                            </div>
                        </div>

                    </section>

                    <div class="footer">
                        <p>2023 © Admin Board </p>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script src="{{ asset('frontend/scripts/cardFocus.js') }}"></script>

    </html>
@endsection
