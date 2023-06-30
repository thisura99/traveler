<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


include('includes/uiheader.php');
include('includes/uinavbar.php');


?>


<style>
    .nav-link {
        font-size: 20px !important;
        font-weight: bold;
    }

    .nav-link.active {
        position: relative;
        color: #378c3f !important;
        text-decoration: none;
    }

    .nav-link.active::before {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #378c3f;
        /* Replace with your desired underline color */
    }



    .price-container {
        background-color: #f9f9f9;
        padding: 20px;
        text-align: center;
        width: 350px;
    }

    .price-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .price-left {
        text-align: left;
    }

    .price-value {
        font-size: 24px;
        font-weight: bold;
        margin-right: 5px;
    }

    .price-text {
        font-size: 16px;
        color: #555;
    }

    .price-right {
        text-align: right;
    }

    .discount {
        font-size: 14px;
        color: #f57c00;
        font-weight: bold;
    }

    .book-now-btn {
        display: inline-block;
        background-color: #ffffff;
        border: 2px solid #378c3f;
        /* Updated border style */
        color: #000000;
        /* Updated text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .book-now-btn:hover {
        background-color: #378c3f;
        color: #ffffff;
        /* Updated text color on hover */
    }

    .pos-fix {
        position: fixed;
        width: 350px;
        top: 800px;
        /* Adjust the value as needed */
        z-index: 9999;
        /* Adjust the z-index value to ensure it appears above other elements */
        transition: top 0.3s ease;
    }

    html {
        scroll-behavior: smooth;
    }
</style>



