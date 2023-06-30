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
            <h6 class="m-0 font-weight-bold text-primary">Edit World Wide Packages Details!</h6>

        </div>

        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "traveler");
            if (isset($_POST['world_packages_details_btn'])) {
                $packid = $_POST['world_packages_id'];
                $packtitle = $_POST['world_packages_title'];
                $tour_name = $_POST['world_packages_tour_name'];
                $tour_days = $_POST['world_packages_days'];



                echo '<h2 style="font-size: 24px; color:black;">Package No - ' . $packid . '<br>' .
                    ' Country Name - ' . $packtitle .
                    '<br> Pckage Name - ' . $tour_name .
                    '<br> Number of days - ' . $tour_days . '</h2>';


            ?>




                <div class="modal fade" id="addinclusions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Tour Packs Details
                                    <?php echo "(" . $tour_name . " - " . $packtitle . ")"; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="query2.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tour_manager">Tour Manager:</label>
                                                <input type="text" class="form-control" id="tour_manager" name="tour_manager" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="city_tour">City Tour Of:</label>
                                                <input type="text" class="form-control" id="city_tour" name="city_tour" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="num_locations">Number of Locations:</label>
                                                <input type="number" class="form-control" id="num_locations" name="num_locations" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="accommodation">Accommodation:</label>
                                                <input type="text" class="form-control" id="accommodation" name="accommodation" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="meals">Meals:</label>
                                                <input type="text" class="form-control" id="meals" name="meals" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="travel_insurance">Travel Insurance:</label>
                                                <input type="text" class="form-control" id="travel_insurance" name="travel_insurance" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="other">Other:</label>
                                                <textarea class="form-control" id="other" name="other" rows="3" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="tips">Tips:</label>
                                                <input type="text" class="form-control" id="tips" name="tips" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="package_inclusion" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="adddayplan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Tour Packs Details
                                    <?php echo "(" . $tour_name . " - " . $packtitle . ")"; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="process_day1.php" method="POST" enctype="multipart/form-data">
                                <?php for ($day = 1; $day <= $tour_days; $day++) { ?>
                                    <div class="card shadow-lg border-4 mb-4">
                                        <div class="card-header row" style="background-color: whitesmoke;">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <a class="card-link text-black" style="font-size: 20px;" data-toggle="collapse" href="#day<?php echo $day; ?>" aria-expanded="true" aria-controls="day<?php echo $day; ?>">Day <?php echo $day; ?> -
                                                            <label for="day_description">Description</label>
                                                            <input type="text" class="form-control" id="day_description<?php echo $day; ?>" name="day_description<?php echo $day; ?>" placeholder="Enter day description" required>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="flight<?php echo $day; ?>">Flight:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-car text-primary mr-2"></i></span>
                                                        </div>
                                                        <input type="number" class="form-control" id="flight<?php echo $day; ?>" name="flight<?php echo $day; ?>" placeholder="How Many" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="hotels<?php echo $day; ?>">Hotels:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-hotel text-primary mr-2"></i></span>
                                                        </div>
                                                        <input type="number" class="form-control" id="hotels<?php echo $day; ?>" name="hotels<?php echo $day; ?>" placeholder="How Many" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="transfers<?php echo $day; ?>">Transfers:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-car text-primary mr-2"></i></span>
                                                        </div>
                                                        <input type="number" class="form-control" id="transfers<?php echo $day; ?>" name="transfers<?php echo $day; ?>" placeholder="How Many" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="activities<?php echo $day; ?>">Activities:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-person-skiing text-primary mr-2"></i></span>
                                                        </div>
                                                        <input type="number" class="form-control" id="activities<?php echo $day; ?>" name="activities<?php echo $day; ?>" placeholder="How Many" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="day<?php echo $day; ?>" class="collapse ">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="package_description<?php echo $day; ?>">Package Description</label>
                                                    <textarea class="form-control" id="package_description<?php echo $day; ?>" name="package_description<?php echo $day; ?>" rows="4" placeholder="Enter package description"></textarea>
                                                </div>

                                                <hr>
                                                <div class="row  mb-2 mt-4">
                                                    <div class="col-md-4">
                                                        <label for="image1<?php echo $day; ?>">Image 1:</label>
                                                        <input type="file" class="form-control" id="image1<?php echo $day; ?>" name="image1<?php echo $day; ?>" onchange="previewImage(event, 'image-preview1<?php echo $day; ?>')">
                                                        <img id="image-preview1<?php echo $day; ?>" src="#" alt="Image Preview" style="display: none; width: 100%; height: auto;">
                                                    </div>

                                                    <div class="col-md-8">
                                                        <h5 class="pb-0" style="font-size: 24px; font-weight: bold; line-height: 1.5;">
                                                            <i class="fas fa-utensils mr-2"></i> Day Meals
                                                        </h5>

                                                        <!-- Form field for breakfast location -->
                                                        <div class="form-group">
                                                            <label for="breakfast_location<?php echo $day; ?>">Breakfast</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="breakfast_location<?php echo $day; ?>">Location:</label>
                                                                    <input type="text" class="form-control" id="breakfast_location<?php echo $day; ?>" name="breakfast_location<?php echo $day; ?>" placeholder="Enter breakfast location">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="breakfast<?php echo $day; ?>">Details:</label>
                                                                    <input type="text" class="form-control" id="breakfast<?php echo $day; ?>" name="breakfast<?php echo $day; ?>" placeholder="Enter breakfast details">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Form field for lunch location -->
                                                        <div class="form-group">
                                                            <label for="lunch_location<?php echo $day; ?>">Lunch</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="lunch_location<?php echo $day; ?>">Location:</label>
                                                                    <input type="text" class="form-control" id="lunch_location<?php echo $day; ?>" name="lunch_location<?php echo $day; ?>" placeholder="Enter lunch location">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="lunch<?php echo $day; ?>">Details:</label>
                                                                    <input type="text" class="form-control" id="lunch<?php echo $day; ?>" name="lunch<?php echo $day; ?>" placeholder="Enter lunch details">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Form field for dinner location -->
                                                        <div class="form-group">
                                                            <label for="dinner_location<?php echo $day; ?>">Dinner</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="dinner_location<?php echo $day; ?>">Location:</label>
                                                                    <input type="text" class="form-control" id="dinner_location<?php echo $day; ?>" name="dinner_location<?php echo $day; ?>" placeholder="Enter dinner location">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="dinner<?php echo $day; ?>">Details:</label>
                                                                    <input type="text" class="form-control" id="dinner<?php echo $day; ?>" name="dinner<?php echo $day; ?>" placeholder="Enter dinner details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row mt-4">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <label for="image2<?php echo $day; ?>">Image 2:</label>
                                                                <input type="file" class="form-control" id="image2<?php echo $day; ?>" name="image2<?php echo $day; ?>" onchange="previewImage(event, 'image-preview2<?php echo $day; ?>')">
                                                                <img id="image-preview2<?php echo $day; ?>" src="#" alt="Image Preview" style="display: none; width: 100%; height: auto;">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="image3<?php echo $day; ?>">Image 3:</label>
                                                                <input type="file" class="form-control" id="image3<?php echo $day; ?>" name="image3<?php echo $day; ?>" onchange="previewImage(event, 'image-preview3<?php echo $day; ?>')">
                                                                <img id="image-preview3<?php echo $day; ?>" src="#" alt="Image Preview" style="display: none; width: 100%; height: auto;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="image4<?php echo $day; ?>">Image 4:</label>
                                                                <input type="file" class="form-control" id="image4<?php echo $day; ?>" name="image4<?php echo $day; ?>" onchange="previewImage(event, 'image-preview4<?php echo $day; ?>')">
                                                                <img id="image-preview4<?php echo $day; ?>" src="#" alt="Image Preview" style="display: none; width: 100%; height: auto;">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="image5<?php echo $day; ?>">Image 5:</label>
                                                                <input type="file" class="form-control" id="image5<?php echo $day; ?>" name="image5<?php echo $day; ?>" onchange="previewImage(event, 'image-preview5<?php echo $day; ?>')">
                                                                <img id="image-preview5<?php echo $day; ?>" src="#" alt="Image Preview" style="display: none; width: 100%; height: auto;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5 class="pb-0" style="font-size: 24px; font-weight: bold; line-height: 1.5;">
                                                            <i class="fa fa-person-skiing mr-2"></i> Activities
                                                        </h5>
                                                        <div class="form-group">
                                                            <label for="activity_description<?php echo $day; ?>">Activity Description:</label>
                                                            <textarea class="form-control" id="activity_description<?php echo $day; ?>" name="activity_description<?php echo $day; ?>" rows="4" placeholder="Enter activity description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>















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


                <a id="world_wide_tour_pack"></a>


                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Activities & Inclusions in this package</h5>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addinclusions">Add Activities & Inclusions in this package</button>


                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Day plan details</h5>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddayplan">Add Day Plan</button>





                <!--preview-->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
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