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
            if (isset($_POST['edit_best_holiday_btn'])) {
                $id = $_POST['edit_best_holiday'];                

                $query = "SELECT * FROM best_holiday WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>
                    <form action="query.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name='eid' value="<?php echo $row['id'] ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="etitle" value="<?php echo $row['title']; ?>" class="form-control" placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="elocation" value="<?php echo $row['location']; ?>" class="form-control" placeholder="Enter Location">
                                    </div>
                                    <div class="form-group">
                                        <label for="distance">Distance From Colombo:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Km</span>
                                            </div>
                                            <input type="text" name="edistance" value="<?php echo $row['distance']; ?>" class="form-control" placeholder="Enter Distance">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="text" name="erating" value="<?php echo $row['rating']; ?>" class="form-control" placeholder="Enter Rating">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" name="eprice" value="<?php echo $row['price']; ?>" class="form-control" placeholder="Enter Price">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="edescription" class="form-control" placeholder="Enter Description"><?php echo $row['description']; ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="text-primary">Tip: Can you get better output from select 350px X350px image</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current Image</label><br>
                                                <input type="hidden" name="previous_image" value="<?php echo $row['image']; ?>" class="form-control" placeholder="Enter Distance">
                                                <img src="upload/home/<?php echo $row['image']; ?>" class="img-thumbnail">
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
                                                $uploadPath = 'upload/home/';
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
                                        <a href="upload/home/" target="_blank">Open Upload Folder</a>
                                        <div id="selectedImagePreview"></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="home_about.php#best_holiday_table" class="btn btn-danger">Cancel</a>
                            <button type="submit" name="update_best_holiday_btn" class="btn btn-primary">Update</button>
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
      image.src = 'upload/home/' + selectedImage;
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