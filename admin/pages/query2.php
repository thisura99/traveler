
<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('../database/dbconfig.php');

$connection = mysqli_connect("localhost", "root", "", "traveler");





    










//world card insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveworldcard'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $uploadPath = 'upload/world_tour/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['selectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['selectedImage'];
      }
  
    // Insert data into the database
    $sql = "INSERT INTO world_card_list (title, description, url, image)
            VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssss", $title, $description, $url, $image);
    
    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: world_card.php#world_card_area');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: world_card.php#world_card_area'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }


// Check if the delete button is clicked in world card details are removed
if (isset($_POST['world_card_delete_btn'])) {
    $id = $_POST['world_card_delete_id']; // Assuming you have a hidden input field with the image ID
        
    // Retrieve the image details from the database
    $query = "SELECT * FROM world_card_list WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/world_tour/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM world_card_list WHERE id = '$id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: world_card.php#world_card_area');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: world_card.php#world_card_area');
    }
}


// Check if the update button is clicked in best place in sri lnaka
if (isset($_POST['update_world_card_btn'])) {
    $id = $_POST['eid'];
    $title = $_POST['etitle'];
    $description = $_POST['edescription'];
    $url = $_POST['eurl'];

    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/world_tour/" . $previous_image)) {
            unlink("upload/world_tour/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/world_tour/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }
    

    $query = "UPDATE world_card_list SET title='$title', description='$description', url='$url',  image='$image' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('Data updated successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: world_card.php#world_card_area');
    } else {
        $alert = "<script>alert('Data update failed')</script>";
        $_SESSION['status'] = $alert;
        header('Location: world_card.php#world_card_area');
    }
}








//world tour card details
//world tour card details insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveslworldtourpacks'])) {
    // Retrieve form data
    $packid = $_POST['packid'];
    $packtitle = $_POST['packtitle'];
    $place_1 = $_POST['place_1'];
    $place_2 = $_POST['place_2'];
    $price = $_POST['price'];
    $rating = $_POST['tourrating'];
    $tour_name = $_POST['tourname'];
    $tour_type = $_POST['tourtype'];
    $hotels = $_POST['hotels'];
    $activities = $_POST['activities'];
    $transfers = $_POST['transfers'];
    $nights = $_POST['nights'];
    $days = $_POST['days'];
    $url = $_POST['url'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['tourimage']) && $_FILES['tourimage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['tourimage']['name'];
        $uploadPath = 'upload/world_tour/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['tourimage']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['tourselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['tourselectedImage'];
      }
  

    // Insert data into the database
    $sql = "INSERT INTO world_tour_packages (pack_id, pack_title, place_1, place_2, price, rating, tour_name, tour_type, hotels, activities, transfers, nights, days, url, image)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssdissiiiiiss", $packid, $packtitle, $place_1, $place_2, $price, $rating, $tour_name, $tour_type, $hotels, $activities, $transfers, $nights, $days, $url, $image);
    

    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: world_card.php');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: world_card.php'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }



//delete tour card deteails
if (isset($_POST['delete_tour_package_card_btn'])) {
  $image_id = $_POST['delete_tour_package_card']; // Assuming you have a hidden input field with the image ID
  
   
  // Retrieve the image details from the database
  $query = "SELECT * FROM world_tour_packages WHERE id = '$image_id'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);

  // Delete the image file from the upload directory
  $image_path = "upload/world_tour/" . $row['image'];
  if (file_exists($image_path)) {
      unlink($image_path); // Delete the file
  }

  // Delete the image entry from the database
  $delete_query = "DELETE FROM world_tour_packages WHERE id = '$image_id'";
  $delete_result = mysqli_query($connection, $delete_query);

  if ($delete_result) {
      
      $alert = "<script>alert('Card Details deleted successfully')</script>";
      $_SESSION['success'] = $alert;
      header('Location: world_card.php');
      
  } else {
      echo "Error deleting image: " . mysqli_error($connection);
      $alert = "<script>alert('Failed to delete card Details')</script>";
      $_SESSION['status'] = $alert;
      header('Location: world_card.php');
  }
}  


// Check if the update button is clicked in tour package in
if (isset($_POST['update_world_tour_package_btn'])) {
  $id = $_POST['eid'];
  $tourName = $_POST['etourname'];
  $place_1 = $_POST['eplace_1'];
  $place_2 = $_POST['eplace_2'];
  $price = $_POST['eprice'];
  $rating = $_POST['erating'];
  $tourType = $_POST['etourtype'];
  $hotels = $_POST['ehotels'];
  $activities = $_POST['eactivities'];
  $transfers = $_POST['etransfers'];
  $nights = $_POST['enights'];
  $days = $_POST['edays'];
  $url = $_POST['eurl'];

  // Handling the uploaded image
  if ($_FILES['eimage']['name'] != "") {
      // Delete the previous image file
      $previous_image = $_POST['previous_image'];
      if (file_exists("upload/world_tour/" . $previous_image)) {
          unlink("upload/world_tour/" . $previous_image);
      }
      // Upload the new image file
      $image = $_FILES['eimage']['name'];
      $image_tmp = $_FILES['eimage']['tmp_name'];
      move_uploaded_file($image_tmp, "upload/world_tour/" . $image);
  } else {
      // If no new image is uploaded, retain the existing image name
      $image = $_POST['eimage'];
  }

  $query = "UPDATE world_tour_packages SET   tour_name='$tourName', place_1='$place_1', place_2='$place_2', price='$price', rating='$rating',  tour_type='$tourType', hotels='$hotels', activities='$activities', transfers='$transfers', nights='$nights', days='$days', url='$url',  image='$image' WHERE id='$id'";
  $query_run = mysqli_query($connection, $query);

  if ($query_run) {
      $alert = "<script>alert('Data updated successfully')</script>";
      $_SESSION['success'] = $alert;
      header('Location: world_card.php');
  } else {
      $alert = "<script>alert('Data update failed')</script>";
      $_SESSION['status'] = $alert;
      header('Location: world_card.php');
  }
}










?>