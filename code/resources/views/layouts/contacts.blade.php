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
                            <h2>Contact</h2>
                            <ol class="breadcrumb list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--
==================================================
    Contact Section Start
================================================== -->
<section id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="block">
          <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Us</h2>
          <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
            consectetur adipisicing elit. Dolore, ea! --}}
          </p>
          <div class="contact-form">
            {{-- <form id="contact-form" method="#" action="#" role="form">

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
              </div>

              <div id="success" class="success">
                Thank you. The Mailman is on His Way :)
              </div>

              <div id="error" class="error">
                Sorry, don't know what happened. Try later :(
              </div>

              <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                <button type="submit" id="contact-submit" class="btn btn-default btn-send hvr-bounce-to-right"
                  value="Send Message">Send Message</button>
              </div>
            </form> --}}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map-area">
          <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
          <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            {{-- Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis,
            nostrud eram quibusdam ad nam nostrud ubi. --}}

          </p>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14609.802264016242!2d90.38726798013866!3d23.731307053578913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e9a09d3565%3A0x5cfe6b47f59cb10b!2sDhaka%20University%20Campus%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1678570732687!5m2!1sen!2sbd"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="row address-details">
      {{-- <div class="col-lg-3 col-sm-6">
        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
          <i class="ion-ios-location-outline"></i>
          <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
        </div>
      </div> --}}
      <div class="col-lg-4 col-sm-6">
        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
          <i class="ion-ios-location-outline"></i>
          <h5>University of Dhaka <br>Dhaka,1000</h5>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
          <i class="ion-ios-email-outline"></i>
          <p>x@du.ac.bd<br>y@du.ac.bd</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
          <i class="ion-ios-telephone-outline"></i>
          <p>+088 052 245 022<br>+088 999 999 999</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
