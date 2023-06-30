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



<!--top carosoul start-->
<div class="container-fluid pb-4" style="z-index: -1001;">

  <div id="video-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#video-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#video-carousel" data-slide-to="1"></li>
      <li data-target="#video-carousel" data-slide-to="2"></li>
      <li data-target="#video-carousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 720px; ">
        <video class="video-fluid" autoplay noloop muted>
          <source src="video/3 Years 30 Countries _ Travel Film.mp4" type="video/mp4">
          </source>
        </video>

        <div class="carousel-caption text-warning">
          <h1 class="display-3 text-white ">DISCOVER </h1>
          <p class="fs-4 text-white mb-4 d-none d-md-block">Ready for a holiday? Here’s a list of curated adventures
            picked just for you!</p>
          <h5 class="text-white d-none d-md-block">Slide Lable</h5>
          <p class="mb-3 d-none d-md-block">Label Content</p>
        </div>
      </div>

      <div class="carousel-item" style="height: 720px;">
        <video class="video-fluid" autoplay noloop muted>
          <source src="video/Sri Lanka - An Island Paradise.mp4" type="video/mp4">
          </source>
        </video>

        <div class="carousel-caption text-warning">
          <h1 class="display-3 text-white ">DISCOVER YOUR DREAM PLACE</h1>
          <p class="fs-4 text-white mb-4 d-none d-md-block">Ready for a holiday? Here’s a list of curated adventures
            picked just for you!</p>
          <h5 class="text-white d-none d-md-block">Slide Lable</h5>
          <p class="mb-3 d-none d-md-block">Label Content</p>
        </div>
      </div>

      <div class="carousel-item" style="height: 720px;">
        <video class="video-fluid" autoplay noloop muted>
          <source src="video/b.mp4" type="video/mp4">
          </source>
        </video>

        <div class="carousel-caption text-warning">
          <h1 class="display-3 text-white ">DISCOVER YOUR DREAM PLACE</h1>
          <p class="fs-4 text-white mb-4 d-none d-md-block">Ready for a holiday? Here’s a list of curated adventures
            picked just for you!</p>
          <h5 class="text-white d-none d-md-block">Slide Lable</h5>
          <p class="mb-3 d-none d-md-block">Label Content</p>
        </div>
      </div>

      <div class="carousel-item" style="height: 720px;">
        <video class="video-fluid" autoplay noloop muted>
          <source src="video/a.mp4" type="video/mp4">
          </source>
        </video>

        <div class="carousel-caption text-warning">
          <h1 class="display-3 text-white ">DISCOVER YOUR DREAM PLACE</h1>
          <p class="fs-4 text-white mb-4 d-none d-md-block">Ready for a holiday? Here’s a list of curated adventures
            picked just for you!</p>
          <h5 class="text-white d-none d-md-block">Slide Lable</h5>
          <p class="mb-3 d-none d-md-block">Label Content</p>
        </div>
      </div>

    </div>

    <a href="#video-carousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" arial-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#video-carousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" arial-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
  </div>

</div>
<!--top carosule end-->


<!-------about--->
<div class="container-xxl py-5">
  <div class="container">

    <?php
    $query = "SELECT `sub_title`, `title`, `para_1`, `para_2`, `point_1`, `point_2`, `point_3`, `point_4`, `image` FROM home_about";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) > 0) {
      while ($row = mysqli_fetch_assoc($query_run)) {
        $sub_title = $row['sub_title'];
        $title = $row['title'];
        $para_1 = $row['para_1'];
        $para_2 = $row['para_2'];
        $point_1 = $row['point_1'];
        $point_2 = $row['point_2'];
        $point_3 = $row['point_3'];
        $point_4 = $row['point_4'];
        $image = $row['image'];
    ?>


        <div class="row g-5">
          <div class="col-lg-6" style="min-height: 400px;" data-aos="fade-right">
            <div class="position-relative h-100">
              <img src="../admin/pages/upload/home/<?php echo $image; ?>" alt="" style="object-fit: cover;" class="img-fluid position-absolute w-100 h-100">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="border-start border-5 border-primary ps-4 mb-4" style="max-width: 600px;">
              <h6 class="section-title text-start text-primary pe-3"><?php echo $sub_title; ?></h6>
              <h1 class="mb-4">Welcome to <span class="text-primary">Sri Lanka</span></h1>
            </div>
            <p class="mb-4" style="text-align: justify;"><?php echo $para_1; ?></p>
            <p class="mb-4" style="text-align: justify;"><?php echo $para_2; ?></p>

            <div class="row gy-2 gx-4 mb-4">
              <div class="col-sm-6">
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $point_1; ?></p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $point_2; ?></p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $point_3; ?></p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $point_4; ?></p>
              </div>
            </div>

            <div class="btn btn-primary py-3 px-5 mt-2">Read More</div>
          </div>
        </div>


    <?php
      }
    } else {
      echo "No records found.";
    }
    ?>

  </div>
