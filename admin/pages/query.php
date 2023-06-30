
<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('../database/dbconfig.php');

$connection = mysqli_connect("localhost", "root", "", "traveler");




//about details

//about details update button
if (isset($_POST['updateaboutbtn'])) {
    $subtitle = $_POST['esubtitle'];
    $title = $_POST['etitle'];
    $para_1 = $_POST['epara_1'];
    $para_2 = $_POST['epara_2'];
    $point1 = $_POST['epoint1'];
    $point2 = $_POST['epoint2'];
    $point3 = $_POST['epoint3'];
    $point4 = $_POST['epoint4'];


    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/home/" . $previous_image)) {
            unlink("upload/home/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/home/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }
    


    $query = "UPDATE home_about SET title=?, para_1=?, para_2=?, point_1=?, point_2=?, point_3=?, point_4=?, image=? WHERE sub_title=?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "sssssssss", $title, $para_1, $para_2, $point1, $point2, $point3, $point4, $image, $subtitle);
    $query_run = mysqli_stmt_execute($stmt);

    if ($query_run) {
        $alert = "<script>alert('About Detail is Updated!')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php');
    } else {
        $alert = "<script>alert('About Detail is Not Updated!')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php');
    }
}





//service details
//service details insert button
if (isset($_POST['saveservicedetailsbtn'])) {
    $iconClass = $_POST['icon'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO about_service_items (icon, title, description) VALUES ('$iconClass', '$title', '$description')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        //echo "saved";
        $alert = "<script>alert('Details is Added')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#serivce_card');
    } else {
        //echo"not saved";
        $alert = "<script>alert('Details is Not Added')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#serivce_card');
    }
}


//about details delete button
if (isset($_POST['servicedelete_btn'])) {
    $id = $_POST['servicedelete_id'];

    $query = "DELETE FROM about_service_items WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        //echo "saved";
        $alert = "<script>alert('Details is Deleted')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#serivce_card');
    } else {
        //echo"not saved";
        $alert = "<script>alert('Details is Not Deleted')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#serivce_card');
    }
}


//service details update button
if (isset($_POST['updateservicedetailbtn'])) {
    $id = $_POST['eid'];
    $icon = $_POST['eicon'];
    $title = $_POST['etitle'];
    $description = $_POST['edescription'];


    $query = "UPDATE about_service_items SET icon='$icon', title='$title', description='$description' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('About Detail is Updated!')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#serivce_card');
    } else {
        $alert = "<script>alert('About Detail is Not Updated!')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#serivce_card');
    }
}




//best place details
//best place in sri lnaka insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['savebestplacebtn'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $location = $_POST['location'];
    $distance = $_POST['distance'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $description = $_POST['description'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $uploadPath = 'upload/home/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['selectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['selectedImage'];
      }
  
    // Insert data into the database
    $sql = "INSERT INTO best_places (title, location, distance, image, rating, price, description)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssids", $title, $location, $distance, $image, $rating, $price, $description);
    
    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: home_about.php#best_place_table');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: home_about.php#best_place_table'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }
  

/*
if (isset($_POST['savebestplacebtn'])) {
    $title = $_POST['title'];
    $location = $_POST['location'];
    $distance = $_POST['distance'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Validate and process the image upload
    $image = $_FILES["image"];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];

    // Check for file errors
    if ($image_error !== UPLOAD_ERR_OK) {
        $alert = "<script>alert('Error uploading image: $image_error')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_place_table');
        exit();
    }

    

    // Check file size (adjust the maximum file size according to your needs)
    $max_file_size = 5 * 1024 * 1024; // 5MB
    if ($image_size > $max_file_size) {
        $alert = "<script>alert('Image size exceeds the maximum limit')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_place_table');
        exit();
    }

    // Check file type (you can modify the allowed file types as required)
    $allowed_extensions = array('jpg', 'jpeg', 'png');
    $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    if (!in_array($image_extension, $allowed_extensions)) {
        $alert = "<script>alert('Invalid image format. Only JPG, JPEG, and PNG files are allowed.')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_place_table');
        exit();
    }

    // Check if the file already exists
    $target_path = "upload/" . $image_name;
    if (file_exists($target_path)) {
        $alert = "<script>alert('Image already exists!')</script>";
        $_SESSION['imageexists'] = $alert;
        header('Location: home_about.php#best_place_table');
        exit();
    }

    // Perform database insertion
    $query = "INSERT INTO best_places (`title`, `location`, `distance`, `image`, `rating`, `price`, `description`) 
              VALUES ('$title', '$location', '$distance', '$image_name', '$rating', '$price', '$description')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        move_uploaded_file($image_tmp, $target_path);
        $alert = "<script>alert('Details Added')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#best_place_table');
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
        $alert = "<script>alert('Details Not Added')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_place_table');
        exit();
    }
}
*/

