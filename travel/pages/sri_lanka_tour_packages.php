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






<!--search bar-->
<div class="container-fluid bg-primary py-5 mb-5 hero-header-sl-thing">
  <div class="container py-5">
      <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
              <h1 class="display-3 text-white mb-3">SRI LANKAN TOUR PACKAGES IN EXCLUSIVE PRICE</h1>
              <p class="fs-4 text-white mb-4">Ready for a holiday? Here’s a list of curated adventures picked just for you!</p>
              
          </div>
      </div>
  </div>
</div>


<div class="search-container contaienr-fluid">
  <div class="container">
      <div class="row search-box bg-dark">
          <div class="col-md-3">
              <select name="" id="" class="form-control border-start-0">
                  <option value="">Select Activity</option>
                  <option value="">City Tours</option>
                  <option value="">Relaxation Tours</option>
                  <option value="">Cultral Tours</option>
              </select>
          </div>
           <div class="col-md-3">
              <select name="" id="" class="form-control">
                  <option value="">Select Activity</option>
                  <option value="">City Tours</option>
                  <option value="">Relaxation Tours</option>
                  <option value="">Cultral Tours</option>
              </select>
          </div>
           <div class="col-md-3">
              <input placeholder="Select Date" type="text" class="form-control">
          </div>
           <div class="col-md-3">
              <button class="btn w-100 btn-primary">Search Package</button>
          </div>
      </div>
  </div> 
</div>