</div>
<!--about end-->


<!----service---->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center">
      <h6 class="section-title text-center text-primary px-3">Services</h6>
      <h1 class="mb-5">Our Services</h1>
    </div>

    <div class="row g-4">
      <?php
      // Assuming you have established a database connection

      // Fetch data from the 'about_service_items' table
      $query = "SELECT `id`, `icon`, `title`, `description` FROM `about_service_items`";
      $result = mysqli_query($connection, $query);

      // Check if any rows are returned
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // Retrieve values from each row
          $id = $row['id'];
          $icon = $row['icon'];
          $title = $row['title'];
          $description = $row['description'];
      ?>
          <div class="col-lg-3 col-sm-6" data-aos="fade-right">
            <div class="service-item rounded pt-3" style="height: 300px;">
              <div class="p-4">
                <i class="fa fa-3x <?php echo $icon; ?> text-primary mb-4"></i>
                <h5><?php echo $title; ?></h5>
                <p style="text-align: justify;"><?php echo $description; ?></p>
              </div>
            </div>

          </div>



      <?php
        }
      } else {
        // Handle case when no rows are found
        echo "No records found.";
      }

      // Close the database connection
      //mysqli_close($connection);
      ?>
    </div>


  </div>
</div>
<!--services end-->


<!--search bar-->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5">
    <div class="row justify-content-center py-5">
      <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-3 text-white mb-3">DISCOVER YOUR DREAM PLACE</h1>
        <p class="fs-4 text-white mb-4">Ready for a holiday? Here’s a list of curated adventures picked just for you!
        </p>
        <div class="position-relative w-50 mx-auto">
          <!-----inp[ut box------>
          <input type="text" class="form-control bg-white border-0 rounded-pill w-100 py-3 ps-4 ps-5" placeholder="Eg : London" style="font-size: 18px;">
          <!-------button---->
          <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 6px; font-size: 18px;">Search</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!--tab data in sri lankan places start-->
<div class="container mt-4 mb-4 descard_srilanka">
  <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
    <h6 class="text-primary text-uppercase">Best Place</h6>
    <h1 class="display-5 text-uppercase mb-0">In Sri Lanka</h1>
  </div>

  <div class="row g-0 mt-4 mb-4">
    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
      <li class="nav-item m-2" role="presentation">
        <button class="nav-link bg-white text-dark active p-2" style="font-size: 18px; border: 0.5px solid #000; width: auto!important; height:auto!important;" id="pills-place-tab" data-bs-toggle="pill" data-bs-target="#pills-place" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
          Best Places To Visit In Sri Lanka
        </button>
      </li>
      <li class="nav-item m-2" role="presentation">
        <button class="nav-link bg-white text-dark  p-2" style="font-size: 18px; border: 0.5px solid #000; width: auto!important; height:auto!important;" data-bs-toggle="pill" data-bs-target="#pills-thing" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
          Top Think Do In Sri Lanka
        </button>
      </li>
      <li class="nav-item m-2" role="presentation">
        <button class="nav-link bg-white text-dark p-2" style="font-size: 18px; border: 0.5px solid #000; width: auto!important; height:auto!important;" data-bs-toggle="pill" data-bs-target="#pills-tour" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
          Best Holiday Tours
        </button>
      </li>
      <li class="nav-item m-2" role="presentation">
        <button class="nav-link bg-white text-dark p-2" style="font-size: 18px; border: 0.5px solid #000; width: auto!important; height:auto!important;" id="pills-festival-tab" data-bs-toggle="pill" data-bs-target="#pills-festival" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
          Festival In Sri Lanka
        </button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-place" role="tabpanel" aria-labelledby="pills-place-tab">
        <div class="row">

          <?php
          // Assuming you have established a database connection

          // Fetch data from the 'best_places' table
          $query = "SELECT `id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description` FROM `best_places`";
          $result = mysqli_query($connection, $query);

          // Check if any rows are returned
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Retrieve values from each row
              $id = $row['id'];
              $title = $row['title'];
              $location = $row['location'];
              $distance = $row['distance'];
              $image_name = $row['image'];
              $rating = $row['rating'];
              $price = $row['price'];
              $description = $row['description'];
          ?>

              <!--preview card details-->
              <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in" id="top-place">
                <div class="item-container position-relative">
                  <div class="image-container">
                    <img src="../admin/pages/upload/home/<?php echo $image_name; ?>" alt="">
                  </div>

                  <div class="body-container">
                    <div class="overplay"></div>

                    <div class="event-info">
                      <p class="title"><?php echo $title; ?></p>
                      <div class="separator"></div>
                      <p class="info"><?php echo $location; ?></p>
                      <p class="price"><?php echo $distance; ?>Km From Colombo</p>

                      <div class="additiona-info">
                        <p class="info">
                          <?php
                          for ($i = 0; $i < $rating; $i++) {
                            echo '<i class="fa fa-3x fa-star"></i>';
                          }
                          if ($rating % 1 !== 0) {
                            echo '<i class="fa fa-3x fa-star-half"></i>';
                          }
                          ?>
                          Rating
                        </p>
                        <p class="info">
                          <i class="fa fa-money-check-dollar"></i>
                          <?php echo $price; ?>$ per Person
                        </p>
                        <p class="info description">
                          <?php echo $description; ?><span>more...</span>
                        </p>
                      </div>
                    </div>
                    <button class="action">Explore</button>
                  </div>
                </div>




              </div>



          <?php
            }
          } else {
            // Handle case when no rows are found
            echo "No records found.";
          }

          // Close the database connection
          ?>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out" id="top-place">
            <div class="position-relative" style="top:40%;left:20%;">
              <a href="pages/sri_lanka_places.html">
                <div class="btn rounded-pill p-0 m-0 pl-3" style="font-size: 30px; border-radius: 50%; background-color: #378C3F!important;">
                  Find More<i class="fa fa-arrow-right p-3"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-thing" role="tabpanel" aria-labelledby="pills-thing-tab">
        <div class="row">
          <?php
          // Assuming you have established a database connection

          // Fetch data from the 'top_thing' table
          $query = "SELECT `id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description` FROM `top_thing`";
          $result = mysqli_query($connection, $query);

          // Check if any rows are returned
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Retrieve values from each row
              $id = $row['id'];
              $title = $row['title'];
              $location = $row['location'];
              $distance = $row['distance'];
              $image_name = $row['image'];
              $rating = $row['rating'];
              $price = $row['price'];
              $description = $row['description'];
          ?>
              <!-- HTML block to display each row of data -->
              <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in" id="top-place">
                <div class="item-container position-relative">
                  <div class="image-container">
                    <img src="../admin/pages/upload/home/<?php echo $image_name; ?>" alt="">
                  </div>

                  <div class="body-container">
                    <div class="overplay"></div>

                    <div class="event-info">
                      <p class="title"><?php echo $title; ?></p>
                      <div class="separator"></div>
                      <p class="info"><?php echo $location; ?></p>
                      <p class="price"><?php echo $distance; ?>Km From Colombo</p>

                      <div class="additiona-info">
                        <p class="info">
                          <?php
                          for ($i = 0; $i < $rating; $i++) {
                            echo '<i class="fa fa-3x fa-star"></i>';
                          }
                          if ($rating % 1 !== 0) {
                            echo '<i class="fa fa-3x fa-star-half"></i>';
                          }
                          ?>
                          Rating
                        </p>
                        <p class="info">
                          <i class="fa fa-money-check-dollar"></i>
                          <?php echo $price; ?>$ per Person
                        </p>
                        <p class="info description">
                          <?php echo $description; ?><span>more...</span>
                        </p>
                      </div>
                    </div>
                    <button class="action">Explore</button>
                  </div>
                </div>


              </div>
          <?php


            }
          } else {
            // Handle case when no rows are found
            echo "No records found.";
          }

          // Close the database connection
          ?>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out" id="top-place">
            <div class="position-relative" style="top:40%;left:20%;">
              <a href="pages/sri_lanka_places.html">
                <div class="btn rounded-pill p-0 m-0 pl-3" style="font-size: 30px; border-radius: 50%; background-color: #378C3F!important;">
                  Find More<i class="fa fa-arrow-right p-3"></i>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="tab-pane fade" id="pills-tour" role="tabpanel" aria-labelledby="pills-tour-tab">
        <div class="row">
          <?php
          // Assuming you have established a database connection

          // Fetch data from the 'top_thing' table
          $query = "SELECT `id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description` FROM `best_holiday`";
          $result = mysqli_query($connection, $query);

          // Check if any rows are returned
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Retrieve values from each row
              $id = $row['id'];
              $title = $row['title'];
              $location = $row['location'];
              $distance = $row['distance'];
              $image_name = $row['image'];
              $rating = $row['rating'];
              $price = $row['price'];
              $description = $row['description'];
          ?>
              <!-- HTML block to display each row of data -->
              <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in" id="top-place">
                <div class="item-container position-relative">
                  <div class="image-container">
                    <img src="../admin/pages/upload/home/<?php echo $image_name; ?>" alt="">
                  </div>

                  <div class="body-container">
                    <div class="overplay"></div>

                    <div class="event-info">
                      <p class="title"><?php echo $title; ?></p>
                      <div class="separator"></div>
                      <p class="info"><?php echo $location; ?></p>
                      <p class="price"><?php echo $distance; ?>Km From Colombo</p>

                      <div class="additiona-info">
                        <p class="info">
                          <?php
                          for ($i = 0; $i < $rating; $i++) {
                            echo '<i class="fa fa-3x fa-star"></i>';
                          }
                          if ($rating % 1 !== 0) {
                            echo '<i class="fa fa-3x fa-star-half"></i>';
                          }
                          ?>
                          Rating
                        </p>
                        <p class="info">
                          <i class="fa fa-money-check-dollar"></i>
                          <?php echo $price; ?>$ per Person
                        </p>
                        <p class="info description">
                          <?php echo $description; ?><span>more...</span>
                        </p>
                      </div>
                    </div>
                    <button class="action">Explore</button>
                  </div>
                </div>


              </div>
          <?php


            }
          } else {
            // Handle case when no rows are found
            echo "No records found.";
          }

          // Close the database connection
          ?>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out" id="top-place">
            <div class="position-relative" style="top:40%;left:20%;">
              <a href="pages/sri_lanka_places.html">
                <div class="btn rounded-pill p-0 m-0 pl-3" style="font-size: 30px; border-radius: 50%; background-color: #378C3F!important;">
                  Find More<i class="fa fa-arrow-right p-3"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-festival" role="tabpanel" aria-labelledby="pills-festival-tab">
        <div class="row">
          <?php
          // Assuming you have established a database connection

          // Fetch data from the 'festival' table
          $query = "SELECT `id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description` FROM `festival_sl`";
          $result = mysqli_query($connection, $query);

          // Check if any rows are returned
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Retrieve values from each row
              $id = $row['id'];
              $title = $row['title'];
              $location = $row['location'];
              $distance = $row['distance'];
              $image_name = $row['image'];
              $rating = $row['rating'];
              $price = $row['price'];
              $description = $row['description'];
          ?>
              <!-- HTML block to display each row of data -->
              <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in" id="top-place">
                <div class="item-container position-relative">
                  <div class="image-container">
                    <img src="../admin/pages/upload/home/<?php echo $image_name; ?>" alt="">
                  </div>

                  <div class="body-container">
                    <div class="overplay"></div>

                    <div class="event-info">
                      <p class="title"><?php echo $title; ?></p>
                      <div class="separator"></div>
                      <p class="info"><?php echo $location; ?></p>
                      <p class="price"><?php echo $distance; ?>Km From Colombo</p>

                      <div class="additiona-info">
                        <p class="info">
                          <?php
                          for ($i = 0; $i < $rating; $i++) {
                            echo '<i class="fa fa-3x fa-star"></i>';
                          }
                          if ($rating % 1 !== 0) {
                            echo '<i class="fa fa-3x fa-star-half"></i>';
                          }
                          ?>
                          Rating
                        </p>
                        <p class="info">
                          <i class="fa fa-money-check-dollar"></i>
                          <?php echo $price; ?>$ per Person
                        </p>
                        <p class="info description">
                          <?php echo $description; ?><span>more...</span>
                        </p>
                      </div>
                    </div>
                    <button class="action">Explore</button>
                  </div>
                </div>


              </div>
          <?php


            }
          } else {
            // Handle case when no rows are found
            echo "No records found.";
          }

          // Close the database connection
          ?>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-out" id="top-place">
            <div class="position-relative" style="top:40%;left:20%;">
              <a href="pages/sri_lanka_places.html">
                <div class="btn rounded-pill p-0 m-0 pl-3" style="font-size: 30px; border-radius: 50%; background-color: #378C3F!important;">
                  Find More<i class="fa fa-arrow-right p-3"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!--tab data in sri lankan places end-->


