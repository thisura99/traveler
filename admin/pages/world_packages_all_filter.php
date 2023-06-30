<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<link rel="stylesheet" href="../../travel/css/fontawesome-free-6.4.0-web/css/all.min.css">
<link rel="stylesheet" href="../../travel/css/index.css">

<style>
    .form-control {
        border-radius: 10px;
        font-size: 16px;
    }

    .rating {
        display: flex;
        align-items: center;
    }

    .rating input[type="radio"] {
        display: none;
    }

    .rating label {
        cursor: pointer;
        width: 30px;
        height: 30px;
        background: none;
        margin-right: 5px;
        transition: color 0.3s ease-in-out;
    }

    .rating label:before {
        content: "\2605";
        color: #ccc;
        font-size: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .rating input[type="radio"]:checked~label {
        color: #ffc107;
    }

    .rating label:hover,
    .rating label:hover~label {
        color: #ffc107;
    }

    .rating input[type="radio"]:checked+label:before {
        content: "\2605";
        color: #ffc107;
    }

    .form-img-preview {
        max-width: 300px;
        max-height: 300px;
        display: none;
    }

    .modal-dialog {
        max-width: 1200px;
    }

    .modal-content {
        padding: 20px;
    }

    .img-thumbnail {
        width: 220px;
        height: 220px;
    }
</style>


<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit World Wide Packages Details Details!</h6>
            <h6 class="m-0 font-weight-bold text-danger">Notice - Select Relate Package Country And Press The Filter Button.</h6>
        </div>

        <div class="card-body">

            <?php
            // Your database connection code here
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "traveler";

            // Create a connection
            $connection = mysqli_connect($host, $username, $password, $database);

            // Check if the connection was successful
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Execute the query to fetch distinct pack_title values from the world_tour_packages table
            $query = "SELECT DISTINCT `pack_title` FROM `world_tour_packages`";
            $result = mysqli_query($connection, $query);

            // Check if the query was executed successfully
            if ($result) {
            ?>

                <form id="myForm" method="POST">
                    <label for="tourtitle">Tour Title:</label>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" id="tourtitle" name="tourtitle" required>
                                    <option value="">Select Tour Title</option>
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <option value="<?= htmlspecialchars($row['pack_title'], ENT_QUOTES) ?>">
                                            <?= htmlspecialchars($row['pack_title'], ENT_QUOTES) ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </form>

            <?php
            } else {
                // Handle the case when the query fails
                echo "Query failed: " . mysqli_error($connection);
            }

            // Check if a selection has been made
            if (isset($_POST['tourtitle'])) {
                $countryName = htmlspecialchars($_POST['tourtitle'], ENT_QUOTES);

                // Display the selected country name
                echo "<h2 style='font-size: 24px; margin-bottom:20px;'>Selected Country: " . $countryName . "</h2>";

            ?>

                <div class="row">
                    <?php
                    // Assuming you have established a database connection

                    // Fetch data from the 'world_tour' table
                    // Fetch data from the 'world_tour' table for destination = Paris
                    $query = "SELECT `id`, `place_1`, `place_2`, `price`, `rating`, `tour_name`, `tour_type`, `hotels`, `activities`, `transfers`, `nights`, `days`, `image` FROM `world_tour_packages` WHERE `pack_title` = '$countryName'";
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
                            $image_name = $row['image'];
                    ?>
                            <div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 mb-4 ftco-animate" data-aos="zoom-in">
                                <div class="destination position-relative shadow-sm">
                                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(upload/world_tour/<?php echo $image_name; ?>);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <a class="h5 text-decoration-none" href="">
                                            <?php echo $tour_name; ?>
                                        </a>
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
                                                <h6 class="m-0 mt-2 p-0"><i class="fa fa-arrow-right text-primary mr-1"> </i>
                                                    <?php echo $place_1; ?>
                                                    </h5>
                                                    <h6 class="m-0 p-0"><i class="fa fa-arrow-right text-primary mr-1"></i>
                                                        <?php echo $place_2; ?></a></h5>
                                            </div>
                                            <div class="two mt-4">
                                                <span class="price text-primary">$
                                                    <?php echo $price; ?>
                                                    <p style="font-size: 14px;">Per Person</p></i>
                                                </span>
                                            </div>
                                        </div>

                                        <p class="days">
                                            <span>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <small class="m-0"><i class="fa fa-hotel text-primary mr-2"></i>
                                                        <?php echo $hotels; ?> Hotels
                                                    </small>
                                                    <small class="m-0"><i class="fa fa-person-skiing text-primary mr-2"></i>
                                                        <?php echo $activities; ?> Activities
                                                    </small>
                                                    <small class="m-0"><i class="fa fa-car text-primary mr-2"></i>
                                                        <?php echo $transfers; ?> Transfer
                                                    </small>
                                                    <small class="m-0"><i class="fa fa-moon text-primary mr-2"></i>
                                                        <?php echo $nights; ?> Night
                                                    </small>
                                                    <small class="m-0"><i class="fa fa-sun text-primary mr-2"></i>
                                                        <?php echo $days; ?> Days
                                                    </small>
                                                </div>
                                            </span>
                                        </p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="fa fa-book text-primary mr-2"></i>
                                                <?php echo $tour_type; ?>
                                            </span>
                                            <span class="ml-auto"><a href="#">Discover</a></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="actions row mt-2 pl-4 pr-4">
                                    <div class="col-md-6">
                                        <form action="world_tour_package_edit.php" method="POST" style="display: inline;">
                                            <input type="hidden" name="edit_world_tour_package_card" value="<?php echo $id; ?>">
                                            <button type="submit" name="edit_world_tour_package_card_btn" class="btn btn-success w-100">Edit</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="query2.php" method="POST" style="display: inline;">
                                            <input type="hidden" name="delete_tour_package_card" value="<?php echo $id; ?>">
                                            <button type="submit" name="delete_tour_package_card_btn" class="btn btn-danger w-100">Delete</button>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="world_packages_details.php" method="POST" style="display: inline;">
                                            <input type="text" name="world_packages_id" value="pack_<?php echo $id; ?>">
                                            <input type="text" name="world_packages_title" value="<?php echo $countryName; ?>">
                                            <input type="text" name="world_packages_tour_name" value="<?php echo $tour_name; ?>">
                                            <input type="text" name="world_packages_days" value="<?php echo $days; ?>">
                                            <button type="submit" name="world_packages_details_btn" class="btn btn-primary w-100">Add Update Packages Details</button>
                                        </form>
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

                </div>

            <?php

            }

            // Close the database connection
            mysqli_close($connection);
            ?>

            <script>
                // Get the select element
                var selectElement = document.getElementById('tourtitle');

                // Add event listener to the form submit event
                document.getElementById('myForm').addEventListener('submit', function(event) {
                    // Prevent the default form submission behavior
                    event.preventDefault();

                    // Submit the form
                    this.submit();
                });
            </script>







        </div>
    </div>
</div>































<?php
include('includes/script.php');
include('includes/footer.php');
?>