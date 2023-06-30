<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<link rel="stylesheet" href="../../travel/css/fontawesome-free-6.4.0-web/css/all.min.css">
<link rel="stylesheet" href="../../travel/css/index.css" >


<!--home page about details-->
<!--add about details popup-->

<?php
if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  echo $_SESSION['status'];
  unset($_SESSION['status']);
}
?>


<!--about details add section-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
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
        <!--preview-->


        <div class="row">
          <div class="col-md-12">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">About Details
                <div class="text-danger">(Notice - Add Only One set "About Us Detail")
                </div>
                <form action="home_about_edit.php" method="post">
                  <input type="hidden" name="aboutedit_id" value="<?php echo $row['sub_title']; ?>">
                  <button type="submit" name="aboutedit_btn" class="btn btn-success">Update About Us Details</button>
                </form>
              </h6>
            </div>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Preview is Here! Notice - Some Blue Areas Background Are Change To Green</h6>
            </div>
            <div class="container-xxl py-5">
              <div class="container">
                <div class="row g-5">
                  <div class="col-lg-6" style="min-height: 400px;" data-aos="fade-right">
                    <div class="position-relative h-100">
                      <img src="upload/home/<?php echo $image; ?>" alt="" style="object-fit: cover;" class="img-fluid position-absolute w-100 h-100">
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
              </div>
            </div>
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




<!----------------------------------------------------------------------------->