// Check if the delete button is clicked in best place in sri lnaka
if (isset($_POST['best_place_delete_btn'])) {
    $image_id = $_POST['best_place_delete_id']; // Assuming you have a hidden input field with the image ID

    // Retrieve the image details from the database
    $query = "SELECT * FROM best_places WHERE id = '$image_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/home" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM best_places WHERE id = '$image_id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#best_place_table');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_place_table');
    }
}


// Check if the update button is clicked in best place in sri lnaka
if (isset($_POST['update_best_place_btn'])) {
    $id = $_POST['eid'];
    $title = $_POST['etitle'];
    $location = $_POST['elocation'];
    $distance = $_POST['edistance'];

    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/home/" . $previous_image)) {
            unlink("upload/home/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/home/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }
    $rating = $_POST['erating'];
    $price = $_POST['eprice'];
    $description = $_POST['edescription'];

    $query = "UPDATE best_places SET title='$title', location='$location', distance='$distance', image='$image', rating='$rating', price='$price', description='$description' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('Data updated successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#best_place_table');
    } else {
        $alert = "<script>alert('Data update failed')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_place_table');
    }
}













//top thing details
//top thing in sri lnaka insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['savetopthing'])) {
    // Retrieve form data
    $title = $_POST['ttitle'];
    $location = $_POST['tlocation'];
    $distance = $_POST['tdistance'];
    $rating = $_POST['trating'];
    $price = $_POST['tprice'];
    $description = $_POST['tdescription'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['timage']) && $_FILES['timage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['timage']['name'];
        $uploadPath = 'upload/home/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['timage']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['tselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['tselectedImage'];
      }
  
    // Insert data into the database
    $sql = "INSERT INTO top_thing (title, location, distance, image, rating, price, description)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssids", $title, $location, $distance, $image, $rating, $price, $description);
    
    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: home_about.php#top_thing_table');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: home_about.php#top_thing_table'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }


// Check if the delete button is clicked in toop think in sri lnaka
if (isset($_POST['delete_top_think_btn'])) {
    $image_id = $_POST['delete_top_think']; // Assuming you have a hidden input field with the image ID
        
    // Retrieve the image details from the database
    $query = "SELECT * FROM top_thing WHERE id = '$image_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/home/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM top_thing WHERE id = '$image_id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#top_thing_table');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#top_thing_table');
    }
}


// Check if the update button is clicked in best place in sri lnaka
if (isset($_POST['update_top_thing_btn'])) {
    $id = $_POST['eid'];
    $title = $_POST['etitle'];
    $location = $_POST['elocation'];
    $distance = $_POST['edistance'];

    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/home/" . $previous_image)) {
            unlink("upload/home/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/home/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }
    $rating = $_POST['erating'];
    $price = $_POST['eprice'];
    $description = $_POST['edescription'];

    $query = "UPDATE top_thing SET title='$title', location='$location', distance='$distance', image='$image', rating='$rating', price='$price', description='$description' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('Data updated successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#top_thing_table');
    } else {
        $alert = "<script>alert('Data update failed')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#top_thing_table');
    }
}








//best holiday details
//best holiday in sri lnaka insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['savebestholiday'])) {
    // Retrieve form data
    $title = $_POST['htitle'];
    $location = $_POST['hlocation'];
    $distance = $_POST['hdistance'];
    $rating = $_POST['hrating'];
    $price = $_POST['hprice'];
    $description = $_POST['hdescription'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['himage']) && $_FILES['himage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['himage']['name'];
        $uploadPath = 'upload/home/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['himage']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['hselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['hselectedImage'];
      }
  
    // Insert data into the database
    $sql = "INSERT INTO best_holiday (title, location, distance, image, rating, price, description)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssids", $title, $location, $distance, $image, $rating, $price, $description);
    
    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: home_about.php#best_holiday_table');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: home_about.php#best_holiday_table'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }


// Check if the delete button is clicked in toop think in sri lnaka
if (isset($_POST['delete_best_holiday_btn'])) {
    $image_id = $_POST['delete_best_holiday']; // Assuming you have a hidden input field with the image ID
        
    // Retrieve the image details from the database
    $query = "SELECT * FROM best_holiday WHERE id = '$image_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/home/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM best_holiday WHERE id = '$image_id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#best_holiday_table');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_holiday_table');
    }
}


