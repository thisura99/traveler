<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


include('includes/uiheader.php');
include('includes/uinavbar.php');


?>


<style>
    .wnav-link {
        font-size: 20px;
        font-weight: bold;
    }

    .wnav-link.active {
        position: relative;
        color: #378c3f !important;
        text-decoration: none;
    }

    .wnav-link.active::before {
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
        border: 4px solid #000000;
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
        background-color: #378c3f;
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
        background-color: #f57c00;
        color: #000000;
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
    <h1>Swiss Paris Delight Departure 2023</h1>

    <!--images-->
    <div class="row pb-5">
        <div class="container-xxl py-5 destination">
            <div class="container">
                <div class="row g-3" data-aos="zoom-in">
                    <div class="col-lg-12 col-md-12">
                        <div class="row g-3" style="height:250px ;">

                            <div class="col-lg-4 col-md-4">
                                <a href="#" class="d-block position-relative overflow-hidden h-100">
                                    <img src="../../img/homepage/9Arch.jpg" class="h-100" alt="" class="img-fluid">
                                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">9 ARCH</div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="col-lg-12 col-md-12">
                                    <a href="#" class="d-block position-relative overflow-hidden h-100">
                                        <img src="../../img/homepage/9Arch.jpg" class="h-100" alt="" class="img-fluid">
                                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">9 ARCH</div>
                                    </a>
                                </div>
                                <br>
                                <div class="col-lg-12 col-md-12">
                                    <a href="#" class="d-block position-relative overflow-hidden h-100">
                                        <img src="../../img/homepage/9Arch.jpg" class="h-100" alt="" class="img-fluid">
                                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">9 ARCH</div>
                                    </a>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="#" class="d-block position-relative overflow-hidden h-100">
                                    <img src="../../img/homepage/9Arch.jpg" class="h-100" alt="" class="img-fluid">
                                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">9 ARCH</div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <!--dayplands-->
    <div class="row mt-5">
        <div class="col-md-9">
            <!-- HTML -->
            <div class="container mt-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="wnav-link nav-link border-0 text-dark active" id="itinerary-tab" data-toggle="tab" href="#itinerary">ITINERARY</a>
                    </li>
                    <li class="nav-item">
                        <a class="wnav-link nav-link border-0 text-dark" id="policies-tab" data-toggle="tab" href="#policies">POLICIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="wnav-link nav-link border-0 text-dark" id="summary-tab" data-toggle="tab" href="#summary">SUMMARY</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="itinerary">

                        <div class="container mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Activities & Inclusions in this package</h5>
                                    <ul class="list-group list-group-flush m-0">
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Tour Manager :</b> Service of an experienced
                                            Traveler Tour Manager</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>City Tour Of :</b> Paris</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Number of Location : </b> 8</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Accommodation : </b> In twin-bedded rooms in hotels as mentioned in the itinerary (or similar category hotels)</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Meals :</b> 5 Indian Dinners in Paris, Engelberg & Zurich</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Travel insurance:</b> valid for the duration of the holiday for tourists below 65 years of age</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Other :</b> coach transfers, transfers, entrance fees, sightseeing activities and surface transportations as indicated in the itinerary.</li>
                                        <li class="list-group-item pt-0 pb-0 border-0"><b>Tips :</b> To drivers and guides are included.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!--day plan-->
                        <section class="ftco-section bg-light">
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
                                    <div class="col-md-12 ftco-animate">

                                        <div class="card">
                                            <div class="card-header row">
                                                <div class="col-md-6">
                                                    <a class="card-link text-black" style="font-size: 25px;" data-toggle="collapse" href="#day01" aria-expanded="true" aria-controls="day01">Day 1 - Arrive into Paris</a>
                                                </div>
                                                <div class="col-md-6 text-right mt-2 d-none d-lg-block">
                                                    INCLUDED:
                                                    <i class="fa fa-plane text-primary mr-2"></i>1 Flight|
                                                    <i class="fa fa-hotel text-primary mr-2"></i>1 Hotel|
                                                    <i class="fa fa-car text-primary mr-2"></i>1 Transfer|
                                                    <i class="fa fa-person-skiing text-primary mr-2"></i>1 Activity
                                                </div>
                                            </div>
                                            <div id="day01" class="collapse">
                                                <div class="card-body">
                                                    <p>
                                                        Your Swiss Paris Delight holiday package would begin with your arrival in the City of Lights – Paris. The city is celebrated for its beautiful plan, architecture, museums, bridges, cathedrals, parks, shopping, sidewalk cafés, wide and luxurious boulevards, elegant cuisine, and numerous monuments. A Make My Trip Tour Manager /Representative would greet you at the airport and help you with check-in at the hotel after Dinner at an Indian restaurant.
                                                        Overnight at a hotel in Paris /CDG
                                                    </p>
                                                    <hr>
                                                    <div class="row  mb-2 mt-4">
                                                        <div class="col-md-4 ">
                                                            <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
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
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                                <div class="col-md-6 mb-4">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
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

                                        <div class="card">
                                            <div class="card-header row">
                                                <div class="col-md-6">
                                                    <a class="card-link text-black" style="font-size: 25px;" data-toggle="collapse" href="#day02" aria-expanded="false" aria-controls="day02">Day 2 - Arrive into Paris</a>
                                                </div>
                                                <div class="col-md-6 text-right mt-2 d-none d-lg-block">
                                                    INCLUDED:
                                                    <i class="fa fa-plane text-primary mr-2"></i>1 Flight|
                                                    <i class="fa fa-hotel text-primary mr-2"></i>1 Hotel|
                                                    <i class="fa fa-car text-primary mr-2"></i>1 Transfer|
                                                    <i class="fa fa-person-skiing text-primary mr-2"></i>1 Activity
                                                </div>
                                            </div>
                                            <div id="day02" class="collapse">
                                                <div class="card-body">
                                                    <p>
                                                        Your Swiss Paris Delight holiday package would begin with your arrival in the City of Lights – Paris. The city is celebrated for its beautiful plan, architecture, museums, bridges, cathedrals, parks, shopping, sidewalk cafés, wide and luxurious boulevards, elegant cuisine, and numerous monuments. A Make My Trip Tour Manager /Representative would greet you at the airport and help you with check-in at the hotel after Dinner at an Indian restaurant.
                                                        Overnight at a hotel in Paris /CDG
                                                    </p>
                                                    <hr>
                                                    <div class="row  mb-2 mt-4">
                                                        <div class="col-md-4 ">
                                                            <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
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
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                                <div class="col-md-6 mb-4">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
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

                                        <div class="card">
                                            <div class="card-header row">
                                                <div class="col-md-6">
                                                    <a class="card-link text-black" style="font-size: 25px;" data-toggle="collapse" href="#day03" aria-expanded="false" aria-controls="day03">Day 3 - Arrive into Paris</a>
                                                </div>
                                                <div class="col-md-6 text-right mt-2 d-none d-lg-block">
                                                    INCLUDED:
                                                    <i class="fa fa-plane text-primary mr-2"></i>1 Flight|
                                                    <i class="fa fa-hotel text-primary mr-2"></i>1 Hotel|
                                                    <i class="fa fa-car text-primary mr-2"></i>1 Transfer|
                                                    <i class="fa fa-person-skiing text-primary mr-2"></i>1 Activity
                                                </div>
                                            </div>
                                            <div id="day03" class="collapse">
                                                <div class="card-body">
                                                    <p>
                                                        Your Swiss Paris Delight holiday package would begin with your arrival in the City of Lights – Paris. The city is celebrated for its beautiful plan, architecture, museums, bridges, cathedrals, parks, shopping, sidewalk cafés, wide and luxurious boulevards, elegant cuisine, and numerous monuments. A Make My Trip Tour Manager /Representative would greet you at the airport and help you with check-in at the hotel after Dinner at an Indian restaurant.
                                                        Overnight at a hotel in Paris /CDG
                                                    </p>
                                                    <hr>
                                                    <div class="row  mb-2 mt-4">
                                                        <div class="col-md-4 ">
                                                            <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
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
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                                <div class="col-md-6 mb-4">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <img src="../img/kandy/card_queens_hotel.jpg" alt="" style="width: 100%; height: auto;">
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
                        <h4>Terms and Conditions</h4>

                        <h5>Important Information</h5>
                        <p>

                            Airport pick and drop service will only be provided to the customer who have booked such service along with the air package.
                            Hotels & Airlines mentioned in the PDF in only tentative in nature and the actual hotel offered may differ from the one mentioned in the PDF.
                            In case of rejection of visa, refund will be provided as per the cancellation policy for the package.
                            In case the payment schedule as mentioned in the PDF is not followed, booking will be cancelled by MMT, after attempting to get in touch with the customer seeking the payment. On cancellation of the booking, the amount paid by the customer shall be forfeited.
                            Please ensure that you meet MakeMyTrip Airport Representative within 1 hour of landing of the flights.
                            Kindly note that the hotels provided in the package are situated on the outskirts of the cities, ensuring smooth inter-city transfer while avoiding city traffic.
                            In the event that a customer damages hotel property, MakeMyTrip disclaims all responsibility for any fees assessed to the customer, as well as any additional fees assessed for using the room's minibar or for any other costs not specifically mentioned in the vacation package.
                            In the cases where a third person is also sharing the room, they will be provided with an additional mattress or a roll-away bed.
                            Kindly ensure that you abide by the timeline given by the Holiday Manager for the activities.
                            Kindly note that the average hotel room size is smaller as compared to the room sizes available in India.
                            We offer Indian dinners (if included in the package), but kindly note that there might be variation in taste as compared to the food offered in India.
                            Optional activities are not part of the package and may be included on payment of additional charges.
                            MakeMyTrip only provide visa service and plays no role in the grant or rejection of visa. The decision for the grant or rejection of visa is at the sole discretion of the concerned embassy/high commission.
                            In case, transit visa is required by the customer, the responsibility for obtaining the same shall lie on the customer.
                            Click here to know more about your complimentary Insurance:
                            https://promos.makemytrip.com/Reliance-Corporate-Short-Term-Policy_MMT.html
                            Please expect to receive your vouchers 72 hours before your departure date (subject to full payment of your package cost
                            In case your package needs to be cancelled due to any natural calamity, weather conditions etc. MakeMyTrip shall strive to give you the maximum possible refund subject to the agreement made with our trade partners/vendors
                            The passenger names in the booking form should be exactly match their names as per passports. MakeMyTrip will not bear any liability for the name change fee, if incorrect names and ages have been added at the time of booking
                            Please note that if your package includes a flight It is on similar basis. It can be mornong, afternoon, evening or night arrival. It can be from different hub also but MMT will make the arragements for internal flight.
                            Please ensure that baggage and any other upgrade requirements (if any) are given to our Travel Expert latest by 5 days before the date of departure. The cost of such upgrade shall be borne by the customer
                            Standard check-in time at the hotel is normally 3:00 pm and check-out is 11:00 am. An early check-in, or a late check-out is solely based on the discretion of the concerned hotel
                            In the eventuality of the selected hotel being not available for booking, an alternate arrangement will be offered to the customer in another hotel of a similar category
                            Kindly be on time for your activities, tours and transfers as stipulated in the handover vouchers (reporting time), since foreign countries are quite strict about following a schedule, else you might miss your services in case of delay from your side and no refund will be provided for these missed activities by MakeMyTrip
                            For queries regarding cancellations and refunds, please refer to our Cancellation Policy.
                            Disputes, if any, shall be subject to the exclusive jurisdiction of the courts in New Delhi.
                            For any paid activity which is non-operational due to any unforeseen reason, we will process refund & same should reach the guest within 30 days of processing the refund. Also, for any activity which is complimentary and not charged to MMT & guest, no refund will be processed.
                            We operate group at a minimum strength of 15 pax or else shift to next operational day.
                            Makemytrip has all the rights to cancel the package and shift to next departure date or customer has the option to choose other package or Europamundo or Fit at same cost
                        </p>
                        <h5>Exclusions</h5>
                        <ul>
                            <li>Cost of extension of the validity of your holiday.</li>
                            <li>Cost of any Suggested or Optional Excursions/Tours/Activities</li>
                            <li>Expenses of personal nature such as laundry, wines, telephone charges, mineral water and other things not mentioned in the itinerary/inclusions</li>
                            <li>Food and drinks not part of the included meals</li>
                            <li>Anything not specifically mentioned in Inclusions list</li>
                            <li>Departure/Arrival transfer to airport/hotel for land only customers</li>
                        </ul>






                        <h5>Terms and Conditions</h5>
                        <ul>
                            <li>Airport pick and drop service will only be provided to the customer who have booked such service along with the air package.</li>
                            <li>For land only customer transfers will be given in return only till Zurich, in case frankfurt required take flight after 9 PM night.</li>
                            <li>Hotels & Airlines mentioned in the PDF in only tentative in nature and the actual hotel offered may differ from the one mentioned in the PDF.</li>
                            <li>In case of rejection of visa, refund will be provided as per the cancellation policy for the package.</li>
                            <li>In case the payment schedule as mentioned in the PDF is not followed, booking will be cancelled by MMT, after attempting to get in touch with the customer seeking the payment. On cancellation of the booking, the amount paid by the customer shall be forfeited.</li>
                            <li>Please ensure that you meet MakeMyTrip Airport Representative within 1 hour of landing of the flights.</li>
                            <li>Kindly note that the hotels provided in the package are situated on the outskirts of the cities, ensuring smooth inter-city transfer while avoiding city traffic.</li>
                            <li>In the event that a customer damages hotel property, MakeMyTrip disclaims all responsibility for any fees assessed to the customer, as well as any additional fees assessed for using the room's minibar or for any other costs not specifically mentioned in the vacation package.</li>
                            <li>In the cases where a third person is also sharing the room, they will be provided with an additional mattress or a roll-away bed.</li>
                            <li>Kindly ensure that you abide by the timeline given by the Holiday Manager for the activities.</li>
                            <li>Kindly note that the average hotel room size is smaller as compared to the room sizes available in India.</li>
                            <li>We offer Indian dinners (if included in the package), but kindly note that there might be variation in taste as compared to the food offered in India.</li>
                            <li>Optional activities are not part of the package and may be included on payment of additional charges.</li>
                            <li>MakeMyTrip only provide visa service and plays no role in the grant or rejection of visa. The decision for the grant or rejection of visa is at the sole discretion of the concerned embassy/high commission.</li>
                            <li>In case, transit visa is required by the customer, the responsibility for obtaining the same shall lie on the customer.</li>
                            <li>Click here to know more about your complimentary Insurance: https://promos.makemytrip.com/Reliance-Corporate-Short-Term-Policy_MMT.html</li>
                            <li>Please expect to receive your vouchers 72 hours before your departure date (subject to full payment of your package cost</li>
                            <li>In case your package needs to be cancelled due to any natural calamity, weather conditions etc. MakeMyTrip shall strive to give you the maximum possible refund subject to the agreement made with our trade partners/vendors</li>
                            <li>The passenger names in the booking form should be exactly match their names as per passports. MakeMyTrip will not bear any liability for the name change fee, if incorrect names and ages have been added at the time of booking</li>
                            <li>Please note that if your package includes a flight It is on similar basis. It can be mornong, afternoon, evening or night arrival. It can be from different hub also but MMT will make the arragements for internal flight.</li>
                            <li>Please ensure that baggage and any other upgrade requirements (if any) are given to our Travel Expert latest by 5 days before the date of departure. The cost of such upgrade shall be borne by the customer</li>
                            <li>Standard check-in time at the hotel is normally 3:00 pm and check-out is 11:00 am. An early check-in, or a late check-out is solely based on the discretion of the concerned hotel</li>
                            <li>In the eventuality of the selected hotel being not available for booking, an alternate arrangement will be offered to the customer in another hotel of a similar category</li>
                            <li>Kindly be on time for your activities, tours and transfers as stipulated in the handover vouchers (reporting time), since foreign countries are quite strict about following a schedule, else you might miss your services in case of delay from your side and no refund will be provided for these missed activities by MakeMyTrip</li>
                            <li>For queries regarding cancellations and refunds, please refer to our Cancellation Policy.</li>
                            <li>Disputes, if any, shall be subject to the exclusive jurisdiction of the courts in New Delhi.</li>
                            <li>For any paid activity which is non-operational due to any unforeseen reason, we will process refund & same should reach the guest within 30 days of processing the refund. Also, for any activity which is complimentary and not charged to MMT & guest, no refund will be processed.</li>
                            <li>We operate group at a minimum strength of 15 pax or else shift to next operational day.</li>
                            <li>Makemytrip has all the rights to cancel the package and shift to next departure date or customer has the option to choose other package or Europamundo or Fit at same cost</li>
                        </ul>
                    </div>


                    <div class="tab-pane fade mb-4" id="summary">


                        <h6><i class="fas fa-plane"></i>
                            Arrival in Paris by Vistara Flight UK-021 | Departing on 07 Jul, 01:45 PM | Arriving on 07 Jul, 07:40 PM |
                            Includes Check In Baggage<br>
                            <i class="fas fa-car"></i>
                            Airport to hotel in Paris
                        </h6>

                        <h4>Day 1</h4><i class="fas fa-hotel mr-2"></i>Check in to Golden Tulip Cdg - Holidays Selections Fd, 3 Star<br>
                        <h4>Day 2</h4><i class="fas fa-utensils mr-2"></i>Indian Dinner<br>
                        <h4>Day 3</h4><i class="fas fa-hotel mr-2"></i>Day Meals: Breakfast : Included in Paris<br>
                        <h4>Day 4</h4><i class="fas fa-utensils mr-2"></i>Day Meals: Dinner : Included in Engelberg<br>
                        <h4>Day 5</h4><i class="fas fa-utensils mr-2"></i>Day Meals: Breakfast & Dinner : Included in Engelberg<br>
                        <h4>Day 6</h4><i class="fas fa-hotel mr-2"></i>Check in to Novotel Airport Messe Holidays Selections Fd, 3 Star<br>
                        <h4>Day 7</h4><i class="fas fa-hotel mr-2"></i>Day Meals: Breakfast : Included in Zurich<br>
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
            <div style="margin-top: 150px;">
                <!--cards/Right side-->
                <div class="col-md-12 col-lg-12 col-xl-12 p-2 d-none d-lg-block">
                    <div class="row">
                        <h4>Package Fiter</h4>
                        <div class="row">
                            <div class="sidebar-wrap bg-light ftco-animate">
                                <h5 class="heading mb-4 pt-2">Find City</h5>
                                <form action="#">
                                    <div class="fields">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Destination, City">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-wrap one-third">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control" placeholder="Keyword search">
                                                    <option value="">Select Location</option>
                                                    <option value="">San Francisco USA</option>
                                                    <option value="">Berlin Germany</option>
                                                    <option value="">Lodon United Kingdom</option>
                                                    <option value="">Paris Italy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                                        </div>
                                        <div class="form-group">
                                            <div class="range-slider">
                                                <span>
                                                    <input type="number" value="25000" min="0" max="120000" /> -
                                                    <input type="number" value="50000" min="0" max="120000" />
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Search" class="btn btn-primary w-100 py-3 px-5">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">

                            <div class="sidebar-wrap bg-light ftco-animate">
                                <h5 class="heading mb-4 pt-2">Star Rating</h5>
                                <form method="post" class="star-rating">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star text-black"></i><i class="fa fa-star text-black"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star text-black"></i></span></p>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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