<!--home page service details-->
<!--add service details popup-->
<div class="modal fade" id="addservicedetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="query.php" method="POST">

        <div class="modal-body">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-b7JEC3jQsPt9jMdeZTFy5mO8/u8+0muifcArRfvozDJ99yUVBSo6eW5vdWefKzobv+Ozrs61TLjEv68FmDhlJw==" crossorigin="anonymous" />

          <div class="form-group">
            <label for="iconInput">Icon Class</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i id="iconPreview" class="fas fa-globe"></i></span>
              </div>
              <input type="text" name="icon" class="form-control" id="iconInput" placeholder="Enter Icon Class" />
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="iconInput">
                  <input type="text" class="form-control dropdown-search" placeholder="Search">
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-container">
                    <div class="icon-list">
                      <?php
                      $icons = [
                        'fa-globe',
                        'fa-envelope',
                        'fa-heart',
                        'fa-star',
                        'fa-user',
                        'fa-users',
                        'fa-cog',
                        'fa-camera',
                        'fa-briefcase',
                        'fa-calendar',
                        'fa-book',
                        'fa-music',
                        'fa-film',
                        'fa-gamepad',
                        'fa-headphones',
                        'fa-map',
                        'fa-money',
                        'fa-shopping-cart',
                        'fa-plane',
                        'fa-train',
                        'fa-bus',
                        'fa-car',
                        'fa-bicycle',
                        'fa-ship',
                        'fa-umbrella',
                        'fa-coffee',
                        'fa-cutlery',
                        'fa-glass',
                        'fa-magic',
                        'fa-sun',
                        'fa-moon',
                        'fa-cloud',
                        'fa-tree',
                        'fa-flower',
                        'fa-heartbeat',
                        'fa-smile',
                        'fa-thumbs-up',
                        'fa-thumbs-down',
                        'fa-check',
                        'fa-times',
                        'fa-exclamation',
                        'fa-question',
                        'fa-info',
                        'fa-search',
                        'fa-lock',
                        'fa-unlock',
                        'fa-arrow-up',
                        'fa-arrow-down',
                        'fa-arrow-left',
                        'fa-arrow-right',
                        // Add more icons here
                      ];
                      foreach ($icons as $icon) {
                        echo '<a class="dropdown-item" href="#" data-icon="' . $icon . '"><i class="fas ' . $icon . '"></i> ' . $icon . '</a>';
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label> Title </label>
            <input type="text" name="title" id="title" class="form-control" required placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label>Description:</label>
            <textarea name="description" id="description" class="form-control" required placeholder="Enter Description"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="saveservicedetailsbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script>
  const iconInput = document.getElementById('iconInput');
  const iconPreview = document.getElementById('iconPreview');
  const dropdownSearch = document.querySelector('.dropdown-search');
  const iconList = document.querySelector('.icon-list');

  const handleIconSelection = (event) => {
    event.preventDefault();
    const selectedIcon = event.target.getAttribute('data-icon');
    iconInput.value = selectedIcon;
    iconPreview.className = `fas ${selectedIcon}`;
  };

  const filterIcons = () => {
    const searchTerm = dropdownSearch.value.toLowerCase();
    const icons = iconList.querySelectorAll('.dropdown-item');
    icons.forEach((icon) => {
      const iconText = icon.textContent.toLowerCase();
      if (iconText.includes(searchTerm)) {
        icon.style.display = 'block';
      } else {
        icon.style.display = 'none';
      }
    });
  };

  dropdownSearch.addEventListener('input', filterIcons);
  iconList.addEventListener('click', handleIconSelection);
</script>


<?php
if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  echo $_SESSION['status'];
  unset($_SESSION['status']);
}
?>
<!--add button and data table-->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <!--add service button-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Service Details
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addservicedetail">
          Add Details
        </button>
      </h6>
    </div>


    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here! Notice - Some Blue Areas Background Are Change To Green</h6>
      <h6 class="m-0 font-weight-bold text-danger">Remember dont use single quotation (') for description area.</h6>
    </div>

    <a id="serivce_card"></a>

    <div class="row">
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
            <div class="service-item rounded pt-3" style="height: 340px;">
              <div class="p-4">
                <i class="fa fa-3x <?php echo $icon; ?> text-primary mb-4"></i>
                <h5><?php echo $title; ?></h5>
                <p style="text-align: justify;"><?php echo $description; ?></p>
              </div>
            </div>
            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_service_edit.php" method="POST">
                  <input type="hidden" name="edit_servicedetailid" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="edit_servicedetailbtn" class="btn btn-success">EDIT</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST">
                  <input type="hidden" name="servicedelete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="servicedelete_btn" class="btn btn-danger">DELETE</button>
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
      //mysqli_close($connection);
      ?>
    </div>

  </div>
</div>


















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












<!--home page best place details-->
<!--add best place details popup-->
<div class="modal fade" id="addbestplacesl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Best Place Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control" id="title" name="title" placeholder="Enter title" required>
              </div>
              <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control form-control" id="location" name="location" placeholder="Enter location" required>
              </div>
              <div class="form-group">
                <label for="distance">Distance From Colombo:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Km</span>
                  </div>
                  <input type="text" class="form-control form-control" id="distance" name="distance" placeholder="Enter distance" required>
                </div>
              </div>
              <div class="form-group">
                <label for="rating">Rating:</label>
                <div class="rating">
                  <input type="radio" id="star1" name="rating" value="1">
                  <label for="star1" title="1 star"></label>
                  <input type="radio" id="star2" name="rating" value="2">
                  <label for="star2" title="2 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3">
                  <label for="star3" title="3 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4">
                  <label for="star4" title="4 stars"></label>
                  <input type="radio" id="star5" name="rating" value="5">
                  <label for="star5" title="5 stars"></label>
                </div>
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
                        $uploadPath = 'upload/home/';
                        $files = glob($uploadPath . '*.*');
                        foreach ($files as $file) {
                          $fileName = basename($file);
                          echo "<option value='$fileName'>$fileName</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <a href="upload/home/" target="_blank">Open Upload Folder</a>
                    <div id="selectedImagePreview"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control form-control-lg" id="description" name="description" placeholder="Enter description" rows="4" required></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="savebestplacebtn" class="btn btn-primary">Save</button>
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
      image.src = 'upload/home/' + selectedImage;
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


<!--best place in sri lnaka button and data table-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Best Place In Sri Lanka</h4>
    </div>
    <!--
      <div class="card-body">
        

        <div class="table-responsive">
          <?php
          $connection = mysqli_connect("localhost", "root", "", "traveler");
          $query = "SELECT * FROM best_places";
          $query_run = mysqli_query($connection, $query);
          ?>

          <!-- Data loaded table

          
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Location</th>
                <th>Distance</th>
                <th>image</th>
                <th>Rating</th>
                <th>Price</th>
                <th>Description</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
              ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['distance']; ?></td>
                    <td>
                      <img src="upload/<?php echo $row['image']; ?>" width="100px" height="100px" alt="Image">
                    </td>
                    <td><?php echo $row['rating']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                      <form action="home_best_place_edit.php" method="POST">
                        <input type="hidden" name="edit_best_place" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="edit_best_place_btn" class="btn btn-success">EDIT</button>
                      </form>
                    </td>
                    <td>
                      <form action="query.php" method="POST">
                        <input type="hidden" name="best_place_delete_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="best_place_delete_btn" class="btn btn-danger">DELETE</button>
                      </form>
                    </td>
                  </tr>
              <?php
                }
              } else {
                echo "<tr><td colspan='9'>No Record Found!</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

            -->

    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
    </div>

    <a id="best_place_table"></a>
    <div class="row">
      <!--add new card details-->
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
        <div class="item-container position-relative">

          <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 160px" ;>

            <button type="button" class="btn" data-toggle="modal" data-target="#addbestplacesl">
              <div class="plus-icon">
                <i class="fa fa-plus fa-3x text-primary"></i>
              </div>
              <h4> Add New Place</h4>
              <p class="text-danger">Please add Maximum 3 card. Its is balance your home page area..</p>
            </button>
          </div>

        </div>
      </div>





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
                <img src="upload/home/<?php echo $image_name; ?>" alt="">
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


            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_best_place_edit.php" method="POST" style="display: inline;">
                  <input type="hidden" name="edit_best_place" value="<?php echo $id; ?>">
                  <button type="submit" name="edit_best_place_btn" class="btn btn-success w-100">Edit</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST" style="display: inline;">
                  <input type="hidden" name="best_place_delete_id" value="<?php echo $id; ?>">
                  <button type="submit" name="best_place_delete_btn" class="btn btn-danger w-100">Delete</button>
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

  </div>
</div>











<!------------------------------------------------------------------->















<!--home page top thing details-->
<!--add best top thing popup-->
<div class="modal fade" id="addtopthing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Top Thing Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control" id="title" name="ttitle" placeholder="Enter title" required>
              </div>
              <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control form-control" id="location" name="tlocation" placeholder="Enter location" required>
              </div>
              <div class="form-group">
                <label for="distance">Distance From Colombo:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Km</span>
                  </div>
                  <input type="text" class="form-control form-control" id="distance" name="tdistance" placeholder="Enter distance" required>
                </div>
              </div>
              <div class="form-group">
                <label for="rating">Rating:</label>
                <div class="rating">
                  <input type="radio" id="tstar1" name="trating" value="1">
                  <label for="tstar1" title="1 star"></label>
                  <input type="radio" id="tstar2" name="trating" value="2">
                  <label for="tstar2" title="2 stars"></label>
                  <input type="radio" id="tstar3" name="trating" value="3">
                  <label for="tstar3" title="3 stars"></label>
                  <input type="radio" id="tstar4" name="trating" value="4">
                  <label for="tstar4" title="4 stars"></label>
                  <input type="radio" id="tstar5" name="trating" value="5">
                  <label for="tstar5" title="5 stars"></label>
                </div>
              </div>
              <div class="form-group">
                <label for="price">Price:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" class="form-control form-control" id="price" name="tprice" step="0.01" placeholder="Enter price" required>
                </div>
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
                    <input type="file" class="form-control-file" id="timage" name="timage" onchange="tpreviewImage(event); tdisableSelectFromUpload();">
                    <img id="timagePreview" src="" alt="No PreviewImage" class="img-thumbnail mt-3">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Image from Upload Folder</label>
                    <div>
                      <select name="tselectedImage" id="tselectFromUpload" class="form-control" onchange="tdisableImageUpload(); tpreviewSelectedImage(this);">
                        <option value="">Select Image</option>
                        <?php
                        $uploadPath = 'upload/home/';
                        $files = glob($uploadPath . '*.*');
                        foreach ($files as $file) {
                          $fileName = basename($file);
                          echo "<option value='$fileName'>$fileName</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <a href="upload/home/" target="_blank">Open Upload Folder</a>
                    <div id="tselectedImagePreview"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control form-control-lg" id="description" name="tdescription" placeholder="Enter description" rows="4" required></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="savetopthing" class="btn btn-primary">Save</button>
        </div>
      </form>



    </div>
  </div>
</div>


<script>
  function tpreviewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
      var imagePreview = document.getElementById('timagePreview');
      imagePreview.src = reader.result;
    }
    reader.readAsDataURL(input.files[0]);
  }

  function tpreviewSelectedImage(selectElement) {
    var selectedImage = selectElement.value;
    var selectedImagePreview = document.getElementById('tselectedImagePreview');
    selectedImagePreview.innerHTML = "";
    if (selectedImage) {
      var image = new Image();
      image.src = 'upload/home/' + selectedImage;
      image.classList.add('img-thumbnail');
      selectedImagePreview.appendChild(image);
    }
    disableImageUpload();
  }

  function tdisableImageUpload() {
    var imageInput = document.getElementById('timage');
    imageInput.value = "";
    var imagePreview = document.getElementById('timagePreview');
    imagePreview.src = "";
    imageInput.disabled = true;
  }

  function tdisableSelectFromUpload() {
    var selectFromUpload = document.getElementById('tselectFromUpload');
    selectFromUpload.value = "";
    var selectedImagePreview = document.getElementById('tselectedImagePreview');
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


<!--top thing in sri lnaka button and data table-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Top Thing In Sri Lanka</h4>
    </div>

    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
    </div>


    <a id="top_thing_table"></a>


    <div class="row">
      <!--add new card details-->
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
        <div class="item-container position-relative">

          <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 160px">

            <button type="button" class="btn" data-toggle="modal" data-target="#addtopthing">
              <div class="plus-icon">
                <i class="fa fa-plus fa-3x text-primary"></i>
              </div>
              <h4> Add New Place</h4>
              <p class="text-danger">Please add Maximum 3 card. Its is balance your home page area..</p>
            </button>
          </div>

        </div>
      </div>





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
                <img src="upload/home/<?php echo $image_name; ?>" alt="">
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

            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_top_thing_edit.php" method="POST" style="display: inline;">
                  <input type="hidden" name="edit_top_think" value="<?php echo $id; ?>">
                  <button type="submit" name="edit_top_think_btn" class="btn btn-success w-100">Edit</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST" style="display: inline;">
                  <input type="hidden" name="delete_top_think" value="<?php echo $id; ?>">
                  <button type="submit" name="delete_top_think_btn" class="btn btn-danger w-100">Delete</button>
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

  </div>
</div>











<!-------------------------------------------------------------------------------------->











<!--home page holiday tour details-->
<!--add best holiday tour popup-->
<div class="modal fade" id="addholidaytour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Holiday Tour Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control" id="title" name="htitle" placeholder="Enter title" required>
              </div>
              <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control form-control" id="location" name="hlocation" placeholder="Enter location" required>
              </div>
              <div class="form-group">
                <label for="distance">Distance From Colombo:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Km</span>
                  </div>
                  <input type="text" class="form-control form-control" id="distance" name="hdistance" placeholder="Enter distance" required>
                </div>
              </div>
              <div class="form-group">
                <label for="rating">Rating:</label>
                <div class="rating">
                  <input type="radio" id="hstar1" name="hrating" value="1">
                  <label for="hstar1" title="1 star"></label>
                  <input type="radio" id="hstar2" name="hrating" value="2">
                  <label for="hstar2" title="2 stars"></label>
                  <input type="radio" id="hstar3" name="hrating" value="3">
                  <label for="hstar3" title="3 stars"></label>
                  <input type="radio" id="hstar4" name="hrating" value="4">
                  <label for="hstar4" title="4 stars"></label>
                  <input type="radio" id="hstar5" name="hrating" value="5">
                  <label for="hstar5" title="5 stars"></label>
                </div>
              </div>
              <div class="form-group">
                <label for="price">Price:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" class="form-control form-control" id="price" name="hprice" step="0.01" placeholder="Enter price" required>
                </div>
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
                    <input type="file" class="form-control-file" id="himage" name="himage" onchange="hpreviewImage(event); hdisableSelectFromUpload();">
                    <img id="himagePreview" src="" alt="No PreviewImage" class="img-thumbnail mt-3">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Image from Upload Folder</label>
                    <div>
                      <select name="hselectedImage" id="hselectFromUpload" class="form-control" onchange="hdisableImageUpload(); hpreviewSelectedImage(this);">
                        <option value="">Select Image</option>
                        <?php
                        $uploadPath = 'upload/home/';
                        $files = glob($uploadPath . '*.*');
                        foreach ($files as $file) {
                          $fileName = basename($file);
                          echo "<option value='$fileName'>$fileName</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <a href="upload/home/" target="_blank">Open Upload Folder</a>
                    <div id="hselectedImagePreview"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control form-control-lg" id="description" name="hdescription" placeholder="Enter description" rows="4" required></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="savebestholiday" class="btn btn-primary">Save</button>
        </div>
      </form>



    </div>
  </div>
</div>


<script>
  function hpreviewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
      var imagePreview = document.getElementById('himagePreview');
      imagePreview.src = reader.result;
    }
    reader.readAsDataURL(input.files[0]);
  }

  function hpreviewSelectedImage(selectElement) {
    var selectedImage = selectElement.value;
    var selectedImagePreview = document.getElementById('hselectedImagePreview');
    selectedImagePreview.innerHTML = "";
    if (selectedImage) {
      var image = new Image();
      image.src = 'upload/home/' + selectedImage;
      image.classList.add('img-thumbnail');
      selectedImagePreview.appendChild(image);
    }
    disableImageUpload();
  }

  function hdisableImageUpload() {
    var imageInput = document.getElementById('himage');
    imageInput.value = "";
    var imagePreview = document.getElementById('himagePreview');
    imagePreview.src = "";
    imageInput.disabled = true;
  }

  function hdisableSelectFromUpload() {
    var selectFromUpload = document.getElementById('hselectFromUpload');
    selectFromUpload.value = "";
    var selectedImagePreview = document.getElementById('hselectedImagePreview');
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


<!--best place in sri lnaka button and data table-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Best Holiday Tour In Sri Lanka</h4>
    </div>

    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
    </div>


    <a id="best_holiday_table"></a>


    <div class="row">
      <!--add new card details-->
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
        <div class="item-container position-relative">

          <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 160px">

            <button type="button" class="btn" data-toggle="modal" data-target="#addbestplacesl">
              <div class="plus-icon">
                <i class="fa fa-plus fa-3x text-primary"></i>
              </div>
              <h4> Add New Place</h4>
              <p class="text-danger">Please add Maximum 3 card. Its is balance your home page area..</p>
            </button>
          </div>

        </div>
      </div>





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
                <img src="upload/home/<?php echo $image_name; ?>" alt="">
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

            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_best_holiday_edit.php" method="POST" style="display: inline;">
                  <input type="hidden" name="edit_best_holiday" value="<?php echo $id; ?>">
                  <button type="submit" name="edit_best_holiday_btn" class="btn btn-success w-100">Edit</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST" style="display: inline;">
                  <input type="hidden" name="delete_best_holiday" value="<?php echo $id; ?>">
                  <button type="submit" name="delete_best_holiday_btn" class="btn btn-danger w-100">Delete</button>
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

  </div>
</div>











<!-------------------------------------------------------------------------->









<!--home page festival details-->
<!--add festival details popup-->
<div class="modal fade" id="addfestival" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sri Lankan Festival Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control" id="title" name="ftitle" placeholder="Enter title" required>
              </div>
              <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control form-control" id="location" name="flocation" placeholder="Enter location" required>
              </div>
              <div class="form-group">
                <label for="distance">Distance From Colombo:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Km</span>
                  </div>
                  <input type="text" class="form-control form-control" id="distance" name="fdistance" placeholder="Enter distance" required>
                </div>
              </div>
              <div class="form-group">
                <label for="rating">Rating:</label>
                <div class="rating">
                  <input type="radio" id="fstar1" name="frating" value="1">
                  <label for="fstar1" title="1 star"></label>
                  <input type="radio" id="fstar2" name="frating" value="2">
                  <label for="fstar2" title="2 stars"></label>
                  <input type="radio" id="fstar3" name="frating" value="3">
                  <label for="fstar3" title="3 stars"></label>
                  <input type="radio" id="fstar4" name="frating" value="4">
                  <label for="fstar4" title="4 stars"></label>
                  <input type="radio" id="fstar5" name="frating" value="5">
                  <label for="fstar5" title="5 stars"></label>
                </div>
              </div>
              <div class="form-group">
                <label for="price">Price:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" class="form-control form-control" id="price" name="fprice" step="0.01" placeholder="Enter price" required>
                </div>
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
                    <input type="file" class="form-control-file" id="fimage" name="fimage" onchange="fpreviewImage(event); fdisableSelectFromUpload();">
                    <img id="fimagePreview" src="" alt="No PreviewImage" class="img-thumbnail mt-3">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Image from Upload Folder</label>
                    <div>
                      <select name="fselectedImage" id="fselectFromUpload" class="form-control" onchange="fdisableImageUpload(); fpreviewSelectedImage(this);">
                        <option value="">Select Image</option>
                        <?php
                        $uploadPath = 'upload/home/';
                        $files = glob($uploadPath . '*.*');
                        foreach ($files as $file) {
                          $fileName = basename($file);
                          echo "<option value='$fileName'>$fileName</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <a href="upload/home/" target="_blank">Open Upload Folder</a>
                    <div id="fselectedImagePreview"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control form-control-lg" id="description" name="fdescription" placeholder="Enter description" rows="4" required></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="saveslfestival" class="btn btn-primary">Save</button>
        </div>
      </form>



    </div>
  </div>
</div>


<script>
  function fpreviewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
      var imagePreview = document.getElementById('fimagePreview');
      imagePreview.src = reader.result;
    }
    reader.readAsDataURL(input.files[0]);
  }

  function fpreviewSelectedImage(selectElement) {
    var selectedImage = selectElement.value;
    var selectedImagePreview = document.getElementById('fselectedImagePreview');
    selectedImagePreview.innerHTML = "";
    if (selectedImage) {
      var image = new Image();
      image.src = 'upload/home/' + selectedImage;
      image.classList.add('img-thumbnail');
      selectedImagePreview.appendChild(image);
    }
    disableImageUpload();
  }

  function fdisableImageUpload() {
    var imageInput = document.getElementById('fimage');
    imageInput.value = "";
    var imagePreview = document.getElementById('fimagePreview');
    imagePreview.src = "";
    imageInput.disabled = true;
  }

  function fdisableSelectFromUpload() {
    var selectFromUpload = document.getElementById('fselectFromUpload');
    selectFromUpload.value = "";
    var selectedImagePreview = document.getElementById('fselectedImagePreview');
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


<!--festival detail in sri lnaka button and data table-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Festival In Sri Lanka</h4>
    </div>

    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
    </div>


    <a id="festival_sri_lanka"></a>


    <div class="row">
      <!--add new card details-->
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
        <div class="item-container position-relative">

          <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 160px">

            <button type="button" class="btn" data-toggle="modal" data-target="#addbestplacesl">
              <div class="plus-icon">
                <i class="fa fa-plus fa-3x text-primary"></i>
              </div>
              <h4> Add New Place</h4>
              <p class="text-danger">Please add Maximum 3 card. Its is balance your home page area..</p>
            </button>
          </div>

        </div>
      </div>





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
                <img src="upload/home/<?php echo $image_name; ?>" alt="">
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

            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_festival_edit.php" method="POST" style="display: inline;">
                  <input type="hidden" name="edit_festival_sl" value="<?php echo $id; ?>">
                  <button type="submit" name="edit_festival_sl_btn" class="btn btn-success w-100">Edit</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST" style="display: inline;">
                  <input type="hidden" name="delete_festival_sl" value="<?php echo $id; ?>">
                  <button type="submit" name="delete_festival_sl_btn" class="btn btn-danger w-100">Delete</button>
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

  </div>
</div>













<!--------------------------------------------------------->



<!--home page worldwide tour details-->
<!--add worldwide tour popup-->
<div class="modal fade" id="addworldtour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add World Wide Tour Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter destination" required>
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
                <label for="title">Tour Name:</label>
                <input type="text" class="form-control form-control" id="tourname" name="tourname" placeholder="Enter Tour Name" required>
              </div>
              <div class="form-group">
                <label for="title">Tour Type:</label>
                <input type="text" class="form-control form-control" id="tourtype" name="tourtype" placeholder="Enter Tour Type" required>
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
                        $uploadPath = 'upload/home/';
                        $files = glob($uploadPath . '*.*');
                        foreach ($files as $file) {
                          $fileName = basename($file);
                          echo "<option value='$fileName'>$fileName</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <a href="upload/home/" target="_blank">Open Upload Folder</a>
                    <div id="tourselectedImagePreview"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="saveslworldtour" class="btn btn-primary">Save</button>
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
      image.src = 'upload/home/' + selectedImage;
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


<!--festival detail in sri lnaka button and data table-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">World Wide Tour Package</h4>
    </div>

    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here!</h6>
    </div>


    <a id="world_wide_tour"></a>


    <div class="row">
      <!--add new card details-->
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
        <div class="destination shadow-sm">

          <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 80px; height:360px;">

            <button type="button" class="btn" data-toggle="modal" data-target="#addworldtour">
              <div class="plus-icon">
                <i class="fa fa-plus fa-3x text-primary"></i>
              </div>
              <h4> Add New Package</h4>
              <p class="text-danger">Please add Maximum 3 card. Its is balance your home page area..</p>
            </button>
          </div>

        </div>
      </div>





      <?php
      // Assuming you have established a database connection

      // Fetch data from the 'world_tour' table
      $query = "SELECT `id`, `destination`, `price`, `rating`, `tour_name`, `tour_type`, `hotels`, `activities`, `transfers`, `nights`, `days`, `image` FROM `world_tour`";
      $result = mysqli_query($connection, $query);

      // Check if any rows are returned
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // Retrieve values from each row
          $id = $row['id'];
          $destination = $row['destination'];
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
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4 ftco-animate" data-aos="zoom-in">
            <div class="destination position-relative shadow-sm">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(upload/home/<?php echo $image_name; ?>);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="fa fa-search"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h5><a href="#"><?php echo $destination; ?></a></h5>
                    <p class="rate" style="margin-top: -15px;">
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
                  <span><i class="fa fa-book text-primary mr-2"></i><?php echo $tour_type; ?></span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>

            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_world_tour_edit.php" method="POST" style="display: inline;">
                  <input type="hidden" name="edit_world_card" value="<?php echo $id; ?>">
                  <button type="submit" name="edit_world_card_btn" class="btn btn-success w-100">Edit</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST" style="display: inline;">
                  <input type="hidden" name="delete_tour_card" value="<?php echo $id; ?>">
                  <button type="submit" name="delete_tour_card_btn" class="btn btn-danger w-100">Delete</button>
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

  </div>
</div>












<!----------------------------------------------------------------->











<!--home page product details-->
<!--add product card popup-->
<div class="modal fade" id="addproductcard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product Card Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="query.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="destination">Product Name:</label>
                <input type="text" class="form-control" id="destination" name="productName" placeholder="Enter Product Name" required>
              </div>
              <div class="form-group">
                <label for="destination">Product Price:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control" id="destination" name="productPrice" placeholder="Enter Product Price" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">

              <label for="image">Add Image Details :</label>
              <h6 class="text-primary">Tip: Can you get better output from select 350px X350px image</h6>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="text-danger">(Plese select correct option first time. <br>If you need to change you option please reload.)</h6>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="productimage" name="productimage" onchange="productpreviewImage(event); productdisableSelectFromUpload();">
                    <img id="productimagePreview" src="" alt="No PreviewImage" class="img-thumbnail mt-3">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Image from Upload Folder</label>
                    <div>
                      <select name="productselectedImage" id="productselectFromUpload" class="form-control" onchange="productdisableImageUpload(); productpreviewSelectedImage(this);">
                        <option value="">Select Image</option>
                        <?php
                        $uploadPath = 'upload/home/';
                        $files = glob($uploadPath . '*.*');
                        foreach ($files as $file) {
                          $fileName = basename($file);
                          echo "<option value='$fileName'>$fileName</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <a href="upload/home/" target="_blank">Open Upload Folder</a>
                    <div id="productselectedImagePreview"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="saveslproductcard" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<script>
  function productpreviewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
      var imagePreview = document.getElementById('productimagePreview');
      imagePreview.src = reader.result;
    }
    reader.readAsDataURL(input.files[0]);
  }

  function productpreviewSelectedImage(selectElement) {
    var selectedImage = selectElement.value;
    var selectedImagePreview = document.getElementById('productselectedImagePreview');
    selectedImagePreview.innerHTML = "";
    if (selectedImage) {
      var image = new Image();
      image.src = 'upload/home/' + selectedImage;
      image.classList.add('img-thumbnail');
      selectedImagePreview.appendChild(image);
    }
    disableImageUpload();
  }

  function productdisableImageUpload() {
    var imageInput = document.getElementById('productimage');
    imageInput.value = "";
    var imagePreview = document.getElementById('productimagePreview');
    imagePreview.src = "";
    imageInput.disabled = true;
  }

  function productdisableSelectFromUpload() {
    var selectFromUpload = document.getElementById('productselectFromUpload');
    selectFromUpload.value = "";
    var selectedImagePreview = document.getElementById('productselectedImagePreview');
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



<!--product card in sri lnaka button and data table-->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Product Card Details</h4>
    </div>

    <!--preview-->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Preview is Here! (Original Preview is Better Than This one..)</h6>
    </div>


    <a id="product_card"></a>


    <div class="row">
      <!--add new card details-->
      <div class="col-md-6 col-lg-4 col-xl-3 p-2" data-aos="zoom-in">
        <div class="destination shadow-sm">

          <div class="add-new-place d-flex flex-column justify-content-center align-items-center" style="margin-top: 80px; height:280px;">

            <button type="button" class="btn" data-toggle="modal" data-target="#addproductcard">
              <div class="plus-icon">
                <i class="fa fa-plus fa-3x text-primary"></i>
              </div>
              <h4> Add New Product Details</h4>
              <p class="text-danger">Please add Maximum 3 card. Its is balance your home page area..</p>
            </button>
          </div>

        </div>
      </div>









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
                  <img src="upload/home/<?php echo $image; ?>" alt="nike-air-shoe">
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

            <div class="actions row mt-2 pl-4 pr-4">
              <div class="col-md-6">
                <form action="home_product_edit.php" method="POST" style="display: inline;">
                  <input type="hidden" name="edit_product_card" value="<?php echo $id; ?>">
                  <button type="submit" name="edit_product_card_btn" class="btn btn-success w-100">Edit</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action="query.php" method="POST" style="display: inline;">
                  <input type="hidden" name="delete_product_card" value="<?php echo $id; ?>">
                  <button type="submit" name="delete_product_card_btn" class="btn btn-danger w-100">Delete</button>
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
      //mysqli_close($connection);
      ?>


    </div>

  </div>
</div>









































<!-- /.container-fluid -->

<?php
include('includes/script.php');
include('includes/footer.php');
?>