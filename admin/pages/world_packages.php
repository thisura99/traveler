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
            <h6 class="m-0 font-weight-bold text-danger">Notice - You update image, previous image is remove from the store.</h6>
        </div>

        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "traveler");
            if (isset($_POST['world_card_packages_btn'])) {
                $packid = $_POST['world_card_packages_id'];
                $packtitle = $_POST['world_card_packages_title'];


                echo '<h2 style="font-size: 24px; color:black;">' . $packtitle . ' Tour Packages</h2>';


            ?>
                <div class="modal fade" id="addworldtour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Tour Packs Details
                                    <?php echo "(" . $packtitle . "/" . $packid . ")"; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <form action="query2.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="<?php echo $packid; ?>" id="packid" name="packid">
                                                <input type="hidden" class="form-control" value="<?php echo $packtitle; ?>" id="packtitle" name="packtitle">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Tour Name:</label>
                                                <input type="text" class="form-control form-control" id="tourname" name="tourname" placeholder="Enter Tour Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="destination">Place 1:</label>
                                                <input type="text" class="form-control" id="destination" name="place_1" placeholder="Enter Include Place" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="destination">Place 2:</label>
                                                <input type="text" class="form-control" id="destination" name="place_2" placeholder="Enter Include Place" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="number" class="form-control form-control" id="price" name="price" step="0.01" placeholder="Enter price" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="rating">Rating:</label>
                                                <div class="rating">
                                                    <input type="radio" id="tourstar1" name="tourrating" value="1">
                                                    <label for="tourstar1" title="1 star"></label>
                                                    <input type="radio" id="tourstar2" name="tourrating" value="2">
                                                    <label for="tourstar2" title="2 stars"></label>
                                                    <input type="radio" id="tourstar3" name="tourrating" value="3">
                                                    <label for="tourstar3" title="3 stars"></label>
                                                    <input type="radio" id="tourstar4" name="tourrating" value="4">
                                                    <label for="tourstar4" title="4 stars"></label>
                                                    <input type="radio" id="tourstar5" name="tourrating" value="5">
                                                    <label for="tourstar5" title="5 stars"></label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="tourtype">Tour Type:</label>
                                                <select class="form-control" id="tourtype" name="tourtype" required>
                                                    <option value="">Select Tour Type</option>
                                                    <option value="Holiday Package">Holiday Package</option>
                                                    <option value="Solo Package">Solo Package</option>
                                                    <option value="Honeymoon Package">Honeymoon Package</option>
                                                    <!-- Add more options for different tour packages -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="hotels">Add Count Of Features:</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="hotels">Hotels:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-hotel text-primary mr-2"></i></span>
                                                                </div>
                                                                <input type="number" class="form-control" id="hotels" name="hotels" placeholder="How Many" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="activities">Activities:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-person-skiing text-primary mr-2"></i></span>
                                                                </div>
                                                                <input type="number" class="form-control" id="activities" name="activities" placeholder="How Many" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="transfers">Transfers:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-car text-primary mr-2"></i></span>
                                                                </div>
                                                                <input type="number" class="form-control" id="transfers" name="transfers" placeholder="How Many" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="nights">Number of Nights:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-moon text-primary mr-2"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" id="nights" name="nights" placeholder="Enter number of nights" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="days">Number of Days:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-sun text-primary mr-2"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" id="days" name="days" placeholder="Enter number of days" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="url">Discover Package Info URL :</label>
                                                <h6 class="text-danger">NOTE : Please Remember what are you selected URL for future Editing.</h6>
                                                <h6 class="text-primary">Recommanded : Add one country and Update related details before add another country.</h6>
                                                <select class="form-control" id="url" name="url">
                                                    <option value="">Select Page</option>
                                                    <?php
                                                    $folderPath = '../../travel/pages/world_card/';
                                                    $files = glob($folderPath . '*.php');
                                                    foreach ($files as $file) {
                                                        if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                                                            $fileName = basename($file);
                                                            echo "<option value='$fileName'>$fileName</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <label for="image">Add Image Details :</label>
                                            <h6 class="text-primary">Tip: Can you get better output from select 350px X350px image</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-danger">(Plese select correct option first time. <br>If you need to change you option please reload.)</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Image:</label>
                                                        <input type="file" class="form-control-file" id="tourimage" name="tourimage" onchange="tourpreviewImage(event); tourdisableSelectFromUpload();">
                                                        <img id="tourimagePreview" src="" alt="No PreviewImage" class="img-thumbnail mt-3">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Select Image from Upload Folder</label>
                                                        <div>
                                                            <select name="tourselectedImage" id="tourselectFromUpload" class="form-control" onchange="tourdisableImageUpload(); tourpreviewSelectedImage(this);">
                                                                <option value="">Select Image</option>
                                                                <?php
                                                                $uploadPath = 'upload/world_tour/';
                                                                $files = glob($uploadPath . '*.*');
                                                                foreach ($files as $file) {
                                                                    $fileName = basename($file);
                                                                    echo "<option value='$fileName'>$fileName</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <a href="upload/world_tour/" target="_blank">Open Upload Folder</a>
                                                        <div id="tourselectedImagePreview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="saveslworldtourpacks" class="btn btn-primary">Save</button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>


                <script>
                    function tourpreviewImage(event) {
                        var input = event.target;
                        var reader = new FileReader();
                        reader.onload = function() {
                            var imagePreview = document.getElementById('tourimagePreview');
                            imagePreview.src = reader.result;
                        }
                        reader.readAsDataURL(input.files[0]);
                    }

                    function tourpreviewSelectedImage(selectElement) {
                        var selectedImage = selectElement.value;
                        var selectedImagePreview = document.getElementById('tourselectedImagePreview');
                        selectedImagePreview.innerHTML = "";
                        if (selectedImage) {
                            var image = new Image();
                            image.src = 'upload/world_tour/' + selectedImage;
                            image.classList.add('img-thumbnail');
                            selectedImagePreview.appendChild(image);
                        }
                        disableImageUpload();
                    }

                    function tourdisableImageUpload() {
                        var imageInput = document.getElementById('tourimage');
                        imageInput.value = "";
                        var imagePreview = document.getElementById('tourimagePreview');
                        imagePreview.src = "";
                        imageInput.disabled = true;
                    }

                    function tourdisableSelectFromUpload() {
                        var selectFromUpload = document.getElementById('tourselectFromUpload');
                        selectFromUpload.value = "";
                        var selectedImagePreview = document.getElementById('tourselectedImagePreview');
                        selectedImagePreview.innerHTML = "";
                        selectFromUpload.disabled = true;
                    }
                </script>


                <!--message show-->
                <?php
                if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }

                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }

                if (isset($_SESSION['imageexists']) && $_SESSION['imageexists'] != '') {
                    echo $_SESSION['imageexists'];
                    unset($_SESSION['imageexists']);
                }
                ?>

                <!--preview-->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
                </div>

                <a id="world_wide_tour_pack"></a>

                <div class="row">
                    <!--add new card details-->
                    <div class="col-md-6 col-lg-6 col-xl-3 col-sm-6 p-2" data-aos="zoom-in">
                        <div class="destination shadow-sm">

                            <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 80px; height:360px;">

                                <button type="button" class="btn" data-toggle="modal" data-target="#addworldtour">
                                    <div class="plus-icon">
                                        <i class="fa fa-plus fa-3x text-primary"></i>
                                    </div>
                                    <h4> Add New Package</h4>
                                    <p class="text-danger">Please add Tour Packages Packages.</p>
                                </button>
                            </div>

                        </div>
                    </div>

                    <?php
                    // Assuming you have established a database connection

                    // Fetch data from the 'world_tour' table
                    // Fetch data from the 'world_tour' table for destination = Paris
                    $query = "SELECT `id`, `place_1`, `place_2`, `price`, `rating`, `tour_name`, `tour_type`, `hotels`, `activities`, `transfers`, `nights`, `days`, `image` FROM `world_tour_packages` WHERE `pack_id` = '$packid'";
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
                                        <a class="h5 text-decoration-none" href=""><?php echo $tour_name; ?></a>
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
                                                <h6 class="m-0 mt-2 p-0"><i class="fa fa-arrow-right text-primary mr-1"> </i><?php echo $place_1; ?></h5>
                                                    <h6 class="m-0 p-0"><i class="fa fa-arrow-right text-primary mr-1"></i><?php echo $place_2; ?></a></h5>
                                            </div>
                                            <div class="two mt-4">
                                                <span class="price text-primary">$<?php echo $price; ?> <p style="font-size: 14px;">Per Person</p></i></span>
                                            </div>
                                        </div>

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
                                            <span><i class="fa fa-book text-primary mr-2"></i><?php echo $tour_type; ?></span>
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
                                            <input type="text" name="world_packages_title" value="<?php echo $packtitle; ?>">
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
            ?>
        </div>
    </div>
</div>





<?php
include('includes/script.php');
include('includes/footer.php');
?>