// Check if the update button is clicked in best place in sri lnaka
if (isset($_POST['update_best_holiday_btn'])) {
    $id = $_POST['eid'];
    $title = $_POST['etitle'];
    $location = $_POST['elocation'];
    $distance = $_POST['edistance'];

    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/home/" . $previous_image)) {
            unlink("upload/home/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/home/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }
    $rating = $_POST['erating'];
    $price = $_POST['eprice'];
    $description = $_POST['edescription'];

    $query = "UPDATE best_holiday SET title='$title', location='$location', distance='$distance', image='$image', rating='$rating', price='$price', description='$description' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('Data updated successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#best_holiday_table');
    } else {
        $alert = "<script>alert('Data update failed')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#best_holiday_table');
    }
}















//festival sri lanka details
//festival  in sri lnaka insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveslfestival'])) {
    // Retrieve form data
    $title = $_POST['ftitle'];
    $location = $_POST['flocation'];
    $distance = $_POST['fdistance'];
    $rating = $_POST['frating'];
    $price = $_POST['fprice'];
    $description = $_POST['fdescription'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['fimage']) && $_FILES['fimage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['fimage']['name'];
        $uploadPath = 'upload/home/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['fimage']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['fselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['fselectedImage'];
      }
  
    // Insert data into the database
    $sql = "INSERT INTO festival_sl (title, location, distance, image, rating, price, description)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssids", $title, $location, $distance, $image, $rating, $price, $description);
    
    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: home_about.php#festival_sri_lanka');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: home_about.php#festival_sri_lanka'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }


// Check if the form is submitted add exist image check
/*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveslfestival'])) {
    // Retrieve form data
    $title = $_POST['ftitle'];
    $location = $_POST['flocation'];
    $distance = $_POST['fdistance'];
    $rating = $_POST['frating'];
    $price = $_POST['fprice'];
    $description = $_POST['fdescription'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['fimage']) && $_FILES['fimage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['fimage']['name'];
        $uploadPath = 'upload/' . $image; // Path to the existing upload folder
      
        // Check if the image already exists
        if (file_exists($uploadPath)) {
            // Image already exists
            $alert = "<script>alert('Image already exists')</script>";
            $_SESSION['status'] = $alert;
            header('Location: home_about.php#festival_sri_lanka');
            exit();
        }
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['fimage']['tmp_name'], $uploadPath)) {
            // Delete the existing image, if applicable
            if (isset($_POST['fselectedImage']) && !empty($_POST['fselectedImage'])) {
                $existingImage = 'upload/' . $_POST['fselectedImage'];
                if (file_exists($existingImage)) {
                    unlink($existingImage);
                }
            }
        }
    } elseif (isset($_POST['fselectedImage']) && !empty($_POST['fselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['fselectedImage'];
    }
  
    // Insert data into the database
    $sql = "INSERT INTO festival_sl (title, location, distance, image, rating, price, description)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssids", $title, $location, $distance, $image, $rating, $price, $description);
    
    if ($stmt->execute()) {
        // Data insertion successful
        $alert = "<script>alert('Details Added')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#festival_sri_lanka');
        exit();
    } else {
        // Data insertion failed
        echo "Error: " . $stmt->error;
        $alert = "<script>alert('Details Not Added')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#festival_sri_lanka');
        exit();
    }
  
    // Close the prepared statement
    //$stmt->close();
  
    // Close the database connection
    //$connection->close();
}
*/






// Check if the delete button is clicked in toop think in sri lnaka


if (isset($_POST['delete_festival_sl_btn'])) {
    $image_id = $_POST['delete_festival_sl']; // Assuming you have a hidden input field with the image ID
        
    // Retrieve the image details from the database
    $query = "SELECT * FROM festival_sl WHERE id = '$image_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/home/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM festival_sl WHERE id = '$image_id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#festival_sri_lanka');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#festival_sri_lanka');
    }
}
















//world tour card details
//world tour card details insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveslworldtour'])) {
    // Retrieve form data
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    $rating = $_POST['tourrating'];
    $tour_name = $_POST['tourname'];
    $tour_type = $_POST['tourtype'];
    $hotels = $_POST['hotels'];
    $activities = $_POST['activities'];
    $transfers = $_POST['transfers'];
    $nights = $_POST['nights'];
    $days = $_POST['days'];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['tourimage']) && $_FILES['tourimage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['tourimage']['name'];
        $uploadPath = 'upload/home/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['tourimage']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['tourselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['tourselectedImage'];
      }
  

    // Insert data into the database
    $sql = "INSERT INTO world_tour (destination, price, rating, tour_name, tour_type, hotels, activities, transfers, nights, days, image) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sdissiiiiis", $destination, $price, $rating, $tour_name, $tour_type, $hotels, $activities, $transfers, $nights, $days, $image);
  

    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: home_about.php#world_wide_tour');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: home_about.php#world_wide_tour'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }


