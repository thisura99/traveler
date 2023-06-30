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
              <h1 class="display-3 text-white mb-3">EXPLORE BEST ADVENTURE ACTIVITIES</h1>
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

<!--tab menu-->
<div class="container-xxl py-5" id="intop">
  <div class="container">

      <div class="title text-center">
          <h6 class="section-title  text-center text-primary px-3">In Sri Lanka</h6>
          <h2 class="position-relative d-inline">Best Place</h2>
      </div>

      <div class="row g-5" id="bestplace">

          <section class="main-container">

              <div class="tab-nav-bar">
                  <div class="tab-navigation">
                      <i class='bx bx-chevron-left left-btn'></i>
                      <i class='bx bx-chevron-right right-btn' ></i>
                      <ul class="tab-menu">
                          <li class="tab-btn active" id="kandy">Kandy</li>
                          <li class="tab-btn" id="trinco">Trincomalee</li>
                          <li class="tab-btn" id="">Nuwara Eliya</li>
                          <li class="tab-btn" id="">Yala</li>
                          <li class="tab-btn" id="">Galle</li>
                          <li class="tab-btn" id="">Jaffa</li>
                          <li class="tab-btn" id="">Anuradhapura</li>
                          <li class="tab-btn" id="">Haputhale</li>
                          <li class="tab-btn" id="">Polonnaruwa</li>
                          <li class="tab-btn" id="">Ella</li>
                      </ul>
                  </div>
              </div>

              <div class="tab-content">

                  

