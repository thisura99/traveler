<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<link rel="stylesheet" href="../../travel/css/fontawesome-free-6.4.0-web/css/all.min.css">
<link rel="stylesheet" href="../../travel/css/index.css">








<!----------------------------------------------------------------------------->

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






<!--add world card popup-->
<div class="modal fade" id="addworldcard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add World Card Details</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="query2.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control" id="title" name="title" placeholder="Enter Country Name" required>
              </div>
              <div class="form-group">
                <label for="location">Description:</label>
                <input type="text" class="form-control form-control" id="description" name="description" placeholder="Enter Card Description For Simple" required>
              </div>

              <div class="form-group">
                <label for="url">URL:</label>
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
            </div>
            <div class="col-md-6">
              <h6 class="text-primary">Tip: Can you get better output from select 350px X350px image</h6>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="text-danger">OR (If you need to change you option please reload.)</h6>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image" onchange="previewImage(event); disableSelectFromUpload();">
                    <img id="imagePreview" src="" alt="No PreviewImage" class="img-thumbnail mt-3">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Image from Upload Folder</label>
                    <div>
                      <select name="selectedImage" id="selectFromUpload" class="form-control" onchange="disableImageUpload(); previewSelectedImage(this);">
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
                    <div id="selectedImagePreview"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="saveworldcard" class="btn btn-primary">Save</button>
        </div>
      </form>
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
    var imageInput = document.getElementById('image');
    imageInput.value = "";
    var imagePreview = document.getElementById('imagePreview');
    imagePreview.src = "";
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
          <div class="page-content col-md-2 col-sm-6" data-aos="zoom-in">
            <!-- Add New Country button -->
            <div class="item-container position-relative" style="height: 350px;">
              <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 60px">
                <button type="button" class="btn" data-toggle="modal" data-target="#addworldcard">
                  <div class="plus-icon">
                    <i class="fa fa-plus fa-3x text-primary"></i>
                  </div>
                  <h4> Add New Package</h4>
                  <p class="text-danger">Please add all Package card details in this area!</p>
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
                <main class="page-content col-md-2 col-sm-6 mb-4">
                  <div class="wtcard" style="background-image: url(../../admin/pages/upload/world_tour/<?php echo $image_name; ?>);background-size: cover; background-position: center;">
                    <div class="content">
                      <h2 class="title"><?php echo $title; ?></h2>
                      <p class="copy"><?php echo $description; ?></p>
                      <button class="wtbtn"><a href="<?php echo $url; ?>" style="text-decoration: none; color:white; font-weight: bold;">Find Packages</a></button>
                    </div>
                  </div>
                  <div class="actions row col-md-12 mt-2">
                    <div class="col-md-6 mb-1">
                      <form action="world_card_edit.php" method="POST" style="display: inline;">
                        <input type="hidden" name="edit_world_card" value="<?php echo $id; ?>">
                        <button type="submit" name="edit_world_card_btn" class="btn btn-success w-100 edit-button" >Edit</button>
                      </form>
                    </div>
                    <div class="col-md-6 mb-1">
                      <form action="query2.php" method="POST" style="display: inline;">
                        <input type="hidden" name="world_card_delete_id" value="<?php echo $id; ?>">
                        <button type="submit" name="world_card_delete_btn" class="btn btn-danger w-100">Del</button>
                      </form>
                    </div>
                    <div class="col-md-12">
                      <form action="world_packages.php" method="POST" style="display: inline;">
                        <input type="text" name="world_card_packages_id" value="country_<?php echo $id; ?>">
                        <input type="text" name="world_card_packages_title" value="<?php echo $title; ?>">
                        <button type="submit" name="world_card_packages_btn" class="btn btn-primary w-100">Add Packages</button>
                      </form>
                    </div>
                  </div>
                  <hr>
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





<link rel="stylesheet" href="../../travel/css/worldcard.css">






<!-- /.container-fluid -->

<?php
include('includes/script.php');
include('includes/footer.php');
?>