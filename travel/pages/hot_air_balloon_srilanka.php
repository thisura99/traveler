<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


include('includes/uiheader.php');
include('includes/uinavbar.php');


?>


<?php

$connection = mysqli_connect("localhost", "root", "", "traveler");

if ($connection) {
  echo 'db connected';
} else {
  echo 'dn no connected';
}

?>






<!--details area-->
<div class="container-xxl py-5" id="intop">
  <div class="container tab-content">

    <div class="row">
      <!--cards/left side-->
      <div class="col-md-12 col-lg-9 col-xl-9 p-2">
        <!--thumbnail caro-->
        <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
          <div id="jssor_1"
            style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
              style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
              <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../img/ballooning/spin.svg" />
            </div>
            <div data-u="slides"
              style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-1-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-1-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-2-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-2-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-3-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-3-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-4-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-4-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-5-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-5-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-6-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-6-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-7-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-7-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-8-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-8-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-9-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-9-sri-lanka.jpg" />
              </div>
              <div>
                <img data-u="image" src="../img/ballooning/hot-air-ballooning-10-sri-lanka.jpg" />
                <img data-u="thumb" src="../img/ballooning/hot-air-ballooning-10-sri-lanka.jpg" />
              </div>
            </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web
              animation</a>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort101"
              style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;"
              data-autocenter="1" data-scale-bottom="0.75">
              <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                  <div data-u="thumbnailtemplate" class="t"></div>
                  <svg viewbox="0 0 16000 16000" class="cv">
                    <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                    <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                    <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                  </svg>
                </div>
              </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;"
              data-scale="0.75">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
              </svg>
            </div>
            <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;"
              data-scale="0.75">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
              </svg>
            </div>
          </div>
        </div>

        <h2 class="position-relative d-inline mt-4">Hot Air Ballon Tour In Sri Lanka</h2>

        <!--para-->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
            <div class="p-4 text-dark" style="text-align: justify;">
              <p style="font-size: 20px;" data-aos="fade-down-right">Imagine yourself floating gracefully over the spectacular lands of Sri Lanka
                with beautiful rivers, magical forests, green mountains and ancient historical
                sites. Hot air ballooning is a relatively new activity, but it’s gaining more
                popularity each year. It’s a unique way to see the country and there are no
                two routes alike so you are guaranteed to have a unique experience. All the
                balloons are manufactured in Great Britain and the pilots also train there.
                During the flight a special ground crew follows the air balloon in jeep and
                makes sure that everything is alright.</p>
              <p data-aos="fade-down-right">Air ballooning heavily depends on the weather so you can’t book too far
                in advance. The best time to enjoy this activity is late autumn to early
                spring. The whole experience lasts for around 4 hours and includes balloon
                inflation, arrival, briefing, flight, landing, and a short breakfast with
                champagne and snacks.</p>
              <p data-aos="fade-down-right">Balloon trips are usually scheduled in the morning so you could watch the sunrise in the air. Takeoff
                starts soon after dawn which is around 6-7 a.m. depending on the season. It’s best to ask your hotel to
                arrange a wakeup call so you would wake up on time. Hot air balloon tours are usually all-inclusive and
                you’ll be provided with an A/C car to transfer and from the point of takeoff. It is definitely a
                one-of-a-kind experience that shouldn’t be missed.</p>
              <p data-aos="fade-down-right">~ kids under 7 years old and pregnant ladies will not be allowed to take the balloon flight.
                ~ You are advised to allocate a maximum of 4 hours for your balloon excursion's ( from pick up to drop
                off ). <br>
                ~ Pick up time 4.30, 5am depend on the location. <br>
                ~ If a flight is cancelled due to bad weather we do not charge and payment is refunded in full case of
                advance payment.</p>
            </div>
          </div>
        </div>

        <!--map details-->
        <div class="row p-4 mb-2">
          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">HOT AIR BALLOON TOURS Information and Google Ma
          </h2>
          <div class="col-md-12 bg-light shadow-lg p-4">
            <div class="row">
              <div class="col-md-8" data-aos="fade-down-right">
                <p style="font-size: 16px;">
                  TOUR :HOT AIR BALLOON <br>
                  TOURTIME:EARLY <br>
                  MORNINGDATE:EVERYDAY (NOVEMBER TO APRIL) <br>
                  DURATION:FLIGHT - 1HR <br>
                  PRICE:210 USD Per Person
                </p>
              </div>
              <div class="col-md-4" data-aos="fade-up-left">
                <h5>HOT AIR BALLOON TOUR</h5>
                <h6>210USD Per Person</h6>
                <div class="btn btn-primary">INQUERY NOW</div>


              </div>
            </div>
            <div class="row mb-5" data-aos="fade-up">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7904.599934501552!2d80.66605127150692!3d7.863644405317102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca582a02e03fd%3A0xcc4ae7194586ca01!2sSri%20Lanka%20Ballooning%20-%20Sunrise%20Ballooning%20(Pvt)%20ltd!5e0!3m2!1sen!2slk!4v1674754685447!5m2!1sen!2slk"
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>
        </div>

        <!--hotel details-->
        <div class="row m-4">
          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">HOT AIR BALLOON TOURS Best Hotels / Accommodations</h2>
          <div class="col-md-12 col-lg-12 col-xl-12 p-2 text-dark">
            <p style="font-size: 20px; text-align: justify;">Best hotels to stay for easy access to hot air balloon tours sites.</p>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-4 p-2" data-aos="fade-down-right">
            <div class="hotel-box">
              <article>
                <figure>
                  <a href="#">
                    <span>
                      <img src="../img/kandy/hotel_cinnamon_citadel.jpg" alt="">
                    </span>
                  </a>
                </figure>
                <div class="details">
                  <span class="price">
                    <small>avg/night</small>
                    $115
                  </span>
                  <a href="#">
                    <h4 class="box-title">
                      Heritance Kandalama
                      <p style="font-size: 12px;">DAMBULLA</p>
                      <small>Kandy</small>
                    </h4>
                  </a>
                  <div class="feedback">
                    <div class="five-star-container">
                      <span style="width: 94%;" class="five-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </span>
                    </div>
                    <span class="review">
                      <a class="btn btn-primary button" href="#">View On Map</a>
                    </span>
                  </div>
                </div>
              </article>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-4 p-2" data-aos="fade-down-right">
            <div class="hotel-box">
              <article>
                <figure>
                  <a href="#">
                    <span>
                      <img src="../img/kandy/hotel_earls_regencey.jpg" alt="">
                    </span>
                  </a>
                </figure>
                <div class="details">
                  <span class="price">
                    <small>avg/night</small>
                    $115
                  </span>
                  <a href="#">
                    <h4 class="box-title">
                      Earl's Regency
                      <p style="font-size: 12px;">Tennekumbura</p>
                      <small>Kandy</small>
                    </h4>
                  </a>
                  <div class="feedback">
                    <div class="five-star-container">
                      <span style="width: 94%;" class="five-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </span>
                    </div>
                    <span class="review">
                      <a class="btn btn-primary button" href="#">View On Map</a>
                    </span>
                  </div>
                </div>
              </article>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-4 p-2" data-aos="fade-down-right">
            <div class="hotel-box">
              <article>
                <figure>
                  <a href="#">
                    <span>
                      <img src="../img/kandy/hotel_mahaweli_reach.jpg" alt="">
                    </span>
                  </a>
                </figure>
                <div class="details">
                  <span class="price">
                    <small>avg/night</small>
                    $115
                  </span>
                  <a href="#">
                    <h4 class="box-title">
                      Mahaweli Reach
                      <p style="font-size: 15px;">Weerakoon Mawatha</p>
                      <small>Kandy</small>
                    </h4>
                  </a>
                  <div class="feedback">
                    <div class="five-star-container">
                      <span style="width: 94%;" class="five-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </span>
                    </div>
                    <span class="review">
                      <a class="btn btn-primary button" href="#">View On Map</a>
                    </span>
                  </div>
                </div>
              </article>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-4 p-2" data-aos="fade-down-right">
            <div class="hotel-box">
              <article>
                <figure>
                  <a href="#">
                    <span>
                      <img src="../img/kandy/hotel_hilltop.jpg" alt="">
                    </span>
                  </a>
                </figure>
                <div class="details">
                  <span class="price">
                    <small>avg/night</small>
                    $115
                  </span>
                  <a href="#">
                    <h4 class="box-title">
                      Hotel Hilltop
                      <p style="font-size: 15px;">Peradeniya Rd</p>
                      <small>Kandy</small>
                    </h4>
                  </a>
                  <div class="feedback">
                    <div class="five-star-container">
                      <span style="width: 94%;" class="five-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </span>
                    </div>
                    <span class="review">
                      <a class="btn btn-primary button" href="#">View On Map</a>
                    </span>
                  </div>
                </div>
              </article>

            </div>
          </div>

        </div>

      </div>


      <!--right side-->
      <div class="col-md-12 col-lg-4 col-xl-3 p-2 d-none d-lg-block">
        <div class="row">
          <div class="col-md-6 col-lg-9 col-xl-12 m-3 p-2 ">
            <div class="row right-card w-100" data-aos="fade-up-left">
              <a href="#" class=" btn-ex desti" style="text-decoration: none!important;">
                <div class="des-desti">
                  <i class="fa fa-bed" aria-hidden="true"></i>
                </div>
                <div class="desti-af"></div>
                <span>
                  What to do..<br>
                  <i style="font-size: 20px; color: #7db921;"><em>Hotels</em></i>
                </span>
              </a>
            </div>
          <div class="row right-card w-100" data-aos="fade-up-left">
              <a href="#" class=" btn-ex activies" style="text-decoration: none!important;">
                  <div class="des-activies">
                      <i class="fa fa-bicycle" aria-hidden="true"></i>
                  </div>
                  <div class="activies-af"></div>
                  <span>
                      What to do..<br>
                      <i style="font-size: 20px; color: #372aee;"><em>Activies</em></i>
                  </span>
              </a>
          </div>
          <div class="row right-card w-100" data-aos="fade-up-left">
              <a href="#" class=" btn-ex photo" style="text-decoration: none!important;">
                  <div class="des-photo">
                      <i class="fa fa-camera" aria-hidden="true"></i>
                  </div>
                  <div class="photo-af"></div>
                  <span>
                      See Strat Travel..<br>
                      <i style="font-size: 20px; color: #d68d1e;"><em>Galary</em></i>
                  </span>
              </a>
          </div>
          <div class="row right-card w-100" data-aos="fade-up-left">
              <a href="#" class=" btn-ex package" style="text-decoration: none!important;">
                  <div class="des-package">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i>
                  </div>
                  <div class="package-af"></div>
                  <span>
                      Made Your Tours..<br>
                      <i style="font-size: 20px; color: #e622e6;"><em>Packages</em></i>
                  </span>
              </a>
          </div>
          </div>

          <div class="col-md-6 col-lg-9 col-xl-12 m-3 p-2 shadow-sm rounded-lg" data-aos="fade-up-left"
            style="text-align: center; margin-top: 20px; background-color: rgb(150, 197, 197);">
            <div class="row" >
              <h3 data-aos="fade-up-left">Let us organize your holiday tour</h3>
              <h6 style="text-align: justify;" data-aos="fade-up-left">We would be more than happy to help you to organize Sri Lanka Tour.
                Our Tour Operators are 24/7 at your service to help you.</h6>
              <div style="font-size: 40px;" data-aos="fade-up-left">
                <a href="#" class="text-dark"><i class='bx bxl-whatsapp'></i></a>
                <a href="#" class="text-dark"><i class='bx bxl-linkedin'></i></a>
                <a href="#" class="text-dark"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="text-dark"><i class='bx bxl-facebook'></i></a>
              </div>

              <div class=" row text-dark" data-aos="fade-up-left">
                <i class='bx bxs-phone-call' style="font-size: 30px;">&nbsp; +94 714 134 476</i>
                <p class="mt-1">Drop a quick message to a travel agent info@forevertravel.com</p>
              </div>


              <div data-aos="fade-up-left"
                style="background-color: green; border-radius: 30px; width: 90%; margin-left: 5%; margin-bottom: 20px;">
                <a href="https://wa.me/+94714134476" target="_blank" style="text-decoration: none!important;">
                  <div style="color: #fff; padding-top:5px; padding-bottom:5px;">
                    <span style="font-size: 25px; ">Chat On Whatsapp</span>
                    <i class='bx bxl-whatsapp' style="font-size: 35px;"></i>
                  </div>
                </a>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-9 col-xl-12 m-3 pt-2 shadow-sm rounded-lg" data-aos="fade-up-left"
            style="background-color: rgb(150, 197, 197);">
            <div class="row">
              <h6>Beautiful Sri Lanka</h6>
            </div>
            <div class="row text-dark" data-aos="fade-up-left">
              <div class="w-25 m-0 pl-2 pr-0">
                <img src="../img/activities/1_Jungle_Beach.jpg" width="100%" alt="">
              </div>
              <div class="w-75">
                <p class="m-0 p-0" style="font-size: 15px; color: #372aee;">Beach</p>
                <p class="m-0 p-0">&nbsp; Jungle Beach</p>
              </div>
            </div>
            <hr>
            <div class="row text-dark" data-aos="fade-up-left">
              <div class="w-25 m-0 pl-2 pr-0">
                <img src="../img/activities/2_Ravana_Falls.jpg" width="100%" alt="">
              </div>
              <div class="w-75">
                <p class="m-0 p-0" style="font-size: 15px; color: #372aee;">Waterfalls</p>
                <p class="m-0 p-0">&nbsp; Ravana</p>
              </div>
            </div>
            <hr>
            <div class="row text-dark" data-aos="fade-up-left">
              <div class="w-25 m-0 pl-2 pr-0">
                <img src="../img/activities/3_Sigiriya.png" width="100%" alt="">
              </div>
              <div class="w-75">
                <p class="m-0 p-0" style="font-size: 15px; color: #372aee;">Rock</p>
                <p class="m-0 p-0">&nbsp; Sigiriya</p>
              </div>
            </div>
            <div class="row" style="margin-bottom: 20px;" data-aos="fade-up-left">
              <a href="#" class="btn w-75 ml-5 mt-2 mb-2 text-white bg-primary"
                style="border-radius: 30px; margin-bottom: 20px;">
                View All The Destination
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-9 col-xl-12 m-3 pt-2 shadow-sm rounded-lg"
            style="background-color: rgb(150, 197, 197);" data-aos="fade-up-left">
            <div class="row" style="margin-bottom: 20px;" data-aos="fade-up-left">
              <h6>Follow Forever Travel</h6>
              <a href="#" class="btn w-75 ml-5 mt-2 mb-2 text-white"
                style="background-color: #372aee; border-radius: 30px;">
                <i class='bx bxl-twitter' style="font-size: 20px;"></i>
                Follow @Forever_TRAVEL
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-9 col-xl-12 m-3 pt-2 shadow-sm rounded-lg"
            style="background-color: rgb(150, 197, 197);" data-aos="fade-up-left">
            <div class="row">
              <h6 data-aos="fade-up-left">Why book with us?</h6>
              <div class="row text-dark" data-aos="fade-up-left">
                <div class="w-auto pl-4">
                  <i class='bx bxs-directions' style="font-size: 30px;"></i>
                </div>
                <div class="w-75 mb-2">
                  <p class="m-0 p-0" style="font-size: 15px; color: #0526e4;">Tailor-made private tours</p>
                  <p class="m-0 p-0" style="text-align: justify;">Our private tour packages can be tailored or built
                    completely from scratch to suit your needs.</p>
                </div>
              </div>
              <hr>
              <div class="row text-dark" data-aos="fade-up-left">
                <div class="w-auto pl-4">
                  <i class='bx bxs-like' style="font-size: 30px;"></i>
                </div>
                <div class="w-75 mb-2">
                  <p class="m-0 p-0" style="font-size: 15px; color: #0526e4;">Quality and service</p>
                  <p class="m-0 p-0" style="text-align: justify;">We closely monitor client satisfaction and are
                    consistently seeking new ways to exceed our clients’ expectations.</p>
                </div>
              </div>
              <hr>
              <div class="row text-dark" data-aos="fade-up-left">
                <div class="w-auto pl-4">
                  <i class='bx bxs-time' style="font-size: 30px;"></i>
                </div>
                <div class="w-75 mb-2">
                  <p class="m-0 p-0" style="font-size: 15px; color: #0526e4;">Save time and effort</p>
                  <p class="m-0 p-0" style="text-align: justify;">Researching and organizing your own holiday tour
                    package can be a stressful task. Let us do the work for you as the top travel agent in Sri Lanka!
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

