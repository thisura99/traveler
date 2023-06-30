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

<style>
  :root {
    /* Colors */
    --brand-color: hsl(46, 100%, 50%);
    --black: hsl(0, 0%, 0%);
    --white: hsl(0, 0%, 100%);
    /* Fonts */
    --font-title: "Montserrat", sans-serif;
    --font-text: "Lato", sans-serif;
  }

  /* RESET */

  /* Box sizing rules */
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }



  h2 {
    font-size: 2.25rem;
    font-family: var(--font-title);
    color: var(--white);
    line-height: 1.1;
  }

  p {
    font-family: var(--font-text);
    font-size: 1rem;
    line-height: 1.5;
    color: var(--white);
  }

  .flow>*+* {
    margin-top: var(--flow-space, 1em);
  }

  /* CARD COMPONENT */

  .wcard {
    display: grid;
    place-items: center;
    width: 100%;
    max-width: 21.875rem;
    height: 29.125rem;
    overflow: hidden;
    border-radius: 0.625rem;
    box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
  }

  .wcard>* {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
  }

  .card__background {
    object-fit: cover;
    max-width: 100%;
    height: 100%;
  }

  .card__content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-self: flex-end;
    height: 62%;
    padding: 12% 1.25rem 1.875rem;
    background: linear-gradient(180deg,
        hsla(0, 0%, 0%, 0) 0%,
        hsla(0, 0%, 0%, 0.3) 10%,
        hsl(0, 0%, 0%) 100%);
  }

  .card__content--container {
    --flow-space: 1.25rem;
  }

  .card__title {
    position: relative;
    width: fit-content;
    width: -moz-fit-content;
    /* Prefijo necesario para Firefox  */
  }

  .card__title::after {
    content: "";
    position: absolute;
    height: 0.3125rem;
    width: calc(100% + 1.25rem);
    bottom: calc((1.25rem - 0.5rem) * -1);
    left: -1.25rem;
    background-color: var(--brand-color);
  }

  .card__button {
    padding: 10px;
    width: fit-content;
    width: -moz-fit-content;
    /* Prefijo necesario para Firefox  */
    font-variant: small-caps;
    font-weight: bold;
    border-radius: 0.45em;
    border: none;
    background-color: var(--brand-color);
    font-family: var(--font-title);
    font-size: 1.125rem;
    color: var(--black);
  }

  .card__button:focus {
    outline: 2px solid black;
    outline-offset: -5px;
  }

  @media (any-hover: hover) and (any-pointer: fine) {
    .card__content {
      transform: translateY(62%);
      transition: transform 500ms ease-out;
      transition-delay: 500ms;
    }

    .card__title::after {
      opacity: 0;
      transform: scaleX(0);
      transition: opacity 1000ms ease-in, transform 500ms ease-out;
      transition-delay: 500ms;
      transform-origin: right;
    }

    .card__background {
      transition: transform 500ms ease-in;
    }

    .card__content--container> :not(.card__title),
    .card__button {
      opacity: 0;
      transition: transform 500ms ease-out, opacity 500ms ease-out;
    }

    .wcard:hover,
    .wcard:focus-within {
      transform: scale(1.05);
      transition: transform 500ms ease-in;
    }

    .wcard:hover .card__content,
    .wcard:focus-within .card__content {
      transform: translateY(0);
      transition: transform 500ms ease-in;
    }

    .wcard:focus-within .card__content {
      transition-duration: 0ms;
    }

    .wcard:hover .card__background,
    .wcard:focus-within .card__background {
      transform: scale(1.3);
    }

    .wcard:hover .card__content--container> :not(.card__title),
    .wcard:hover .card__button,
    .wcard:focus-within .card__content--container> :not(.card__title),
    .wcard:focus-within .card__button {
      opacity: 1;
      transition: opacity 500ms ease-in;
      transition-delay: 1000ms;
    }

    .wcard:hover .card__title::after,
    .wcard:focus-within .card__title::after {
      opacity: 1;
      transform: scaleX(1);
      transform-origin: left;
      transition: opacity 500ms ease-in, transform 500ms ease-in;
      transition-delay: 500ms;
    }
  }
</style>

