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
  <title>Dashboard</title>
  <!-- ================= Favicon ================== -->
  <!-- Standard -->

</head>

<body>

  {{-- <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <ul>
          <li class="label">Main</li>
          <li><a href="{{ url('/') }}"><i class="ti-home"></i> Home </a>
          </li>

          <li class="label">User</li>
          <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Roles <span
                class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
              <li><a href="{{url('/journalAdmin')}}">Journal Admin</a></li>
              <li><a href="{{url('/editor')}}">Editor</a></li>
              <li><a href="{{url('/reviewer')}}">Reviewer</a></li>
              <li><a href="{{url('/author')}}">Author</a></li>
              <li><a href="superAdmin.html">Super Admin</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /# sidebar -->

  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="float-left">
            <div class="hamburger sidebar-toggle">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
          <div class="float-right">
            <div class="dropdown dib">
              <div class="header-icon" data-toggle="dropdown">
                <span class="user-avatar">User
                  <i class="ti-angle-down f-s-10"></i>
                </span>
                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">>
                          <i class="ti-power-off"></i>
                          <span> {{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1 style="color:#0099ff; font-size:18px; font-weight: bold">Hello, <span style="color:#0099ff">Welcome Here</span></h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" style="color:#0099ff; font-size:18px; font-weight: bold">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">


          <div class="container" style="width: 70%;">
              <div class="card">
                <div class="card-body">
                  <div class="year-calendar"></div>
                </div>
              <!-- /# card -->
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>



</body>

</html>

@endsection
