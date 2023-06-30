<body>
  <!--Navigation Area-->
  <div class="container-fluid position-relative">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">

          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip" style="font-size: 40px;"><i class="fa fa-map-marked-alt me-3"></i>Traveler</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="../../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sri
                    Lanka</a>
                  <ul class="dropdown-menu">
                    <li><a href="../sri_lanka_places.php" class="dropdown-item">Top Places</a></li>
                    <li><a href="../sri_lanka_top_things.php" class="dropdown-item">Top Thing</a></li>
                    <li><a href="../sri_lanka_event_festival.php" class="dropdown-item">Festival</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Packages</a>
                  <ul class="dropdown-menu">
                    <li><a href="../sri_lanka_tour_packages.php" class="dropdown-item">Islandwide Tour</a></li>
                    <li><a href="../worldwide_tour_country_list.php" class="dropdown-item">Worldide Tour</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="../hotels_srilanka.php" class="dropdown-item">Hotels</a></li>
                    <li><a href="" class="dropdown-item">Products</a></li>
                    <li><a href="" class="dropdown-item">Travel Tips</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="../about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">Gallary</a>
                </li>

              </ul>
              <button type="button" class="btn btn-primary rounded-pill py-2 px-1 ml-4" style="width: 150px;" onclick="openpopup()">
                <i class="fa fa-user">
                  Login
                </i>
              </button>
            </div>

          </div>
        </nav>


      </div>
    </header>
  </div>


  <!------top navibar------->
  <div class="container-fluid position-relative bg-dark px-5 d-none d-lg-block">
    <div class="row gx-3" style="margin-top: 70px;  ">

      <div class="col-lg-8  pt-2">
        <div class="d-inline-flex ">
          <div class="me-3 text-light"><i class="fa fa-map-marked-alt me-2"></i>No.16, Temple Street, Horana</div>
          <div class="me-3 text-light"><i class="fa fa-phone me-2"></i>+94 714 134 476</div>
          <div class="me-3 text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</div>
        </div>
      </div>

      <!--social button-->
      <div class="col-lg-4 text-center">
        <div class="d-inline-flex align-items-center">
          <a href="#" class="btn btn-sm rounded-pill bg-primary me-2">
            <i class="fab fa-twitter fw-normal"></i>
          </a>
          <a href="#" class="btn btn-sm rounded-pill bg-primary me-2">
            <i class="fab fa-facebook-f fw-normal"></i>
          </a>
          <a href="#" class="btn btn-sm rounded-pill bg-primary me-2">
            <i class="fab fa-youtube fw-normal"></i>
          </a>
          <a href="#" class="btn btn-sm rounded-pill bg-primary me-2">
            <i class="fab fa-linkedin-in fw-normal"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php
  if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
        echo $_SESSION['username'];
        unset($_SESSION['username']);
  }
  ?>

  <!--popup login/signup-->
  <div class="popup" id="popup">
    <section class="f-content forms">

      <!--login-->
      <div class="form login bg-transparent">

        <div class="container">

          <!-- Outer Row -->
          <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                      <img src="../../../admin/img/login.jpg" class="h-100 w-100" alt="">
                    </div>
                    <div class="col-lg-6">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
                        <?php
                        if (isset($_SESSION['logstatus']) && $_SESSION['logstatus'] != '') {
                          echo '<h5 class="text-danger">' . $_SESSION['logstatus'] . '</h5>';
                          unset($_SESSION['logstatus']);
                        }
                        ?>
                        <form class="user" action="includes/code.php" method="POST">
                          <div class="field input-feild m-0">
                            <input type="email" name="email" class="form-control form-control-user rounded-pill" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                          </div>
                          <div class="field input-feild mt-1 mb-1">
                            <input type="password" name="password" class="form-control form-control-user rounded-pill" id="exampleInputPassword" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" id="customCheck">
                              <label class="custom-control-label" for="customCheck">Remember
                                Me</label>
                            </div>
                          </div>
                          <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block rounded-pill">
                            Login
                          </button>
                          <hr>
                          <div class="media-option">
                            <a href="#" class="field facebook">
                              <i class='bx bxl-facebook facebook-icon'></i>
                              <span>Login with Facebook</span>
                            </a>
                          </div>
                          <div class="media-option">
                            <a href="#" class="field google">
                              <img src="img/homepage/google.png" alt="" class="google-img">
                              <span>Login with Google</span>
                            </a>
                          </div>
                        </form>
                        <hr>
                        <div class="text-center">
                          <a class="small fogotpasslogin" href="#">Forgot Password?</a>
                        </div>
                        <div class="form-link">
                          <span>Do you have no account? <a href="#" class="loglink signup-link">Signup</a></span>
                        </div>
                        <div class="field input-feild close-btn mb-0 ">
                          <button type="button" class="rounded-pill" onclick="closepopup()">close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>


      <!--*signup*-->
      <div class="form signup bg-transparent">
        <div class="form-content">

          <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-5 d-none d-lg-block">
                    <img src="../../admin/img/login.jpg" class="h-100 w-100" alt="">
                  </div>
                  <div class="col-lg-7">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                      </div>
                      <form class="user" action="includes/code.php" method="POST">
                        <div class="field input-feild row mt-0 ml-0">
                          <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                        </div>
                        <div class="field input-feild row mt-2 ml-0">
                          <input type="email" name="email" class="form-control " id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="field input-feild row mt-2 ml-0">
                          <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="field input-feild row mt-2 ml-0">
                          <input type="password" name="confirmpassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                        </div>
                        <button type="submit" name="registerbtn" class="btn btn-primary btn-user btn-block rounded-pill">
                          Register Account
                        </button>
                        <hr>
                        <div class="media-option">
                          <a href="#" class="field facebook">
                            <i class='bx bxl-facebook facebook-icon'></i>
                            <span>Login with Facebook</span>
                          </a>
                        </div>
                        <div class="media-option">
                          <a href="#" class="field google">
                            <img src="img/homepage/google.png" alt="" class="google-img">
                            <span>Login with Google</span>
                          </a>
                        </div>
                      </form>
                      <hr>
                      <div class="text-center">
                        <a class="small fogotpasssign" href="#">Forgot Password?</a>
                      </div>
                      <div class="form-link">
                        <span>Already have an account? <a href="#" class="loglink login-link">Login</a></span>
                      </div>
                      <div class="field input-feild close-btn mb-0">
                        <button type="button" class="rounded-pill" onclick="closepopup()">close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>


      <!--*fogotpassword*-->
      <div class="form forgetpassword bg-transparent">
        <div class="form-content">

          <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

              <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      <div class="col-lg-6 d-none d-lg-block bg-password-image">
                        <img src="../../admin/img/login.jpg" class="h-100 w-100" alt="">
                      </div>
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                            <p class="mb-4">We get it, stuff happens. Just enter your email address below
                              and we'll send you a link to reset your password!</p>
                          </div>
                          <form class="user">
                            <div class="field input-feild row mt-0 ml-0">

                              <input type="email" class="form-control form-control-user rounded-pill" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                            </div>
                            <a href="login.html" class="btn btn-primary btn-user rounded-pill btn-block text-decoration-none text-white">
                              Reset Password
                            </a>
                          </form>
                          <hr>
                          <div class="text-center">
                            <a class="small fogotpasssign" href="#">Create an Account!</a>
                          </div>
                          <div class="text-center">
                            <a class="small fogotpasslogin" href="#">Already have an account? Login!</a>
                          </div>
                          <div class="field input-feild close-btn mb-0">
                            <button type="button" class="rounded-pill" onclick="closepopup()">close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>
      </div>

    </section>
  </div>

<!--script for login popup-->
  <script>
    let pop = document.getElementById("popup");

    function openpopup() {
      pop.classList.add("openpopup");
    }

    function closepopup() {
      pop.classList.remove("openpopup");
    }
  </script>

