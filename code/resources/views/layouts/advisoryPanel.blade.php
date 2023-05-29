@extends('layouts.main')

@section('main-section')

<!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Advisory Panel</h2>
                            <ol class="breadcrumb list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">Advisory Panel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--
==================================================
    Team Section Start
================================================== -->
<section id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="subtitle text-center">Meet The Advisory Panel Members</h2>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
          <div class="team-img">
            <img src="{{asset('frontend/website/images/team/human.png') }}" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Jonathon Andrew</h3>
          {{-- <p class="team_designation">CEO, Project Manager</p> --}}
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
          <div class="team-img">
            <img src="{{ asset('frontend/website/images/team/human.png') }}" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Professor B. C. Meikap</h3>
          <p class="team_designation">CEO, Project Manager</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
          <div class="team-img">
            <img src="{{ asset('frontend/website/images/team/human.png') }}" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Deu John</h3>
          {{-- <p class="team_designation">CEO, Project Manager</p> --}}
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
          <div class="team-img">
            <img src="{{ asset('frontend/website/images/team/human.png') }}" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Anderson Martin</h3>
          {{-- <p class="team_designation">CEO, Project Manager</p> --}}
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
