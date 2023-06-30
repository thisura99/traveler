<?php
session_start();
include('includes/header.php');
require ('database/dbconfig.php')
?>



<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-9 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="img/login.jpg" class="h-100 w-100" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                                </div>

                                <?php
                                if (isset($_SESSION['logstatus']) && $_SESSION['logstatus'] != '') {
                                    echo '<h5 class="text-danger">' . $_SESSION['logstatus'] . '</h5>';
                                    unset($_SESSION['logstatus']);
                                }
                                ?>

                                <form class="user" action="code.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                </form>
                                <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>




<?php
include('includes/script.php');
?>





