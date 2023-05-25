
 {{-- sidebar --}}
 <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
     <div class="nano">
         <div class="nano-content">
             <ul>
                <div class="logo">
                     <a href="{{ url('/') }}">
                        <img  src="{{ asset('logo2.png')}}" style="height: 60px; width: 180px;">
                     </a>
                </div>




                 <li class="label">Dashboard</li>
                 <li><a class="sidebar-sub-toggle"><span class="material-symbols-outlined">arrow_drop_down</span>Assigned Roles</a>
                     <ul>

                         @role('journalAdmin')
                             <li><a href="{{ route('journalAdmin') }}"> Journal Admin</a></li>
                         @endrole
                         @role('editor')
                             <li><a href="{{ route('editor') }}">Editor</a></li>
                         @endrole
                         @role('reviewer')
                             <li><a href="{{ route('reviewer') }}">Reviewer</a></li>
                         @endrole
                         @role('author')
                             <li><a href="{{ route('author') }}">Author</a></li>
                         @endrole
                         @role('superAdmin')
                             <li><a href="{{ route('superAdminIndex') }}">Super Admin</a></li>
                         @endrole
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </div>

 {{-- header --}}
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
                             <span class="user-avatar"
                                 style="color:#0099ff; font-size:18px; font-weight: bold">{{ Auth::user()->name }}
                                 <span class="material-symbols-outlined">
                                     expand_more
                                 </span>
                             </span>
                             <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                 <div class="dropdown-content-body d-flex-inline mx-auto ">
                                   <ul>

                                       <li class="d-flex mx-auto">
                                        <span class="material-symbols-outlined" style="font-size: 18px">
                                          logout
                                      </span>
                                             <a href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                                 <span> {{ __('Logout') }}</span>
                                             </a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                 class="d-none">
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
 </div>

 <!-- jquery vendor -->
 <script src="{{ asset('frontend/dashboard/js/lib/jquery.min.js') }}"></script>
 <script src="{{ asset('frontend/dashboard/js/lib/jquery.nanoscroller.min.js') }}"></script>
 <!-- nano scroller -->
 <script src="{{ asset('frontend/dashboard/js/lib/menubar/sidebar.js') }}"></script>
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