<!-- Packages Start -->
<section class="ftco-section mt-4 mb-0 py-5">
  <div class="container">
    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
      <h6 class="text-primary text-uppercase">The Best Package</h6>
      <h1 class="display-5 text-uppercase mb-0">In World Wide</h1>
    </div>
    <div class="row">
      <?php
      // Assuming you have established a database connection

      // Fetch data from the 'world_tour' table
      $query = "SELECT `destination`, `price`, `rating`, `tour_name`, `hotels`, `activities`, `transfers`, `nights`, `days`, `image` FROM `world_tour`";
      $result = mysqli_query($connection, $query);

      // Check if any rows are returned
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // Retrieve values from each row
          $destination = $row['destination'];
          $price = $row['price'];
          $rating = $row['rating'];
          $tour_name = $row['tour_name'];
          $hotels = $row['hotels'];
          $activities = $row['activities'];
          $transfers = $row['transfers'];
          $nights = $row['nights'];
          $days = $row['days'];
          $image_name = $row['image'];
      ?>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4 ftco-animate" data-aos="zoom-in">
            <div class="destination shadow-sm">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../admin/pages/upload/home/<?php echo $image_name; ?>);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="fa fa-search"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h5><a href="#"><?php echo $destination; ?></a></h5>
                    <p class="rate" style="margin-top: -15px" ;>
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
                  </div>
                  <div class="two">
                    <span class="price text-black">$<?php echo $price; ?> <p style="font-size: 14px;">Per Person</p></i></span>
                  </div>
                </div>
                <a class="h5 text-decoration-none" href=""><?php echo $tour_name; ?></a>
                <p class="days">
                  <span>
                    <div class="d-flex justify-content-between mb-3">
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
                  <span><i class="fa fa-book text-primary mr-2"></i>Holiday Package</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
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
      ?>

      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in" id="top-place">
        <div class="position-relative" style="top:40%;left:20%;">
          <a href="">
            <div class="btn rounded-pill p-0 m-0" style="font-size: 30px; border-radius: 50%; background-color: #378C3F!important;">
              <i class="fa fa-arrow-right p-3"></i>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Packages End -->


