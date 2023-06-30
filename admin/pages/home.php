<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div>

  







  <!--update details-->
  <div class="modal fade" id="updateabout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>



        <?php
        $connection = mysqli_connect("localhost", "root", "", "traveler");
        if (isset($_POST['aboutedit_btn'])) {
          $id = $_POST['edit_title'];

          $query = "SELECT * FROM home_about WHERE sub_title='$id' ";
          $query_run = mysqli_query($connection, $query);

          foreach ($query_run as $row){
            ?>
          
        <form action="home.php" method="POST">

          <div class="modal-body">

            <div class="form-group">
              <label> Sub Title </label>
              <input type="text" name="esubtitle"  value="<?php echo $row['sub_title'] ?>" class="form-control" placeholder="Enter Sub Title">
            </div>
            <div class="form-group">
              <label> Title </label>
              <input type="text" name="etitle"  value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label>para_1</label>
              <input type="text" name="epara_1"  value="<?php echo $row['para_1'] ?>" class="form-control" placeholder="Enter Para one">
            </div>
            <div class="form-group">
              <label>para_2</label>
              <input type="text" name="epara_2"  value="<?php echo $row['para_2'] ?>" class="form-control" placeholder="Enter Para two">
            </div>
            <div class="form-group">
              <label>Point 1</label>
              <input type="text" name="epoint1"  value="<?php echo $row['point_1'] ?>" class="form-control" placeholder="Enter Point 1">
            </div>
            <div class="form-group">
              <label>Point 2</label>
              <input type="text" name="epoint2"  value="<?php echo $row['point_2'] ?>" class="form-control" placeholder="Enter Point 2">
            </div>
            <div class="form-group">
              <label>Point 3</label>
              <input type="text" name="epoint3"  value="<?php echo $row['point_3'] ?>" class="form-control" placeholder="Enter Point 3">
            </div>
            <div class="form-group">
              <label>Point 4</label>
              <input type="text" name="epoint4"  value="<?php echo $row['point_4'] ?>" class="form-control" placeholder="Enter Point 4">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateabout" class="btn btn-primary">Update</button>
          </div>
        </form>

        <?php

      }
        }
        ?>
      </div>
    </div>
  </div>
  

  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Home Page Details

        </h6>
      </div>

      <div class="card-body">

        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
          echo '<h2>' . $_SESSION['success'] . '</h2>';
          unset($_SESSION['success']);
        }

        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
          echo '<h2>' . $_SESSION['status'] . '</h2>';
          unset($_SESSION['status']);
        }
        ?>



        <div class="table-responsive">

          <?php
          $connection = mysqli_connect("localhost", "root", "", "traveler");
          $query = "SELECT * FROM home_about";
          $query_run = mysqli_query($connection, $query);
          ?>


          <!--data loaded table-->
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sub_Title</th>
                <th>Title</th>
                <th>para_1 </th>
                <th>para_2</th>
                <th>Point_1</th>
                <th>Point_2</th>
                <th>Point_3</th>
                <th>Point_4</th>
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
                    <td><?php echo $row['sub_title']; ?> </td>
                    <td><?php echo $row['title']; ?> </td>
                    <td><?php echo $row['para_1']; ?> </td>
                    <td><?php echo $row['para_2']; ?> </td>
                    <td><?php echo $row['point_1']; ?> </td>
                    <td><?php echo $row['point_2']; ?> </td>
                    <td><?php echo $row['point_3']; ?> </td>
                    <td><?php echo $row['point_4']; ?> </td>
                    <td>
                      <form action="home.php" method="post">
                        <input type="hidden" name="edit_title" value="<?php echo $row['sub_title']; ?>">
                        <button type="button" name="aboutedit_btn" class="btn btn-success" data-toggle="modal" data-target="#updateabout">
                          EDIT
                        </button>
                      </form>
                    </td>
                    <td>
                      <form action="code.php" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $row['sub_title']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                    </td>
                  </tr>

              <?php
                }
              } else {
                echo "No Record Found!";
              }
              ?>

            </tbody>
          </table>




        </div>
      </div>
    </div>

  </div>



  <?php
        $connection = mysqli_connect("localhost", "root", "", "traveler");
       
//          $id = $_POST['edit_title'];

          $query = "SELECT * FROM home_about";
          $query_run = mysqli_query($connection, $query);

          foreach ($query_run as $row){
            ?>
          
        <form action="home.php" method="POST">

          <div class="modal-body">

            <div class="form-group">
              <label> Sub Title </label>
              <input type="text" name="esubtitle"  value="<?php echo $row['sub_title'] ?>" class="form-control" placeholder="Enter Sub Title">
            </div>
            <div class="form-group">
              <label> Title </label>
              <input type="text" name="etitle"  value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label>para_1</label>
              <input type="text" name="epara_1"  value="<?php echo $row['para_1'] ?>" class="form-control" placeholder="Enter Para one">
            </div>
            <div class="form-group">
              <label>para_2</label>
              <input type="text" name="epara_2"  value="<?php echo $row['para_2'] ?>" class="form-control" placeholder="Enter Para two">
            </div>
            <div class="form-group">
              <label>Point 1</label>
              <input type="text" name="epoint1"  value="<?php echo $row['point_1'] ?>" class="form-control" placeholder="Enter Point 1">
            </div>
            <div class="form-group">
              <label>Point 2</label>
              <input type="text" name="epoint2"  value="<?php echo $row['point_2'] ?>" class="form-control" placeholder="Enter Point 2">
            </div>
            <div class="form-group">
              <label>Point 3</label>
              <input type="text" name="epoint3"  value="<?php echo $row['point_3'] ?>" class="form-control" placeholder="Enter Point 3">
            </div>
            <div class="form-group">
              <label>Point 4</label>
              <input type="text" name="epoint4"  value="<?php echo $row['point_4'] ?>" class="form-control" placeholder="Enter Point 4">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateabout" class="btn btn-primary">Update</button>
          </div>
        </form>

        <?php

      }
        
        ?>












<?php
if (isset($_POST['updateabout'])) {
  $esubtitle = $_POST['esubtitle'];
  $etitle = $_POST['etitle'];
  $epara_1 = $_POST['epara_1'];
  $epara_2 = $_POST['epara_2'];
  $epoint_1 = $_POST['epoint1'];
  $epoint_2 = $_POST['epoint2'];
  $epoint_3 = $_POST['epoint3'];
  $epoint_4 = $_POST['epoint4'];


  $connection = mysqli_connect("localhost", "root", "", "traveler");
  $query = "UPDATE home_about SET sub_title='$esubtitle' title='$etitle', para_1='$epara_1', para_2='$epara_2', point_1='$epoint_1', point_2='$epoint_2', point_3='$epoint_3', point_4='$epoint_4' WHERE sub_title='$esubtitle'";
  $query_run = mysqli_query($connection, $query);

  if ($query_run) {
    $alert = "<script>alert('$esubtitle Your Data is updated!')</script>";
    $_SESSION['success'] = $alert;
    header('Location: home.php');
    exit();
  } else {
    $alert = "<script>alert('$esubtitle Your Data is Not updated!')</script>";
    $_SESSION['status'] = $alert;
    header('Location: home.php');
    exit();
  }
}
?>






  <!-- /.container-fluid -->

  <?php
  include('includes/script.php');
  include('includes/footer.php');
  ?>