<div class="container mt-5">
    <h1>Swiss Paris Delight Group Departure 2023</h1>

    <div class="row">
        <div class="container-xxl py-5 destination">
            <div class="row g-3" data-aos="zoom-in" style="height: 350px;">
                <div class="col-lg-4 col-md-4">
                    <a href="#" class="d-block position-relative h-100 overflow-hidden">
                        <img src="img/kandy/queens_hotel_thumbnail.jpg" alt="" class="img-fluid h-100">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 start-0 m-3 py-1 px-2">9 ARCH</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12">
                            <a href="#" class="d-block position-relative overflow-hidden">
                                <img src="img/kandy/queens_hotel_thumbnail.jpg" alt="" class="img-fluid">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 start-0 m-3 py-1 px-2">9 ARCH</div>
                            </a>
                        </div>

                        

                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="d-block position-relative overflow-hidden">
                                <img src="img/kandy/queens_hotel_thumbnail.jpg" alt="" class="img-fluid">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 start-0 m-3 py-1 px-2">9 ARCH</div>
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="d-block position-relative overflow-hidden">
                                <img src="img/kandy/queens_hotel_thumbnail.jpg" alt="" class="img-fluid">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 start-0 m-3 py-1 px-2">9 ARCH</div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="#" class="d-block position-relative h-100 overflow-hidden">
                        <img src="img/kandy/queens_hotel_thumbnail.jpg" alt="" class="img-fluid h-100">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 start-0 m-3 py-1 px-2">9 ARCH</div>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <!-- HTML -->
            <div class="container mt-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link border-0 text-dark active" id="itinerary-tab" data-toggle="tab" href="#itinerary">ITINERARY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-0 text-dark" id="policies-tab" data-toggle="tab" href="#policies">POLICIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-0 text-dark" id="summary-tab" data-toggle="tab" href="#summary">SUMMARY</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="itinerary">


                        <div class="container mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Package Inclusions</h5>
                                    <ul class="list-group list-group-flush m-0">
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Tour Manager:</b> Service of an experienced
                                            MakeMyTrip Tour Manager</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>City Tour Of:</b> Paris</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Experience:</b> River Seine Cruise</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Accommodation in twin-bedded rooms in hotels
                                                as
                                                mentioned in the itinerary (or similar category hotels)</b></li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>5 Indian Dinners in:</b> Paris, Engelberg &
                                            Zurich
                                        </li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Meals, coach transfers, transfers, entrance
                                                fees,
                                                sightseeing activities, and surface transportations as indicated in
                                                the
                                                itinerary</b></li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Travel insurance:</b> valid for the duration
                                            of the
                                            holiday for tourists below 65 years of age</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Tips:</b> To drivers and guides are included
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!--day plan-->
                        <section class="ftco-section bg-light mb-4">
                            <div class="container">
                                <div class="row justify-content-start pt-4">
                                    <div class="col-md-7 heading-section ftco-animate">
                                        <h2 class="mb-2 text-black">Day Plan</h2>
                                        <div class="col-md-12 mb-3">
                                            <i class="fa fa-plane text-primary"></i> 2 Flight
                                            <i class="fa fa-hotel text-primary ml-5"></i> 3 Hotel
                                            <i class="fa fa-car text-primary ml-5"></i> 1 Transfer
                                            <i class="fa fa-person-skiing text-primary ml-5"></i> 6 Activity
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card col-md-12">
                                        <div class="card-header row">
                                            <div class="col-md-6">
                                                <a class="card-link text-black" style="font-size: 25px;" data-toggle="collapse" href="#day01" aria-expanded="true" aria-controls="menuone">Day 1 - Arrive into Paris</a>
                                            </div>
                                            <div class="col-md-6 text-right mt-2">
                                                INCLUDED:
                                                <i class="fa fa-plane text-primary mr-2"></i>1 Flight|
                                                <i class="fa fa-hotel text-primary mr-2"></i>1 Hotel|
                                                <i class="fa fa-car text-primary mr-2"></i>1 Transfer|
                                                <i class="fa fa-person-skiing text-primary mr-2"></i>1 Activity
                                            </div>
                                        </div>

                                        <div id="day01" class="collapse show">
                                            <div class="card-body">
                                                <p>
                                                    Your Swiss Paris Delight holiday package would begin with your arrival in the City of Lights – Paris. The city is celebrated for its beautiful plan, architecture, museums, bridges, cathedrals, parks, shopping, sidewalk cafés, wide and luxurious boulevards, elegant cuisine, and numerous monuments. A Make My Trip Tour Manager /Representative would greet you at the airport and help you with check-in at the hotel after Dinner at an Indian restaurant.
                                                    Overnight at a hotel in Paris /CDG
                                                </p>
                                                <hr>
                                                <div class="row  mb-2 mt-4">
                                                    <div class="col-md-4 ">
                                                        <img src="img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5 class="pb-0" style="font-size: 24px; font-weight: bold; line-height: 1.5;">
                                                            <i class="fas fa-utensils mr-2"></i> Day Meals
                                                        </h5>
                                                        <p class="pb-1 pt-0" style="font-size: 18px; font-weight: 500; line-height: 0.2;">Breakfest - Paris, France</p>
                                                        <p style="font-size: 16px; font-weight: 400; color: #555; line-height: 0.2;">Recipes</p>

                                                        <p class="pb-1 pt-2" style="font-size: 18px; font-weight: 500; line-height: 0.2;">Lunch - Paris, France</p>
                                                        <p style="font-size: 16px; font-weight: 400; color: #555; line-height: 0.2;">Recipes</p>

                                                        <p class="pb-1 pt-2" style="font-size: 18px; font-weight: 500; line-height: 0.2;">Dinner - Paris, France</p>
                                                        <p style="font-size: 16px; font-weight: 400; color: #555; line-height: 0.2;">Recipes</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row mt-4">
                                                    <div class="col-md-4 ">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <img src="img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <img src="img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src="img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5 class="pb-0" style="font-size: 24px; font-weight: bold; line-height: 1.5;">
                                                            <i class="fa fa-person-skiing mr-2"></i> Activites
                                                        </h5>
                                                        <p class="pb-1 pt-0" style="font-size: 18px; font-weight: 500; line-height: 0.2;">Activity Description</p>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>



                    </div>


                    <div class="tab-pane fade" id="policies">
                        <h4>POLICIES Content Goes Here</h4>
                    </div>
                    <div class="tab-pane fade" id="summary">
                        <h4>SUMMARY Content Goes Here</h4>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3">
            <div class="price-container pos-fix" id="fixed-price-container">
                <div class="price-info">
                    <div class="price-left">
                        <span class="price-value">$1,800</span>
                        <span class="price-text">Per Person</span>
                    </div>
                    <div class="price-right">
                        <span class="discount">10% off</span>
                    </div>
                </div>
                <a href="#" class="book-now-btn">Proceed to Book Online</a>
            </div>
            <div style="margin-top: 360px;">

            </div>
            <p>asfsadfsgdfagkjsfnhasdkjfhfkjgdfnasdsgdfhgsgasfsafgsagasdg</p>
        </div>


    </div>

</div>

<script>
    window.addEventListener('scroll', function() {
        var priceContainer = document.getElementById('fixed-price-container');
        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollPosition >= 300) {
            priceContainer.style.top = '100px';
        } else {
            priceContainer.style.top = '800px'; // Adjust the value to match the initial position
        }
    });
</script>


<?php
include('includes/uiscript.php');
include('includes/uifooter.php');
?>