@extends('layouts.app')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Tables</span></li>
                <li><span>Editable</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            </div>
            <h2 class="card-title">Add Booking</h2>
        </header>
        <div class="card-body">
            <div class="clearfix"></div>
            <div class="mainBox">
                <div class="resultBox tsminheight">
                <form method="POST" action="#" name="goBackForm" id="goBackForm">
                <input type="hidden" name="back_booking_type" value="1">
                <input type="hidden" name="back_pickuplocaton" value="Dubai International Airport (DXB) - Dubai - United Arab Emirates">
                <input type="hidden" name="back_pickupid" value="ChIJaQ4mkwZdXz4R6e5IegDUleY">
                <input type="hidden" name="back_pickupMainName" value="Dubai International Airport (DXB)">
                <input type="hidden" name="back_pickupSecName" value="">
        
                <input type="hidden" name="back_dropofflocaton" value="The Dubai Mall - Dubai - United Arab Emirates">
                <input type="hidden" name="back_dropoffid" value="ChIJB1zIKShoXz4RnbaTPPup7aU">
                <input type="hidden" name="back_dropoffMainName" value="The Dubai Mall">
                <input type="hidden" name="back_dropoffSecName" value="Dubai - United Arab Emirates">
                <input type="hidden" name="back_countryCode" value="AE">
                <input type="hidden" name="back_serviceAvailable" value="0">
        
                <input type="hidden" name="back_pickup_date_time" value="21/02/2023 12:00">
                <input type="hidden" name="back_return_date_time" value="20/02/2023 12:00">
                <input type="hidden" name="back_adults" value="1">
                <input type="hidden" name="back_childs" value="0">
                <input type="hidden" name="back_infants" value="0">
                </form>
                <div class="clearfix"></div>
                            <h3>Airport Transfer - One Way (1 Adult, 0 Child, 0 Infants) 
                    <div class="selectAirport1"><strong>Pickup: </strong>Dubai International Airport (DXB)</div><br>
                        <div class="selectAirport1"><strong>Drop Off: </strong>The Dubai Mall</div></h3>
                                <p class="col-md-3">Pickup: 21-Feb-2023 12:00 PM</p>
                                <div class="clearfix"></div>
                    <p class="col-md-3">Distance: 15 KM</p>
                    <p class="col-md-3">Duration: About 15 mins</p>
                                    <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Audi A6, Toyota Prius or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>2 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/audi1.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 64</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4g">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Audi A6, BMW, Mercedes Benz E-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>2 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/bmw.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 67</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4k">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [BMW, Cadillac, Mercedes Benz E-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                            <p>Free 60 minutes wait time for airport pickups, 15 mins for all others</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/bmw.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 72</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4I">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Mercedes Benz E-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>3 Luggages</li>
                        </ul>
                                            <p>Your Driver Will Meet you in the Arrivals hall, Help with your luggage and escort you to your vehicle. Just look for the friendly face holding your name.</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/merced.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 75</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Zw">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Sedan or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>3 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/Sedan.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 77</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="ag">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Ford Tourneo or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>8 Passengers</li>
                            <li>5 Luggages</li>
                        </ul>
                                            <p>If you are being picked up from an airport, the driver will wait for you Upto 45 minutes after arrival. for all other pick-up locations, the driver will wait Upto 15 minutes.</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/ford-tourneo.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 77</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="bg">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Skoda Octavia or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>4 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                            <p>If you are being picked up from an airport, the driver will wait for you Upto 45 minutes after arrival. for all other pick-up locations, the driver will wait Upto 15 minutes.</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/skoda.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 78</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="bQ">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Mercedes Benz E-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/merced.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 78</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4U">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Mercedes Benz V-Class, Ford Tourneo or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>5 Passengers</li>
                            <li>5 Luggages</li>
                        </ul>
                                            <p>Your Driver Will Meet you in the Arrivals hall, Help with your luggage and escort you to your vehicle. Just look for the friendly face holding your name.</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/ford-tourneo.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 86</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="aA">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Luxury Sedan or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>3 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/luxury-sedan.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 89</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="bA">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Cadillac, Mercedes Benz V-Class, Toyota Alphard, Chevrolet Suburban or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>5 Passengers</li>
                            <li>5 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/Mercedes-V-Class.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 95</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4M">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [SUV, Sedan or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>6 Passengers</li>
                            <li>4 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/suv.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 98</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="aw">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Ford Tourneo or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>8 Passengers</li>
                            <li>5 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/ford-tourneo.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 111</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4Y">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Mercedes Benz S-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>3 Luggages</li>
                        </ul>
                                            <p>Your Driver Will Meet you in the Arrivals hall, Help with your luggage and escort you to your vehicle. Just look for the friendly face holding your name.</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/merced.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 112</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="aQ">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Audi A6, BMW, Mercedes Benz S-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/audi1.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 119</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4Q">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Mercedes Benz S-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>3 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/merced.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 123</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4c">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Mercedes Benz S-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>3 Passengers</li>
                            <li>3 Luggages</li>
                        </ul>
                                            <p>If you are being picked up from an airport, the driver will wait for you Upto 45 minutes after arrival. for all other pick-up locations, the driver will wait Upto 15 minutes.</p>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/merced.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 136</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="bw">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                                       <div class="servicesBox transferService">
                        <div class="serText">
                        <div class="col-md-8">
                        <h3>Private Transfer [Audi A6, BMW, Mercedes Benz S-Class or similar]</h3>
                         <p>Transfer Location: Dubai International Airport (DXB) to The Dubai Mall</p>
                        <ul>
                            <li>2 Passengers</li>
                            <li>2 Luggages</li>
                        </ul>
                                        </div>
                        <div class="col-md-4"><img src="https://airportservices.ae/assets/transfer_services/merced.png" width="100%"></div>
                        </div><!-- serText -->
                        <div class="serPrice" id="hp_price">
                         <div class="pTop"> <small>Per Vehicle</small> </div>
                        <strong id="resultPrice">USD 411</strong>
                         <br>
                            <form action="https://airportservices.ae/transferForm" method="POST">	
                            <!-- --------------------Booking info---------------- -->			 
                            <input type="hidden" name="bookingType" value="Zw">
                            <input type="hidden" name="pickupInfo" value="ebq8vqGCZqDe24bOfrKntqHRaHyNnXqn39mZVFVWt9mOy49YvNLf0aWhiaqfweHVrFFznOXUm9yaWJuow65cVktZ">
                            <input type="hidden" name="dropupInfo" value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                            <input type="hidden" name="distMatrix" value="Z4eWl2NiZ1PgzZrd">
                            <input type="hidden" name="pickupDateTime" value="aIOipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="returnDateTime" value="aIKipHJgZGOll0ybWHKjlA">
                            <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                            <input type="hidden" name="TsFee" value="Z4o">
                            <!-- --------------------Transfer info---------------- -->
                            <input type="submit" class="bookBtn" name="book_now" value="Book Now"/>
                         </form>
                        </div><!-- serPrice -->
                        </div><!-- serviceBox -->
                               </div><!-- resultBox -->
                </div><!-- mainBox -->
            <style>    
        .hpbook {        padding: 10px 20px 10px 20px;        margin: 0px;        font-size:14px;    }    #hp_price{background: #f2f3f5;padding-top:8px;}    #resultPrice{        font-size: 20px;        font-weight: 400;        color: #1fcc75;        display:block;    }    table {        font-family: arial, sans-serif;        border-collapse: collapse;        width: 100%;    }    td, th {        border: 1px solid #dddddd;        text-align: left;        padding: 8px;    }
        </style>
    </div>
</section>


</section>
@endsection