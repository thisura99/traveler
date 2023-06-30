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
              <h1 class="display-3 text-white mb-3">About Us</h1>
              <p class="fs-4 text-white mb-4">Our Best Services For You</p>
              
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

<section class="ftco-section mt-5">
  <div class="container mt-5">
    <div class="row d-md-flex bg-white">
      <div class="col-md-6 ftco-animate img about-image" style="background-image: url(../img/worldtour/hikeing.jpg);">
      </div>
      <div class="col-md-6 ftco-animate p-md-5">
        <div class="row about">
          <div class="col-md-12 nav-link-wrap mb-5">
            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
            </div>
          </div>
          <div class="col-md-12 d-flex align-items-center">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                <div>
                  <h2 class="mb-4">Offering Reliable Hosting</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                <div>
                  <h2 class="mb-4">Exceptional Web Solutions</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                <div>
                  <h2 class="mb-4">Help Our Customer</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
      <h1>Our Travel Guides</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="../img/worldtour/hikeing.jpg" alt="">
            <div class="team-social">
              <a class="btn  btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-facebook"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-instagram"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="text-center py-4">
            <h5 class="text-truncate">Guide Name</h5>
            <p class="m-0">Designation</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="../img/worldtour/hikeing.jpg" alt="">
            <div class="team-social">
              <a class="btn  btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-facebook"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-instagram"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="text-center py-4">
            <h5 class="text-truncate">Guide Name</h5>
            <p class="m-0">Designation</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="../img/worldtour/hikeing.jpg" alt="">
            <div class="team-social">
              <a class="btn  btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-facebook"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-instagram"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="text-center py-4">
            <h5 class="text-truncate">Guide Name</h5>
            <p class="m-0">Designation</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="../img/worldtour/hikeing.jpg" alt="">
            <div class="team-social">
              <a class="btn  btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-facebook"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-instagram"></i></a>
              <a class="btn  btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="text-center py-4">
            <h5 class="text-truncate">Guide Name</h5>
            <p class="m-0">Designation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


    <!--  Blog Starts Here  -->
    <div class="blog">

      <div class="container">
          <div class="row session-title">
              <h2>Our Blog</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="row blog-row">
              <div class="col-md-6 col-sm-12">
                  <div class="blog-singe  row">
                      <div class="col-sm-5 blog-img-tab">
                          <img src="../img/worldtour/hikeing.jpg" alt="">
                      </div>
                      <div class="col-sm-7 blog-content-tab">
                          <h2>Life Time Traveling</h2>
                          <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                          <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                          <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="../img/worldtour/hikeing.jpg" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Life Time Traveling</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="blog-singe no-margin row">
                  <div class="col-sm-5 blog-img-tab">
                      <img src="../img/worldtour/hikeing.jpg" alt="">
                  </div>
                  <div class="col-sm-7 blog-content-tab">
                      <h2>Life Time Traveling</h2>
                      <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                      <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                      <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="blog-singe no-margin row">
                <div class="col-sm-5 blog-img-tab">
                    <img src="../img/worldtour/hikeing.jpg" alt="">
                </div>
                <div class="col-sm-7 blog-content-tab">
                    <h2>Life Time Traveling</h2>
                    <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                    <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                    <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

          </div>
      </div>
  </div>


<!--question-->
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-start pt-4 mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading">FAQS</span>
        <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
      </div>
    </div>  
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div id="accordion">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">How Booking and fin best tour places <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menuone" class="collapse show">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">How Booking and fin best tour places <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menutwo" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3"> How Booking and fin best tour places <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu3" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4">How Booking and fin best tour places <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu4" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5">How Booking and fin best tour places<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu5" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6">How Booking and fin best tour places <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu6" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>









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