<!--main area/tour pacakages-->
<div class="container-xxl py-5" id="intop">
  <div class="container">

    <div class="title text-center ">
      <h6 class="section-title text-center text-primary px-3">Packages</h6>      
    </div>
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">In Sri Lanka</h6>
      <h1>Explore Holiday Packages And Tailor Made Tours</h1>
  </div>
    <div class="row mt-4">
      <!--cards/left side-->
      <div class="col-md-12 col-lg-9 col-xl-9 p-2">

        <div class="tour-box bg-white p-2 mb-4"  data-aos="flip-up">
          <div class="row p-1">
            <div class="col-lg-4 col-md-6">
              <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="../img/homepage/Jungle_Beach_Card.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="">
                  <h5 class="text-white">576$ Pre Person</h5>
                  <span>15 places</span>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-2">
              <div class="row">
                <div class="col-md-8"><a href="#" class="text-decoration-none"><h4 class="m-0 p-0">Summer Package Special Offer</h4></a></div>
                <div class="col-md-4 d-flex flex-row">
                  <h5 class="text-white w-50 text-center  rounded-pill bg-primary mr-2">6N</h5>
                  <h5 class="text-white w-50 text-center rounded-pill bg-primary">7D</h5>
                </div>
              </div>
              <div class="row mt-2">
                <h6 class="mb-3"><i class="fa fa-check"></i>Special Offer valid only on May & June</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Relax on superb Negombo beaches</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Discover the rock fortress of Sigiriya, Dambulla Cave temple and Kandy</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Enjoy the cool highlands and tea estates Nuwara Eliya</h6>
              </div>
              <div class="row mt-2 ml-4 mr-4">
                <h4 class="btn btn-danger w-100 rounded-1 text-uppercase ">More Details</h4>
              </div>
            </div>
          
          </div>
        </div>

        <div class="tour-box bg-white p-2 mb-4"  data-aos="flip-up">
          <div class="row p-1">
            <div class="col-lg-4 col-md-6">
              <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="../img/homepage/Jungle_Beach_Card.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="">
                  <h5 class="text-white">576$ Pre Person</h5>
                  <span>15 places</span>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-2">
              <div class="row">
                <div class="col-md-8"><a href="#" class="text-decoration-none"><h4 class="m-0 p-0">Summer Package Special Offer</h4></a></div>
                <div class="col-md-4 d-flex flex-row">
                  <h5 class="text-white w-50 text-center  rounded-pill bg-primary mr-2">6N</h5>
                  <h5 class="text-white w-50 text-center rounded-pill bg-primary">7D</h5>
                </div>
              </div>
              <div class="row mt-2">
                <h6 class="mb-3"><i class="fa fa-check"></i>Special Offer valid only on May & June</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Relax on superb Negombo beaches</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Discover the rock fortress of Sigiriya, Dambulla Cave temple and Kandy</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Enjoy the cool highlands and tea estates Nuwara Eliya</h6>
              </div>
              <div class="row mt-2 ml-4 mr-4">
                <h4 class="btn btn-danger w-100 rounded-1 text-uppercase ">More Details</h4>
              </div>
            </div>
          
          </div>
        </div>

        <div class="tour-box bg-white p-2 mb-4"  data-aos="flip-up">
          <div class="row p-1">
            <div class="col-lg-4 col-md-6">
              <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="../img/homepage/Jungle_Beach_Card.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="">
                  <h5 class="text-white">576$ Pre Person</h5>
                  <span>15 places</span>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-2">
              <div class="row">
                <div class="col-md-8"><a href="#" class="text-decoration-none"><h4 class="m-0 p-0">Summer Package Special Offer</h4></a></div>
                <div class="col-md-4 d-flex flex-row">
                  <h5 class="text-white w-50 text-center  rounded-pill bg-primary mr-2">6N</h5>
                  <h5 class="text-white w-50 text-center rounded-pill bg-primary">7D</h5>
                </div>
              </div>
              <div class="row mt-2">
                <h6 class="mb-3"><i class="fa fa-check"></i>Special Offer valid only on May & June</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Relax on superb Negombo beaches</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Discover the rock fortress of Sigiriya, Dambulla Cave temple and Kandy</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Enjoy the cool highlands and tea estates Nuwara Eliya</h6>
              </div>
              <div class="row mt-2 ml-4 mr-4">
                <h4 class="btn btn-danger w-100 rounded-1 text-uppercase ">More Details</h4>
              </div>
            </div>
          
          </div>
        </div>

        <div class="tour-box bg-white p-2 mb-4"  data-aos="flip-up">
          <div class="row p-1">
            <div class="col-lg-4 col-md-6">
              <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="../img/homepage/Jungle_Beach_Card.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="">
                  <h5 class="text-white">576$ Pre Person</h5>
                  <span>15 places</span>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-2">
              <div class="row">
                <div class="col-md-8"><a href="#" class="text-decoration-none"><h4 class="m-0 p-0">Summer Package Special Offer</h4></a></div>
                <div class="col-md-4 d-flex flex-row">
                  <h5 class="text-white w-50 text-center  rounded-pill bg-primary mr-2">6N</h5>
                  <h5 class="text-white w-50 text-center rounded-pill bg-primary">7D</h5>
                </div>
              </div>
              <div class="row mt-2">
                <h6 class="mb-3"><i class="fa fa-check"></i>Special Offer valid only on May & June</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Relax on superb Negombo beaches</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Discover the rock fortress of Sigiriya, Dambulla Cave temple and Kandy</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Enjoy the cool highlands and tea estates Nuwara Eliya</h6>
              </div>
              <div class="row mt-2 ml-4 mr-4">
                <h4 class="btn btn-danger w-100 rounded-1 text-uppercase ">More Details</h4>
              </div>
            </div>
          
          </div>
        </div>

        <div class="tour-box bg-white p-2 mb-4"  data-aos="flip-up">
          <div class="row p-1">
            <div class="col-lg-4 col-md-6">
              <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="../img/homepage/Jungle_Beach_Card.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="">
                  <h5 class="text-white">576$ Pre Person</h5>
                  <span>15 places</span>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-2">
              <div class="row">
                <div class="col-md-8"><a href="#" class="text-decoration-none"><h4 class="m-0 p-0">Summer Package Special Offer</h4></a></div>
                <div class="col-md-4 d-flex flex-row">
                  <h5 class="text-white w-50 text-center  rounded-pill bg-primary mr-2">6N</h5>
                  <h5 class="text-white w-50 text-center rounded-pill bg-primary">7D</h5>
                </div>
              </div>
              <div class="row mt-2">
                <h6 class="mb-3"><i class="fa fa-check"></i>Special Offer valid only on May & June</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Relax on superb Negombo beaches</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Discover the rock fortress of Sigiriya, Dambulla Cave temple and Kandy</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Enjoy the cool highlands and tea estates Nuwara Eliya</h6>
              </div>
              <div class="row mt-2 ml-4 mr-4">
                <h4 class="btn btn-danger w-100 rounded-1 text-uppercase ">More Details</h4>
              </div>
            </div>
          
          </div>
        </div>

        <div class="tour-box bg-white p-2 mb-4"  data-aos="flip-up">
          <div class="row p-1">
            <div class="col-lg-4 col-md-6">
              <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="../img/homepage/Jungle_Beach_Card.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="">
                  <h5 class="text-white">576$ Pre Person</h5>
                  <span>15 places</span>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-2">
              <div class="row">
                <div class="col-md-8"><a href="#" class="text-decoration-none"><h4 class="m-0 p-0">Summer Package Special Offer</h4></a></div>
                <div class="col-md-4 d-flex flex-row">
                  <h5 class="text-white w-50 text-center  rounded-pill bg-primary mr-2">6N</h5>
                  <h5 class="text-white w-50 text-center rounded-pill bg-primary">7D</h5>
                </div>
              </div>
              <div class="row mt-2">
                <h6 class="mb-3"><i class="fa fa-check"></i>Special Offer valid only on May & June</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Relax on superb Negombo beaches</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Discover the rock fortress of Sigiriya, Dambulla Cave temple and Kandy</h6>
                <h6 class="mb-3"><i class="fa fa-check"></i>Enjoy the cool highlands and tea estates Nuwara Eliya</h6>
              </div>
              <div class="row mt-2 ml-4 mr-4">
                <h4 class="btn btn-danger w-100 rounded-1 text-uppercase ">More Details</h4>
              </div>
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
<!-- tour packages end -->







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