<!--------KANDY------->
                  <div class="tab active" id="kandy">
                      <!--topic-->
                      <div class="row">
                          <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
                              <h1 class="text-dark">Kandy</h1>
                          </div>
                      </div>
                      <!--thumbnail carosoul-->
                      <div class="row">
                          <div class="col-md-8 col-lg-8 col-xl-9">
                              <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                                  <!-- Loading Screen -->
                                  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                      <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../img/kandy/spin.svg" />
                                  </div>
                                  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                      <div>
                                          <img data-u="image" src="../img/kandy/kandy_lake_1_thumbnail.png" />
                                          <img data-u="thumb" src="../img/kandy/kandy_lake_1_thumbnail.png" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/bahirawakanda_thumbnail_1.JPG" />
                                          <img data-u="thumb" src="../img/kandy/bahirawakanda_thumbnail_1.JPG" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/dalada_maligawa_museum_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/dalada_maligawa_museum_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/flower_gardern_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/flower_gardern_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/giragama_tea_plantation_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/giragama_tea_plantation_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/kandy_lake_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/kandy_lake_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/kany_park_thumbnail.gif" />
                                          <img data-u="thumb" src="../img/kandy/kany_park_thumbnail.gif" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/queens_hotel_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/queens_hotel_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/temple_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/temple_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/teplel_relic_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/teplel_relic_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/kandy/udawaththakele_thubnail.jpg" />
                                          <img data-u="thumb" src="../img/kandy/udawaththakele_thubnail.jpg" />
                                      </div>
                                  </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
                                  <!-- Thumbnail Navigator -->
                                  <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
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
                                  <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                                      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                          <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                          <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                          <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                                      </svg>
                                  </div>
                                  <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                                      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                          <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                          <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                          <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                                      </svg>
                                  </div>
                              </div>
                          </div>
                          <!--rightcard-->
                          <div class="col-md-4 col-lg-4 col-xl-3 d-none d-lg-block pl-5">
                          
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
                      </div>

                      <!--little para-->
                      <div class="row">
                          <h2 class="position-relative d-inline mt-5 text-dark">KANDY 114 KM (71 Miles) From Colombo</h2>
                          <div class="col-md-12 col-lg-12 col-xl-12 text-dark">
                              <p style="font-size: 20px; text-align: justify;" data-aos="fade-left">Kandy is one of the most scenic cities in Sri Lanka and lies in the midst of hills.
                              It is the Capital of the Central Province. It is both an administrative ad religious city. Kandy is the 
                              second largest city in the country and is frequently visited by Buddhists especially of the Theravada School.</p>

                              <p style="font-size: 20px; text-align: justify;" data-aos="fade-left">Kandy is very famous among tourist for three main reasons: It is home to the sacred tooth 
                              relic of the Buddha (Temple of the Sacred Tooth Relic ; Dalada Maligawa ), The Botanical Gardens
                              ( Located in Peradeniya) and it always has a special place when it comes to festivities such as the 
                              Esala Perahara..</p>
                          </div>
                      </div>
                          
                      <!--cards-->
                      <div class="row">
                          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">Most Interesting Places In Kandy</h2>
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/kandy/card_temple_of_tooth.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Tooth Relic</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Kandy</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action" type="button" data-bs-toggle="offcanvas" data-bs-target="#toothrelic"
                                          aria-controls="offcanvasRight">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/kandy/card_ambakke.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Ambekke</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Kandy</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/kandy/card_bahirawakanda.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Bahirawakanda</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Unawatuna</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/kandy/card_kandy_lake.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Kandy Lake</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Unawatuna</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/kandy/card_queens_hotel.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Queens Hote</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Kandy</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/kandy/card_udawaththakele.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Udawaththakele</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Unawatuna</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                      </div>
                  
                      <!--map details-->
                      <div class="row m-4">
                          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">KANDY Information and Google Map</h2>
                          <div class="col-md-4 col-lg-4 col-xl-3 p-2 infomation text-dark" data-aos="fade-right">
                              <p>PROVINCE:CENTRAL PROVINCE</p>
                              <p>DISTRICT:KANDY DISTRICT</p>
                              <p>POPULAR FOR:PALACE OF THE TOOTH RELIC, ESALA PERAHERA - KANDY, ROYAL BOTANICAL GARDEN, PERADENIYA</p>
                              <p>WEATHER:28 °C</p>
                              <p>TYPE:CULTURAL, HISTORICAL</p>
                              <p>POPULATION :110,049</p>
                              <p>AREA:1,940 KM²</p>
                              <p>DISTANCE:114 KM (71 MILES) FROM COLOMBO</p>
                          </div>
                          <div class="col-md-8 col-lg-8 col-xl-9 p-4 mapdata" data-aos="fade-left">
                              <div>
                                  <iframe
                                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.41799049658!2d80.59076167026929!3d7.294629090221968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1673096216899!5m2!1sen!2slk"
                                      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                          </div>
                      </div>
                  
                      <!--hotel details-->
                      <div class="row m-4" >
                          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">KANDY Best Hotels / Accommodations</h2>
                          <div class="col-md-12 col-lg-12 col-xl-12 p-2 text-dark">
                              <p style="font-size: 20px; text-align: justify;">On entering to hotels in Kandy, you’ll feel an intimate atmosphere that
                                  makes you feel being
                                  in your own home with a tasteful blending of the essence.
                                  Hotels in Kandy cater according to your preference and you’ll love being here.</p>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up-left">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_cinnamon_citadel.jpg"  alt="">
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
                                                  Cinaman Citadel
                                                  <p style="font-size: 12px;">Sri Kudarathwatta Road</p>
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
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up-left">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_earls_regencey.jpg"  alt="">
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
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up-left">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_mahaweli_reach.jpg"  alt="">
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
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up-left">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_hilltop.jpg"  alt="">
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
                  