</div>


<!--search bar-->
<div class="container-fluid bg-primary py-5 mb-5 hero-header-balloining">
  <div class="container py-5">
      <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
              <h1 class="display-3 text-white mb-3">DISCOVER YOUR DREAM PLACE</h1>
              <p class="fs-4 text-white mb-4">Ready for a holiday? Here’s a list of curated adventures picked just for you!</p>
              <div class="position-relative w-50 mx-auto">
                <!-----inp[ut box------>
                <input type="text" class="form-control bg-white border-0 rounded-pill w-100 py-3 ps-4 ps-5"
                  placeholder="Eg : London" style="font-size: 18px;">
                <!-------button---->
                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                  style="margin-top: 6px; font-size: 18px;">Search</button>
              </div>
          </div>
      </div>
  </div>
</div>











<!---Process Start---->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center pb4">
      <h6 class="section-title text-center text-primary px-3">
        Process
      </h6>
      <h1 class="mb-5">Easy Step</h1>
    </div>

    <div class="row gy-5 gx-4 justify-content-center">

      <div class="col-lg-4 col-sm-6 text-center pt-4" data-aos="flip-left">
        <div class="position-relative  pt-5 pb-4 px-4" style="border:2px solid #378C3F;">
          <div
            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
            style="width: 100px; height: 100px;">
            <i class="fa fa-globe fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Choose A Destination</h5>
          <hr class="w-25 mx-auto bg-primary mt-0">


        </div>
      </div>

      <div class="col-lg-4 col-sm-6 text-center pt-4" data-aos="flip-left">
        <div class="position-relative  pt-5 pb-4 px-4" style="border:2px solid #378C3F;">
          <div
            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
            style="width: 100px; height: 100px;">
            <i class="fa fa-dollar-sign fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Pay Your Payment</h5>
          <hr class="w-25 mx-auto bg-primary mt-0">


        </div>
      </div>

      <div class="col-lg-4 col-sm-6 text-center pt-4" data-aos="flip-left">
        <div class="position-relative pt-5 pb-4 px-4" style="border:2px solid #378C3F;">
          <div
            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
            style="width: 100px; height: 100px;">
            <i class="fa fa-plane fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Enjoy You Tour</h5>
          <hr class="w-25 mx-auto bg-primary mt-0">


        </div>
      </div>
    </div>
  </div>
</div>





<!--testamonial-->
<div class="container-xxl py-5 destination">
  <div class="container">
    <div class="section" id="reference">
      <div class="container cc-reference">
        <div class="text-center">
          <h5 class="section-title bg-white text-center text-primary px-3">Our Best</h5>
          <h1 class="mb-5">References</h1>
        </div>
        <div class="h4 mb-4 text-center title"></div>
        <div class="card" data-aos="zoom-in">
          <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
              <li data-target="#cc-Indicators" data-slide-to="1"></li>
              <li data-target="#cc-Indicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-2 col-md-3 cc-reference-header"><img src="../img/homepage/bird_watching_card.jpg"
                      alt="Image" />
                    <div class="h5 pt-2">Aiyana</div>
                    <p class="category">CEO / WEBM</p>
                  </div>
                  <div class="col-lg-10 col-md-9">
                    <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est
                      porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam
                      luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper,
                      laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient
                      fringilla rhoncus eleifend.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-2 col-md-3 cc-reference-header"><img src="../img/homepage/surffing _card.jpg" alt="Image" />
                    <div class="h5 pt-2">Braiden</div>
                    <p class="category">CEO / Creativem</p>
                  </div>
                  <div class="col-lg-10 col-md-9">
                    <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est
                      porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam
                      luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper,
                      laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient
                      fringilla rhoncus eleifend.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-2 col-md-3 cc-reference-header"><img src="../img/homepage/surffing _card.jpg" alt="Image" />
                    <div class="h5 pt-2">Alexander</div>
                    <p class="category">CEO / Webnote</p>
                  </div>
                  <div class="col-lg-10 col-md-9">
                    <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est
                      porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam
                      luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper,
                      laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient
                      fringilla rhoncus eleifend.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>








<!--cuntact us-->
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('../img/homepage/map.png')">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Us</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/f/mqkoekpn" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i
                                class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name"
                              required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i
                                class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject"
                              required="required" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail"
                              required="required" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message"
                              required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2">No.16, Temple Street, Horana</p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2">+94 714 134 476</p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p>thisurasenia51@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<?php
include('includes/uiscript.php');
include('includes/uifooter.php');
?>