<!-- Products Start -->
<section id="equipment" class="mt-4 mb-0 py-5 des-card">
  <div class="container">
    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
      <h6 class="text-primary text-uppercase">Products</h6>
      <h1 class="display-5 text-uppercase mb-0">Products For Your Travel</h1>
    </div>

    <div class="collection-list row gx-0 gy-4">

      <?php
      // Assuming you have an active database connection



      // Query to retrieve data from the database
      $query = "SELECT `id`, `product_name`, `product_price`, `image` FROM `products`";
      $result = mysqli_query($connection, $query);

      // Check if the query executed successfully
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $productName = $row['product_name'];
          $productPrice = $row['product_price'];
          $image = $row['image'];
      ?>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="productcontainer">
              <div class="card">
                <div class="imgBx">
                  <img src="../admin/pages/upload/home/<?php echo $image; ?>" alt="nike-air-shoe">
                </div>

                <div class="contentBx">
                  <h2><?php echo $productName; ?></h2>

                  <div class="size">
                    <h3>Price :</h3>
                    <span>$ <?php echo $productPrice; ?></span>
                  </div>
                  <div class="btn-action d-flex justify-content-center flex-column" style="width: 50px; margin-top: -50px; margin-left: 10px; position: absolute;">
                    <a class="icon btn btn-primary py-2 px-3" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="icon btn btn-primary py-2 px-3" href=""><i class="fa fa-eye"></i></a>
                    <a class="icon btn btn-primary py-2 px-3" href=""><i class="fa fa-heart"></i></a>
                  </div>

                  <a href="#">Buy Now</a>

                </div>
              </div>
            </div>



          </div>
      <?php
        }
      } else {
        // Handle case when no rows are found
        echo "No records found.";
      }

      // Close the database connection
      //mysqli_close($connection);
      ?>
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" id="top-place" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="position-relative" style="top:40%;left:20%;">
          <a href="">
            <div class="btn rounded-pill p-0 m-0" style="font-size: 30px; border-radius: 50%; background-color: #378C3F!important;">
              <i class="fa fa-arrow-right p-3"></i>
            </div>
          </a>
        </div>
      </div>


    </div>


  </div>