<!--Trincomalee-->
                  <div class="tab" id="trinco">
                      <!--topic-->
                      <div class="row">
                          <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
                              <h1 class="text-dark">Trincomalee</h1>
                          </div>
                      </div>
                      <!--thumbnail carosoul-->
                      <div class="row">
                          <div class="col-md-8 col-lg-8 col-xl-9">
                              <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                                  <!-- Loading Screen -->
                                  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                      <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../img/trincomalee/spin.svg" />
                                  </div>
                                  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Marble_beach_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/trincomalee/Marble_beach_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Arisimale_Beach_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/trincomalee/Arisimale_Beach_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Fort_Fredrick_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/trincomalee/Fort_Fredrick_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/trincomalee_1_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/trincomalee/trincomalee_1_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Diamond_hill_trincomalee_thubnail.png" />
                                          <img data-u="thumb" src="../img/trincomalee/Diamond_hill_trincomalee_thubnail.png" />
                                      </div>                                        
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Nilaveli_Beach_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/trincomalee/Nilaveli_Beach_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Pigeon_Island_National_Park_thumbnail.jpg" />
                                          <img data-u="thumb" src="../img/trincomalee/Pigeon_Island_National_Park_thumbnail.jpg" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/Kokilai_bird_Trincomalee_thubnail.png" />
                                          <img data-u="thumb" src="../img/trincomalee/Kokilai_bird_Trincomalee_thubnail.png" />
                                      </div>
                                      <div>
                                          <img data-u="image" src="../img/trincomalee/snorkeling_at_red_rock_trincomalee_thubnails.png" />
                                          <img data-u="thumb" src="../img/trincomalee/snorkeling_at_red_rock_trincomalee_thubnails.png" />
                                      </div>
                                  </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
                                  <!-- Thumbnail Navigator -->
                                  <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
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
                                  <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                                      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                          <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                          <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                          <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                                      </svg>
                                  </div>
                                  <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                                      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                          <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                          <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                          <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                                      </svg>
                                  </div>
                              </div>
                          </div>
                          <!--rightcard-->
                          <div class="col-md-4 col-lg-4 col-xl-3 d-none d-lg-block pl-5">
                            <div class="row right-card w-100">
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
                            <div class="row right-card w-100">
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
                            <div class="row right-card w-100">
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
                            <div class="row right-card w-100">
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
                      </div>
                  
                      <!--little para-->
                      <div class="row">
                          <h2 class="position-relative d-inline mt-5 text-dark">TRINCOMALEE 264 KM (164 Miles) From Colombo</h2>
                          <div class="col-md-12 col-lg-12 col-xl-12 text-dark">
                              <p style="font-size: 20px; text-align: justify;">Trincomalee is a port city on the east coast of Sri Lanka. 
                              The city is located on a peninsula, which divides the inner and outer harbours.Trincomalee is an anglicized
                              version of the Tamil word Tirukonamalai (which means "lord of the sacred hill"); it is a hill situated in 
                              the end of a natural land formation that resembles an arc. It is one of the main where Tamil is spoken at large scale. Historically referred to as Gokanna or Gokarna it has been a sea port that has played a major role in maritime and international trading history of Sri Lanka.</p>

                              <p style="font-size: 20px; text-align: justify;">The Bay of Trincomalee provides security and is openly 
                              accessible to all types of sea crafts in all weathers. The beaches are used for recreational purposes
                              such as surfing, scuba diving, fishing and whale watching. The city is renowned for housing the 
                              largest Dutch fort in Sri Lanka. It is home to major Sri Lankan naval bases and a Sri Lankan Air 
                              Force base.</p>
                          </div>
                      </div>

                      <!--cards-->
                      <div class="row">
                          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">Most Interesting Places In Trincomalee</h2>
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/trincomalee/card_Girihadu_Seya.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Girihadu Seya</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Kandy</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action" type="button" data-bs-toggle="offcanvas" data-bs-target="#kandy"
                                          aria-controls="offcanvasRight">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/trincomalee/card_Kanniya_Hot_Springs.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Kanniya Hot Springs</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Kandy</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/trincomalee/card_Koneswaram_Temple.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Koneswaram Temple</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Unawatuna</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/trincomalee/card_Seruwawila_Rajamaha_Viharaya.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Seruwawila Temple</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Unawatuna</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/trincomalee/card_Velgam_Vihara.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Velgama Viharaya</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Kandy</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                          <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                              <div class="item-container position-relative">
                                  <div class="image-container">
                                      <img src="../img/trincomalee/card_Uppuveli_Beach_Trincomalee.jpg" alt="">
                                  </div>
                  
                                  <div class="body-container">
                                      <div class="overplay"></div>
                  
                                      <div class="event-info">
                                          <p class="title">Uppuveli Beach</p>
                                          <div class="separator"></div>
                                          <p class="info"></i>Unawatuna</p>
                                          <p class="price">147km From Colombo</p>
                  
                                          <div class="additiona-info">
                                              <p class="info">
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-solid fa-star"></i>
                                                  <i class="fa-regular fa-star"></i>
                                                  Rating
                                              </p>
                                              <p class="info">
                                                  <i class="fa fa-money-check-dollar"></i>
                                                  140$ per Person
                                              </p>
                                              <p class="info description">
                                                  Jungle Beach is a small bay in Rumassala.
                                                  you can enjoy a great day of sunbathing and snorkeling.<span>more...</span>
                                              </p>
                                          </div>
                                      </div>
                                      <button class="action">Explore</button>
                                  </div>
                  
                              </div>
                          </div>
                  
                      </div>
                  
                      <!--map details-->
                      <div class="row m-4">
                          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">Trincomalee Information and Google Map</h2>
                          <div class="col-md-4 col-lg-4 col-xl-3 p-2 infomation text-dark">
                              <p>PROVINCE:EASTERN PROVINCE</p>
                              <p>DISTRICT:TRINCOMALEE DISTRICT</p>
                              <p>POPULAR FOR:THE BAY OF TRINCOMALEE'S HARBOUR, BEACH, HINDU AND BUDDHIST SITES OF HISTORICAL IMPORTANCE</p>
                              <p>WEATHER:30 °C</p>
                              <p>TYPE:NATURE</p>
                              <p>POPULATION :101,958</p>
                              <p>AREA:7.5 KM²</p>
                              <p>DISTANCE:265 KM (140 MILES) FROM COLOMBO</p>
                          </div>
                          <div class="col-md-8 col-lg-8 col-xl-9 p-4 mapdata">
                              <div>
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63122.11406985448!2d81.17819710736337!3d8.583292591648757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1
                                  !3m3!1m2!1s0x3afbbcb6902dbe27%3A0x7de76a7a331b0fbb!2sTrincomalee!5e0!3m2!1sen!2slk!4v167360084880
                                  5!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                          </div>
                      </div>
                  
                      <!--hotel details-->
                      <div class="row m-4">
                          <h2 class="position-relative d-inline mb-4 mt-4 text-dark">Trincomalee Best Hotels / Accommodations</h2>
                          <div class="col-md-12 col-lg-12 col-xl-12 p-2 text-dark">
                              <p style="text-align: justify;">On entering to hotels in Trincomalee, you’ll feel an intimate atmosphere that makes you feel being 
                                  in your own home with a tasteful 
                                  blending of the essence. Hotels in Trincomalee cater according to your preference and you’ll love being here.</p>
                          </div>
                  
                          <div class="col-md-3 col-lg-3 col-xl-3 p-2">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_cinnamon_citadel.jpg"  alt="">
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
                                                  Trinco Blu Hotel
                                                  <p style="font-size: 12px;">Sri Kudarathwatta Road</p>
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
                  
                          <div class="col-md-3 col-lg-3 col-xl-3 p-2">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_earls_regencey.jpg"  alt="">
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
                                                  Beach Hotel
                                                  <p style="font-size: 12px;">Nilaveli</p>
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
                  
                          <div class="col-md-3 col-lg-3 col-xl-3 p-2">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_mahaweli_reach.jpg"  alt="">
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
                                                  Sea Lotus Park
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
                  
                          <div class="col-md-3 col-lg-3 col-xl-3 p-2">
                              <div class="hotel-box">
                                  <article>
                                      <figure>
                                          <a href="#">
                                              <span>
                                                  <img src="../img/kandy/hotel_hilltop.jpg"  alt="">
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

                  <div class="tab">

                  </div>
                  
              </div>
          </section>
      </div>
  </div>
</div>
<!--tab menu end-->


<!--right pannel for location 1-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="toothrelic" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 In sed vel officia perferendis libero doloribus id invento
                re aliquam totam eaque quibusdam, minus autem unde atque aliquid aperiam fugit ab nihil.
            </p>
            <img src="../img/kandy/bahirawakanda_thumbnail_1.JPG" alt="">
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