//delete tour card deteails
if (isset($_POST['delete_tour_card_btn'])) {
    $image_id = $_POST['delete_tour_card']; // Assuming you have a hidden input field with the image ID
        
    // Retrieve the image details from the database
    $query = "SELECT * FROM world_tour WHERE id = '$image_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/home/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM world_tour WHERE id = '$image_id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#world_wide_tour');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#world_wide_tour');
    }
}  


// Check if the update button is clicked in tour package in
if (isset($_POST['update_world_tour_btn'])) {
    $id = $_POST['eid'];
    $destination = $_POST['edestination'];
    $price = $_POST['eprice'];
    $rating = $_POST['erating'];
    $tourName = $_POST['etourname'];
    $tourType = $_POST['etourtype'];
    $hotels = $_POST['ehotels'];
    $nights = $_POST['enights'];
    $days = $_POST['edays'];
    $activities = $_POST['eactivities'];
    $transfers = $_POST['etransfers'];

    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/home/" . $previous_image)) {
            unlink("upload/home/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/home/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }

    $query = "UPDATE world_tour SET destination='$destination', price='$price', rating='$rating', tour_name='$tourName', tour_type='$tourType', hotels='$hotels', activities='$activities', transfers='$transfers', nights='$nights', days='$days', image='$image' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('Data updated successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#world_wide_tour');
    } else {
        $alert = "<script>alert('Data update failed')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#world_wide_tour');
    }
}

  
  








//product card details
//product card details insert button

// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveslproductcard'])) {
    // Retrieve form data
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
  
    // Process the uploaded image, if available
    $image = ''; // Initialize the image variable
  
    if (isset($_FILES['productimage']) && $_FILES['productimage']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['productimage']['name'];
        $uploadPath = 'upload/home/' . $image; // Path to the existing upload folder
      
        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['productimage']['tmp_name'], $uploadPath)) {
          
        }
      } elseif (isset($_POST['productselectedImage'])) {
        // Use the selected image from the upload folder
        $image = $_POST['productselectedImage'];
      }
  

    // Insert data into the database
    $sql = "INSERT INTO products (product_name, product_price, image) 
        VALUES (?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sds", $productName, $productPrice, $image);

  

    if ($stmt->execute()) {
      // Data insertion successful
      $alert = "<script>alert('Details Added')</script>";
      $_SESSION['success'] = $alert;
      header('Location: home_about.php#product_card');
      exit();
    } else {
      // Data insertion failed
      echo "Error: " . $stmt->error;
      $alert = "<script>alert('Details Not Added')</script>";
      $_SESSION['status'] = $alert;
      header('Location: home_about.php#product_card'); 
    }
  
    // Close the prepared statement
    $stmt->close();
  
    // Close the database connection
    $connection->close();
  }



//delete tour card deteails
if (isset($_POST['delete_product_card_btn'])) {
    $image_id = $_POST['delete_product_card']; // Assuming you have a hidden input field with the image ID
        
    // Retrieve the image details from the database
    $query = "SELECT * FROM products WHERE id = '$image_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete the image file from the upload directory
    $image_path = "upload/home/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM products WHERE id = '$image_id'";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        
        $alert = "<script>alert('Card Details deleted successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#product_card');
        
    } else {
        echo "Error deleting image: " . mysqli_error($connection);
        $alert = "<script>alert('Failed to delete card Details')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#product_card');
    }
} 



// Check if the update button is clicked in tour package in
if (isset($_POST['update_product_btn'])) {
    $id = $_POST['eid'];
    $productname = $_POST['eproductName'];
    $productprice = $_POST['eproductPrice'];

    // Handling the uploaded image
    if ($_FILES['eimage']['name'] != "") {
        // Delete the previous image file
        $previous_image = $_POST['previous_image'];
        if (file_exists("upload/home/" . $previous_image)) {
            unlink("upload/home/" . $previous_image);
        }
        // Upload the new image file
        $image = $_FILES['eimage']['name'];
        $image_tmp = $_FILES['eimage']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/home/" . $image);
    } else {
        // If no new image is uploaded, retain the existing image name
        $image = $_POST['eimage'];
    }

    $query = "UPDATE products SET product_name='$productname', product_price='$productprice', image='$image' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $alert = "<script>alert('Data updated successfully')</script>";
        $_SESSION['success'] = $alert;
        header('Location: home_about.php#product_card');
    } else {
        $alert = "<script>alert('Data update failed')</script>";
        $_SESSION['status'] = $alert;
        header('Location: home_about.php#product_card');
    }
}








































?>