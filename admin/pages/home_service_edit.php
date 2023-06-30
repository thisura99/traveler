<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Service Details!</h6>
        </div>

        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "traveler");
            if (isset($_POST['edit_servicedetailbtn'])) {
                $id = $_POST['edit_servicedetailid'];

                $query = "SELECT * FROM about_service_items WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {

            ?>
                    <form action="query.php" method="POST">


                        <div class="modal-body">
                            <input type="hidden" name='eid' value="<?php echo $row['id'] ?>">




                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-b7JEC3jQsPt9jMdeZTFy5mO8/u8+0muifcArRfvozDJ99yUVBSo6eW5vdWefKzobv+Ozrs61TLjEv68FmDhlJw==" crossorigin="anonymous" />

                            <div class="form-group">
                                <label for="iconInput">Icon Class</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i id="iconPreview" class="fas fa-globe"></i></span>
                                    </div>
                                    <input type="text" name="eicon" class="form-control" value="<?php echo $row['icon'] ?>" id="iconInput" placeholder="Enter Icon Class" />
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
                                <input type="text" name="etitle" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="edescription" class="form-control" placeholder="Enter Title"><?php echo $row['description'] ?></textarea>
                                
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="home_about.php" class="btn btn-danger">Cancel</a>
                            <button type="submit" name="updateservicedetailbtn" class="btn btn-primary">Udpate</button>
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
include('includes/script.php');
include('includes/footer.php');
?>