<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
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

   <!-- jquery vendor -->
   <script src="{{ asset('frontend/dashboard/js/lib/jquery.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/jquery.nanoscroller.min.js') }}"></script>
   <!-- nano scroller -->
   <script src="{{ asset('frontend/dashboard/js/lib/menubar/sidebar') }}.js"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/preloader/pace.min.js') }}"></script>
   <!-- sidebar -->

   <script src="{{ asset('frontend/dashboard/js/lib/bootstrap.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/scripts.js') }}"></script>
   <!-- bootstrap -->

   <script src="{{ asset('frontend/dashboard/js/lib/calendar-2/moment.latest.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/calendar-2/pignose.init.js') }}"></script>


   <script src="{{ asset('frontend/dashboard/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/weather/weather-init.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/circle-progress/circle-progress.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/circle-progress/circle-progress-init.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/chartist/chartist.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/sparklinechart/sparkline.init.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('frontend/dashboard/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
   <!-- scripit init-->
   <script src="{{ asset('frontend/dashboard/js/dashboard2.js') }}"></script>