<!--search bar-->
<div class="container-fluid bg-primary py-5 mb-5 hero-header-sl-thing">
  <div class="container py-5">
    <div class="row justify-content-center py-5">
      <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-3 text-white mb-3">PLANNING TRIP TO ANYWARE IN THE WORLD</h1>
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

    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
      <h6 class="text-primary text-uppercase">Packages</h6>
      <h1 class="display-6 text-uppercase mb-0">Best Packages In ITALY</h1>
    </div>

    <div class="row">
      <div class="col-md-3 col-lg-3 col-xl-3">
        fdghdfgdfg
      </div>

      <!--right side-->
      <div class="col-md-9 col-lg-9 col-xl-9">


        <!-- Packages Start -->
        <section class="ftco-section mb-0">
          <div class="container">
            <div class="row">





              <?php
              $connection = mysqli_connect("localhost", "root", "", "traveler");
              if (isset($_POST['load_packs_btn'])) {
                $packtitle = $_POST['load_packs'];

                echo '<h2 style="font-size: 24px; color:black;">' . $packtitle . ' Tour Packages</h2>';

                $query = "SELECT `id`, `place_1`, `place_2`, `price`, `rating`, `tour_name`, `tour_type`, `hotels`, `activities`, `transfers`, `nights`, `days`, `url`, `image` FROM `world_tour_packages` WHERE `pack_title` = '$packtitle' ORDER BY `id`";
                $result = mysqli_query($connection, $query);

                // Check if any rows are returned
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    // Retrieve values from each row
                    $id = $row['id'];
                    $place_1 = $row['place_1'];
                    $place_2 = $row['place_2'];
                    $price = $row['price'];
                    $rating = $row['rating'];
                    $tour_name = $row['tour_name'];
                    $tour_type = $row['tour_type'];
                    $hotels = $row['hotels'];
                    $activities = $row['activities'];
                    $transfers = $row['transfers'];
                    $nights = $row['nights'];
                    $days = $row['days'];
                    $url = $row['url'];
                    $image_name = $row['image'];
              ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-4 ftco-animate" data-aos="zoom-in">
                      <div class="destination shadow-sm">
                        <a href="<?php echo $url; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../../admin/pages/upload/world_tour/<?php echo $image_name; ?>);">
                          <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa fa-search"></span>
                          </div>
                        </a>
                        <div class="text p-3">
                          <a class="h5 text-decoration-none" href="<?php echo $url; ?>"><?php echo $tour_name; ?></a>
                          <div class="d-flex">
                            <div class="one">
                              <p class="rate pb-0 mb-0" style="margin-top: -5px;">
                                <?php
                                for ($i = 0; $i < $rating; $i++) {
                                  echo '<i class="fa fa-star"></i>';
                                }
                                if ($rating % 1 !== 0) {
                                  echo '<i class="fa fa-star-half"></i>';
                                }
                                ?>
                                <span>Rating</span>
                              </p>
                              <p class="m-0 mt-2 p-0 text-black"><i class="fa fa-arrow-right text-primary mr-1"> </i><?php echo $place_1; ?></p>
                              <p class="m-0 p-0 text-black"><i class="fa fa-arrow-right text-primary mr-1"></i><?php echo $place_2; ?></a></h6>
                            </div>
                            <div class="two">
                              <h3 class="mt-2 mb-0 b-0 bold text-primary" style="font-size: 24px;">$<?php echo $price; ?></h3>
                              <p style="font-size: 14px; color: black;">Per Person</p>
                            </div>
                          </div>
                          <p class="days mt-2">
                            <span>
                              <div class="d-flex justify-content-between mb-3 mt-4">
                                <small class="m-0"><i class="fa fa-hotel text-primary mr-2"></i><?php echo $hotels; ?> Hotels</small>
                                <small class="m-0"><i class="fa fa-person-skiing text-primary mr-2"></i><?php echo $activities; ?> Activities</small>
                                <small class="m-0"><i class="fa fa-car text-primary mr-2"></i><?php echo $transfers; ?> Transfer</small>
                                <small class="m-0"><i class="fa fa-moon text-primary mr-2"></i><?php echo $nights; ?> Night</small>
                                <small class="m-0"><i class="fa fa-sun text-primary mr-2"></i><?php echo $days; ?> Days</small>
                              </div>
                            </span>
                          </p>
                          <hr>
                          <p class="bottom-area d-flex">
                            <small class="text-black"><i class="fa fa-book text-primary mr-2"></i><?php echo $tour_type; ?> Tour</small>
                            <button class="btn btn-primary px-2 ml-auto" style="font-size: 14px;"><a href="<?php echo $url; ?>" class="text-white">Details</a></button>
                          </p>
                        </div>
                      </div>
                    </div>
              <?php
                  }
                } else {
                  // Handle case when no rows are found
                  echo "No records found.";
                }
              }
              // Close the database connection
              mysqli_close($connection);
              ?>







            </div>
          </div>
        </section>
        <!-- Packages End -->







      </div>



    </div>
  </div>

</div>
<!-- tour packages end -->



<!-- Registration Start -->
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="mb-4">
          <h4 class="text-primary text-uppercase" style="letter-spacing: 5px; font-weight: 800;">Mega Offer</h4>
          <h1 class="text-white"><span class="text-primary" style="font-weight: 800;">30% OFF</span> For Honeymoon</h1>
        </div>
        <p class="text-white" style="font-size: 25px;">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
          ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
          dolor</p>
        <ul class="list-inline text-white m-0" style="font-size: 20px;">
          <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
          <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
          <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
        </ul>
      </div>
      <div class="col-lg-5">
        <div class="card border-0">
          <div class="card-header bg-primary text-center p-4">
            <h1 class="text-white m-0">Sign Up Now</h1>
          </div>
          <div class="card-body rounded-bottom bg-white p-5">
            <form>
              <div class="form-group">
                <input type="text" class="form-control p-3" placeholder="Your name" required="required" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control p-3" placeholder="Your email" required="required" />
              </div>
              <div class="form-group">
                <select class="custom-select px-4" style="height: 47px;">
                  <option selected>Select a destination</option>
                  <option value="1">destination 1</option>
                  <option value="2">destination 1</option>
                  <option value="3">destination 1</option>
                </select>
              </div>
              <div>
                <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Registration End -->



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
          <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
            <i class="fa fa-globe fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Choose A Destination</h5>
          <hr class="w-25 mx-auto bg-primary mt-0">


        </div>
      </div>

      <div class="col-lg-4 col-sm-6 text-center pt-4" data-aos="flip-left">
        <div class="position-relative  pt-5 pb-4 px-4" style="border:2px solid #378C3F;">
          <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
            <i class="fa fa-dollar-sign fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Pay Your Payment</h5>
          <hr class="w-25 mx-auto bg-primary mt-0">


        </div>
      </div>

      <div class="col-lg-4 col-sm-6 text-center pt-4" data-aos="flip-left">
        <div class="position-relative pt-5 pb-4 px-4" style="border:2px solid #378C3F;">
          <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
            <i class="fa fa-plane fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Enjoy You Tour</h5>
          <hr class="w-25 mx-auto bg-primary mt-0">


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
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
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