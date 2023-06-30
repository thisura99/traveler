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
              <h1 class="display-3 text-white mb-3">FESTIVAL AND EVENT IN SRI LANKAN</h1>
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

    
    
    <div class="row mt-4">
      <!--cards/left side-->
      <div class="col-md-12 col-lg-9 col-xl-9 p-2">

        <div class="title text-center ">
          <h6 class="section-title text-center text-primary px-3">Look At</h6>      
        </div>

        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">In Sri Lanka</h6>
            <h1>Explore Most Famous Festival And Events</h1>
        </div>

        <div class="row">
          <p align="justify">With a population composed with many a races and religions, Sri Lanka 
            is never short of festivals and celebrations. Every month brings a celebration
             either religious or cultural importance, making Sri Lanka one of the countries
              with highest number of celebrations and holidays.</p>
          <p align="justify">The Sinhala-Tamil New year festival in April is the most important cultural
             festival in the country. The festival marks the beginning of the New Year 
             and the end of harvesting season. A lengthy holiday and a table full of oily
              traditional delicacies like kokis, makes the New Year festival one of the 
              long awaited festivals in the country.</p>
          <p align="justify">The May full moon poya day or Vesak is the most important religious 
            celebration in Sri Lanka, where Buddhists celebrate the nativity, 
            enlightenment and passing away of Lord Buddha with many celebrations. 
            Sri Lankans of every religion crowd the roads to enjoy Vesak decorations
             including pandals and lanterns and many a makeshift alm houses that 
             line the roads offering every food item from beverages, dessert to main meals.</p>
          <p align="justify">In August are the Esala festivals in Kandy and Kataragama. 
            The Kataragama Esala Festival is a multi-religious festival where 
            devotes use fire walking and extreme self-penance to shows their piety 
            to Lord Kataragama. The Kandy Esala Perahera or the Dalanda Perahera is
             the largest cultural parade in the world and showcases the best of Sri 
             Lankan dancing and music and the best of the domesticated tuskers in the country.</p>
        </div>
        
        <div class="row">
          <iframe src="https://www.google.com/maps/d/embed?mid=1I_tjjDtrT7h2jkuXxMpgfGbFXoAocDI&ehbc=2E312F" width="640" height="480"></iframe>
        </div>

        <!--festivals-->
        <div class="row mt-4">
          <section class="ftco-section bg-light">
            <div class="container">
              <div class="row justify-content-start pt-4 mb-2 pb-2">
                <div class="col-md-7 heading-section ftco-animate">
                  <span class="subheading"></span>
                  <h2 class="mb-0"><strong>Most Attractive</strong> Festivals</h2>
                </div>
              </div>  
              <div class="row">
                <div class="col-md-12 ftco-animate">
                  <div id="accordion">
                    <div class="row">
                      <div class="col-md-12">


                        <div class="card">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Kataragama Esala Festival <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                          </div>
                          <div id="menuone" class="collapse show">
                            <div class="card-body">
                              <p>One of the most significant Hindu festivals in Sri Lanka, it attracts thousands of devotees from across the island to the holy town of Kataragama in southern Sri Lanka over a two-week period. People from all major faiths seek divine guidance and penance from the deity by indulging in rituals like skin-piercing and acts of self-mutilation. Just like the Esala Perahera, this festival is also marked by processions of dancers, musicians, elephants, fire-eaters and acrobats, all adding up to the religious fervor and festivities.
                                <br>
                                <br>When: 21 Jul, 2022
                                <br>Where: Kataragama town in Southern Sri Lanka
                                <br>Highlight Of The Festival: Performance by fire-eaters and acrobats</p>

                               <!--images-->
                               <div class="row">
                                <div class="col-md-4">
                                  <img src="../img/festival/fes_01_01.jpg" width="300px" height="200px" alt="">
                                </div>
                                <div class="col-md-4">
                                  <img src="../img/festival/fes_01_02.jpg" width="300px" height="200px" alt="">
                                </div>
                                <div class="col-md-4">
                                  <img src="../img/festival/fes_01_03.jpg" width="300px" height="200px" alt="">
                                </div>
                                </div>
                            </div>
                          

                          </div>
                        </div>
          
                        <div class="card">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Kandy Esala Poya Perahera <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                          </div>
                          <div id="menutwo" class="collapse">
                            <div class="card-body">
                              <p>Another important one amongst religious festivals in Sri Lanka, The Festival of The Tooth pays homage to the sacred tooth relic of Buddha enshrined at the famous temple in Kandy. The grand celebrations include a spectacular procession of traditional dancers, drummers, and elephants dressed up in rich finery through the streets of the city every day for a week. The excitement, fervour and festivities on the last night must be seen to be believed. It is recommended to book a seat in advance through some local agencies to enjoy the spectacle in its full glory.
                                <br>
                                <br>When: 02 Aug - 12 Aug, 2022
                                <br>Where: Kandy
                                <br>Highlight Of The Festival: Traditional dancers, drummers, and elephants</p>
                            
                                <!--images-->
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_01.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_02.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_03.jpg" width="300px" height="200px" alt="">
                                  </div>
                                </div>
                            
                            </div>
                          </div>
                        </div>
          
                        <div class="card">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3"> Poson Festival <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                          </div>
                          <div id="menu3" class="collapse">
                            <div class="card-body">
                              <p>Also known as Poson Paya, this is the second most important one amongst festivals celebrated in Sri Lanka by the Buddhists. Since it commemorates the advent of Buddhism in the island in the 3rd century, Poson Festival holds great historical significance too. Just as in Vesak, the celebrations include lanterns, pandals, and alms-stalls across the island in the true spirit of the Buddhist traditions and teachings. The grandest festivities are in and around Mihintale rock outcrop where Buddha's disciple Mahinda first preached Buddhist doctrines to King Devanampiyatissa. Do attend Poson as it is the most important festival of Sri Lanka.
                                <br>
                                <br>When: Jun 14, 2022
                                <br>Where: Mihintale and Anuradhapura
                                <br>Highlight Of The Festival: Celebration of Buddhist traditions and teaching</p>
                            
                                <!--images-->
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_01.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_02.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_03.jpg" width="300px" height="200px" alt="">
                                  </div>
                                </div>
                            
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu3"> Nallur Festival <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                          </div>
                          <div id="menu4" class="collapse">
                            <div class="card-body">
                              <p>Rivaling the celebrations at the Kandy Esala Perahera, this 25-day long Nallur Festival held in honor of Lord Murugan is a grand and glorious affair worth witnessing. Various festivities and processions mark the celebrations on different days, with devotees from the entire island thronging the Nallur Kandaswamy Kovil. On the day of Chariot Festival, ardent devotees carry the glittering deity on a magnificent silver throne around the town. While on other days, there are fantastic processions with spectacular chariots.
                                <br>
                                <br>When: August-September
                                <br>Where: Jaffna
                                <br>Highlight Of The Festival: The devotees carry the main diety on silver thrones all around the cities.</p>
                          
                                <!--images-->
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_01.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_02.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_03.jpg" width="300px" height="200px" alt="">
                                  </div>
                                </div>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu3"> CMB Street Aurudu Shopping & Food Festival <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                          </div>
                          <div id="menu5" class="collapse">
                            <div class="card-body">
                              <p>CMB Street Aurudu Shopping is a festival where tourists will experience a stunning shopping extravaganza along with a food tour comprising some lip-smacking dishes. The festival is a one-stop shopping platform for all fashion freak people. Tourists will also get the chance to taste a lot of local street food which are very popular in the community and street fashion is another attraction that visitors must experience. The CMB Street is also of the best places to visit in Sri Lanka that you just can’t miss. 
                                <br>
                                <br>When- TBA
                                <br>Where- Green Path, Colombo- Sri Lanka
                                <br>Highlight Of The Festival: Tourists will love the street food</p>

                                <!--images-->
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_01.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_02.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_03.jpg" width="300px" height="200px" alt="">
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu3"> Love Sri Lanka Festival <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                          </div>
                          <div id="menu6" class="collapse">
                            <div class="card-body">
                              <p>This is a festival, celebrated by the Sri Lankan people, for the spirit of being “Soo Sri Lankan” shopping, food, games and entertainment, music and dance and cultural activities. Vacationers from all around the world will get to explore the real colours of Sri Lanka. This festival is being celebrated by the people of  Sri Lanka for three consecutive years. 
                                <br>
                                <br>When- 14-20 Feb, 2022
                                <br>Where- Viharamahadevi Park, Colombo, Sri Lanka
                                <br>Highlight Of The Festival: hopping, food, games and entertainment, music and dance</p>
                            
                                <!--images-->
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_01.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_02.jpg" width="300px" height="200px" alt="">
                                  </div>
                                  <div class="col-md-4">
                                    <img src="../img/festival/fes_01_03.jpg" width="300px" height="200px" alt="">
                                  </div>
                                </div>
                            
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="para"><i>
                        <b><p texta-align="justify">These festivals in Sri Lanka that you mustn’t miss out on your trip. Enticed to witness 
                          them already? Well, don’t wait much and plan your Sri Lanka trip with <strong>Traveler</strong>
                          right away! Do attend these festivals to have an encounter with the traditions and 
                          culture of Sri Lanka.</p></b><br>
                        <P>Disclaimer:<strong>Traveler</strong> claims no credit for images featured on our blog site unless otherwise noted.
                           All visual content is copyrighted to its respectful owners. We try to link back to original sources
                            whenever possible. If you own the rights to any of the images, and do not wish them to appear on
                            <strong>Traveler</strong>, please contact us and they will be promptly removed. We believe in providing proper 
                             attribution to the original author, artist or photographer.</P>
                        <p>Please Note: Any information published by <strong>Traveler</strong> in any form of content is not 
                          intended to be a substitute for any kind of medical advice, and one must not take any 
                          action before consulting a professional medical expert of their own choice.</p></i>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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