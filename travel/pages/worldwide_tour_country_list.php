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

<link rel="stylesheet" href="../css/worldcard.css">



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

    <div class="title text-center ">
      <h6 class="section-title text-center text-primary px-3">Packages</h6>
    </div>
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">In World Wide</h6>
      <h1>Explore Holiday Packages And Find Your Dream Places</h1>
    </div>
    <div class="row col-md-12">
      <!--cards/left side-->
      <div class="col-md-2 col-lg-2 col-xl-2 p-2 d-none d-lg-block">
        <div class="row">
          <h4>Package Fiter</h4>
          <div class="row">
            <div class="sidebar-wrap bg-light ftco-animate">
              <h5 class="heading mb-4 pt-2">Find City</h5>
              <form action="#">
                <div class="fields">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Destination, City">
                  </div>
                  <div class="form-group">
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control" placeholder="Keyword search">
                        <option value="">Select Location</option>
                        <option value="">San Francisco USA</option>
                        <option value="">Berlin Germany</option>
                        <option value="">Lodon United Kingdom</option>
                        <option value="">Paris Italy</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                  </div>
                  <div class="form-group">
                    <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                  </div>
                  <div class="form-group">
                    <div class="range-slider">
                      <span>
                        <input type="number" value="25000" min="0" max="120000" style="width: 70px;" /> -
                        <input type="number" value="50000" min="0" max="120000" style="width: 70px;" />
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Search" class="btn btn-primary w-100 h-auto py-3 px-5">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">

            <div class="sidebar-wrap bg-light ftco-animate">
              <h5 class="heading mb-4 pt-2">Star Rating</h5>
              <form method="post" class="star-rating">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">
                    <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">
                    <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">
                    <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">
                    <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">
                    <p class="rate"><span><i class="fa fa-star text-black"></i></span></p>
                  </label>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      <!--right side-->
      <div class="col-md-10 col-lg-10 col-xl-10">
        <div class="row col-md-12">

          <?php
          // Assuming you have established a database connection
          // Fetch data from the 'world_card_list' table    
          $connection = mysqli_connect("localhost", "root", "", "traveler");
          $query = "SELECT `id`, `title`, `description`, `url`, `image` FROM `world_card_list`";
          $result = mysqli_query($connection, $query);

          // Check if any rows are returned
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Retrieve values from each row
              $id = $row['id'];
              $title = $row['title'];
              $description = $row['description'];
              $url = $row['url'];
              $image_name = $row['image'];
          ?>

              <!-- Preview card details -->
              <main class="page-content col-md-3 col-sm-6 mb-4">
              <form action="world_card/country_01_packs.php" method="POST">
                <div class="wtcard" style="background-image: url(../../admin/pages/upload/world_tour/<?php echo $image_name; ?>);background-size: cover; background-position: center;">
                  <div class="content">
                    <h2 class="title"><?php echo $title; ?></h2>
                    <p class="copy"><?php echo $description; ?></p>
                    
                      <div class="form-group">
                        <input type="text" class="form-control" name="load_packs" id="destination" value="<?php echo $title; ?>" placeholder="Enter Include Place" required>
                        <button type="submit" name="load_packs_btn" class="wtbtn">
                          Find Packages
                        </button>
                      </div>
                    
                  </div>
                </div>
                </form>
              </main>

          <?php
            }
          } else {
            // Handle case when no rows are found
            echo "No records found.";
          }

          // Close the database connection
          mysqli_close($connection);
          ?>



        </div>
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





<!-- World Card and Data Table -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">World Cards List</h4>
    </div>

    <!-- Preview -->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
    </div>

    <a id="world_card_area"></a>

    <div class="row">
      <!-- Add new card details -->
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3" data-aos="zoom-in">
            <!-- Add New Country button -->
            <div class="item-container position-relative" style="height: 350px;">
              <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 60px">
                <button type="button" class="btn" data-toggle="modal" data-target="#addworldcard">
                  <div class="plus-icon">
                    <i class="fa fa-plus fa-3x text-primary"></i>
                  </div>
                  <h4> Add New Country</h4>
                  <p class="text-danger">Please add all country card in this area!</p>
                </button>
              </div>
            </div>
          </div>

          <?php
          // Assuming you have established a database connection
          // Fetch data from the 'world_card_list' table      
          $query = "SELECT `id`, `title`, `description`, `url`, `image` FROM `world_card_list`";
          $result = mysqli_query($connection, $query);

          // Check if any rows are returned
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Retrieve values from each row
              $id = $row['id'];
              $title = $row['title'];
              $description = $row['description'];
              $url = $row['url'];
              $image_name = $row['image'];
          ?>

              <!-- Preview card details -->
              <main class="page-content col-md-3 mb-4">
                <div class="wtcard" style="background-image: url(../../admin/pages/upload/world_tour/<?php echo $image_name; ?>);">
                  <div class="content">
                    <h2 class="title"><?php echo $title; ?></h2>
                    <p class="copy"><?php echo $description; ?></p>
                    <button class="wtbtn"><a href="<?php echo $url; ?>" style="text-decoration: none; color:white; font-weight: bold;">Find Packages</a></button>
                  </div>
                </div>
                <div class="actions row mt-2 pl-4 pr-4">
                  <div class="col-md-6">
                    <form action="world_card.php" method="POST" style="display: inline;">
                      <input type="hidden" name="edit_world_card" value="<?php echo $id; ?>">
                      <button type="submit" class="btn btn-success w-100 edit-button" data-popup="popupContainer-<?php echo $id; ?>">Edit</button>
                    </form>
                  </div>
                  <div class="col-md-6">
                    <form action="query2.php" method="POST" style="display: inline;">
                      <input type="hidden" name="world_card_delete_id" value="<?php echo $id; ?>">
                      <button type="submit" name="world_card_delete_btn" class="btn btn-danger w-100">Delete</button>
                    </form>
                  </div>
                </div>
              </main>

          <?php
            }
          } else {
            // Handle case when no rows are found
            echo "No records found.";
          }

          // Close the database connection
          mysqli_close($connection);
          ?>

        </div>
      </div>
    </div>
  </div>
</div>