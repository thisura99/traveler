<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<style>
    .form-control {
        border-radius: 10px;
    }

    .form-img-preview {
        max-width: 300px;
        max-height: 300px;
        display: none;
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
            <h6 class="m-0 font-weight-bold text-primary">Edit Best Place Details!</h6>
            <h6 class="m-0 font-weight-bold text-danger">Notice - You update image, previous image is remove from the store.</h6>
        </div>

        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "traveler");
            if (isset($_POST['edit_world_tour_package_card_btn'])) {
                $id = $_POST['edit_world_tour_package_card'];


                $query = "SELECT * FROM world_tour_packages WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>

                    <form action="query2.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name='eid' value="<?php echo $row['id'] ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Tour Name:</label>
                                        <input type="text" class="form-control form-control" id="tourname" name="etourname" value="<?php echo $row['tour_name']; ?>" placeholder="Enter Tour Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="destination">Place 1:</label>
                                        <input type="text" class="form-control" id="destination" value="<?php echo $row['place_1']; ?>" name="eplace_1" placeholder="Enter Include Place" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="destination">Place 2:</label>
                                        <input type="text" class="form-control" id="destination" value="<?php echo $row['place_2']; ?>" name="eplace_2" placeholder="Enter Include Place" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control form-control" id="price" name="eprice" value="<?php echo $row['price']; ?>" step="0.01" placeholder="Enter price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="text" name="erating" value="<?php echo $row['rating']; ?>" class="form-control" placeholder="Enter Rating">
                                    </div>
                                    <div class="form-group">
                                        <label for="tourtype">Tour Type:</label>
                                        <select class="form-control" id="tourtype" name="etourtype" required>
                                            <option value="<?php echo $row['tour_type']; ?>"><?php echo $row['tour_type']; ?></option>
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
                                                        <input type="number" class="form-control" id="hotels" name="ehotels" value="<?php echo $row['hotels']; ?>" placeholder="How Many" required>
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
                                                        <input type="number" class="form-control" id="activities" name="eactivities" value="<?php echo $row['activities']; ?>" placeholder="How Many" required>
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
                                                        <input type="number" class="form-control" id="transfers" name="etransfers" value="<?php echo $row['transfers']; ?>" placeholder="How Many" required>
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
                                                    <input type="number" class="form-control" id="nights" name="enights" value="<?php echo $row['nights']; ?>" placeholder="Enter number of nights" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="days">Number of Days:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-sun text-primary mr-2"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" id="days" name="edays" value="<?php echo $row['days']; ?>" placeholder="Enter number of days" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Discover Package Info URL :</label>
                                        <h6 class="text-danger">NOTE : Please Remember what are you selected URL for future Editing.</h6>
                                        <h6 class="text-primary">Recommanded : Add one country and Update related details before add another country.</h6>
                                        <select class="form-control" id="url" name="eurl">
                                            <option value="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></option>
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
                                    <h6 class="text-primary">Select Your Image : <br>
                                        Tip: Can you get better output from select 350px X350px image</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current Image</label><br>
                                                <input type="hidden" name="previous_image" value="<?php echo $row['image']; ?>" class="form-control" placeholder="Enter Distance">
                                                <img src="upload/world_tour/<?php echo $row['image']; ?>" class="img-thumbnail">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Upload New Image Option -->
                                            <div class="form-group">
                                                <label>Upload New Image</label>
                                                <img id="imagePreview" src="#" alt="No PreviewImage" class="img-thumbnail">
                                                <input type="file" name="eimage" id="eimage" class="form-control-file" onchange="previewImage(event)" onclick="disableSelectFromUpload()">
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="text-danger">OR (If you need to change you option please reload.)</h6>
                                    <!-- Select from Upload Folder Option -->


                                    <div class="form-group">
                                        <label>Select Image from Upload Folder</label>
                                        <div>
                                            <select name="eimage" id="selectFromUpload" class="form-control" onchange="disableImageUpload(); previewSelectedImage(this);">
                                                <option value="">Select Image</option>
                                                <?php
                                                $uploadPath = 'upload/world_tour/';
                                                $files = glob($uploadPath . '*.*');
                                                foreach ($files as $file) {
                                                    $fileName = basename($file);
                                                    $selected = ($fileName == $row['image']) ? 'selected' : '';
                                                    echo "<option value='$fileName' $selected>$fileName</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php if (!empty($row['image'])) { ?>
                                            <p>Current Image: <?php echo $row['image']; ?></p>
                                        <?php } ?>
                                        <a href="upload/world_tour/" target="_blank">Open Upload Folder</a>
                                        <div id="selectedImagePreview"></div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="world_packages_all_filter.php" class="btn btn-danger">Cancel</a>
                            <button type="submit" name="update_world_tour_package_btn" class="btn btn-primary">Update</button>
                        </div>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.src = reader.result;
        }
        reader.readAsDataURL(input.files[0]);
    }

    function previewSelectedImage(selectElement) {
        var selectedImage = selectElement.value;
        var selectedImagePreview = document.getElementById('selectedImagePreview');
        selectedImagePreview.innerHTML = "";
        if (selectedImage) {
            var image = new Image();
            image.src = 'upload/world_tour/' + selectedImage;
            image.classList.add('img-thumbnail');
            selectedImagePreview.appendChild(image);
        }
        disableImageUpload();
    }

    function disableImageUpload() {
        var imageInput = document.getElementById('eimage');
        imageInput.value = "";
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.src = "#";
        imageInput.disabled = true;
    }

    function disableSelectFromUpload() {
        var selectFromUpload = document.getElementById('selectFromUpload');
        selectFromUpload.value = "";
        var selectedImagePreview = document.getElementById('selectedImagePreview');
        selectedImagePreview.innerHTML = "";
        selectFromUpload.disabled = true;
    }
</script>


<?php
include('includes/script.php');
include('includes/footer.php');
?>