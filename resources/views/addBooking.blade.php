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
                <div class="card-title">
                    <h4 align="center">
                        <p>Airport Transfers</p>
                    </h4>
                    <h5 align="center">
                        <p>PRE-BOOK YOUR TRANSFER FROM THE AIRPORT TO YOUR RESORT OR TO YOUR DESIRED DESTINATION SWIFTLY.
                        </p>
                    </h5>
                </div>
                {{-- <h2 class="card-title">Add Booking</h2> --}}
            </header>
            <div class="card-body">
                <div class="card-body">
                    <form action="http://travel-agent.localenv/transferResult" method="post">
                        <style>
                            {
                                box-sizing: border-box;
                            }

                            /* Set additional styling options for the columns*/
                            .column {
                                float: left;
                                width: 50%;
                            }

                            .row:after {
                                content: "";
                                display: table;
                                clear: both;
                            }
                        </style>
                        <div class="form-group row">
                            <div class=" form-group col-3">
                                <h5 style="color: black;">Trip Type</h5>
                                <select id="ddlPassport" onchange="ShowHideDiv()" style="width: 200px; height:50px;" name="booking_type">
                                    <option>Select the Travel Type</option>
                                    <option value="N">One way</option>
                                    <option value="Y">Return</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <h5>Pickup Point</h5>
                                <input style="width: 200px; height:50px;" type="text" name="origin"
                                    id="autocomplete" class="form-control" placeholder="Enter Pickup Location">
                            </div>
                            <div class="form-group col-3">
                                <h5>Drop Off Point</h5>
                                <input style="width: 200px; height:50px;" type="text" name="destination"
                                    id="autocomplete1" class="form-control" placeholder="Enter Drop Off Location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="row-3 ml-6 mr-4">
                                <h5>Pickup Date & Time</h5>
                                <input class="form-control" type="datetime-local" id="meeting-time" name="outwardDate"
                                    value="2023-06-12T19:30" style="width: 200px; height:50px;">
                            </div>
                            <div class="row-3 mr-4" id="dvPassport" style="display: none">
                                <h5>Return Date & Time</h5>
                                <input class="form-control" type="datetime-local" id="meeting-time" name="returnDate"
                                    value="2023-06-12T19:30" style="width: 200px; height:50px;">
                            </div>
                            <div class="row-3  mr-4">
                                <h5>No. of Passengers</h5>
                                <select id="1" style="width: 90px; height:50px;" name="adults">
                                    <option>Adults</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                                <select id="2" style="width: 90px; height:50px;" name="childs">
                                    <option>Child</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                                <select id="3" style="width: 90px; height:50px;" name="infants">
                                    <option>Infants</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-10">
                            <button type="button" class="btn-success" value="Search" name="Search">Search</button>
                                {{-- onclick="window.location='{{ URL::route('transfer') }}'" --}}

                            {{-- <button type="submit" class="btn-success" value="Search" name="Search">Search</button> --}}

                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- end: page -->
    </section>
    </div>


    </section>
@endsection
<script type="text/javascript">
    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddlPassport");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type='text/javascript'
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDHvjFk37MOLVvM4Sxev9Kx9NrKusGEVok&libraries=places&callback=initAutocomplete'>
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    });
</script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete')
        var autocomplete = new google.maps.places.Autocomplete(input)
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace()
            $('#latitude').val(place.geometry['location'].lat())
            $('#longitude').val(place.geometry['location'].lng())
            $("#latitudeArea").removeClass("d-none")
            $("#longtitudeArea").removeClass("d-none")
        });
    }
</script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete1')
        var autocomplete = new google.maps.places.Autocomplete(input)
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace()
            $('#latitude').val(place.geometry['location'].lat())
            $('#longitude').val(place.geometry['location'].lng())
            $("#latitudeArea").removeClass("d-none")
            $("#longtitudeArea").removeClass("d-none")
        });
    }
</script>