</section>
<!-- Products End -->


<!---Process Start---->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center">
      <h6 class="section-title text-center text-primary px-3">Process</h6>
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
<!---Process end---->


<!----------destionation pic start------->
<div class="container-xxl py-5 destination">
  <div class="container">
    <div class="text-center">
      <h6 class="section-title text-center text-primary px-3">Destination</h6>
      <h1 class="mb-5">Popular Destination</h1>
    </div>
    <div class="row g-3" data-aos="zoom-in">
      <div class="col-lg-7 col-md-6">
        <div class="row g-3">

          <div class="col-lg-12 col-md-12">
            <a href="#" class="d-block position-relative overflow-hidden">
              <img src="img/homepage/9Arch.jpg" alt="" class="img-fluid">
              <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
              <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">9 ARCH</div>
            </a>
          </div>

          <div class="col-lg-6 col-md-12">
            <a href="#" class="d-block position-relative overflow-hidden">
              <img src="img/homepage/Sigiriya.png" alt="" class="img-fluid">
              <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">40% OFF</div>
              <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">SIGIRIYA</div>
            </a>
          </div>

          <div class="col-lg-6 col-md-12">
            <a href="#" class="d-block position-relative overflow-hidden">
              <img src="img/homepage/GalleFort.jpg" alt="" class="img-fluid">
              <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">40% OFF</div>
              <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">GALLEFORT
              </div>
            </a>
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-md-6" style="min-height: 350px;">
        <a href="#" class="d-block position-relative h-100 overflow-hidden">
          <img src="img/homepage/Ambuluwawa.jpg" alt="" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover;">
          <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
          <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">AMBULUWAWWA</div>
        </a>
      </div>

    </div>

  </div>
</div>
<!----------destionation pic end------->


<!--testamonial start-->
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
                  <div class="col-lg-2 col-md-3 cc-reference-header"><img src="img/homepage/bird_watching_card.jpg" alt="Image" />
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
                  <div class="col-lg-2 col-md-3 cc-reference-header"><img src="img/homepage/surffing _card.jpg" alt="Image" />
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
                  <div class="col-lg-2 col-md-3 cc-reference-header"><img src="img/homepage/surffing _card.jpg" alt="Image" />
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
<!--testamonial end-->


<!--cuntact us start-->
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('img/homepage/map.png')">
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
<!--cuntact us end-->





<?php
include('includes/uiscript.php');
include('includes/uifooter.php');
?>