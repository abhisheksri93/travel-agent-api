<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Google Autocomplete Address Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Implement Google Autocomplete Address in Laravel 8</h2>
        <div class="form-group">
            <label>Location/City/Address</label>
            <input type="text" name="autocomplete" id="autocomplete" class="form-control"
                placeholder="Choose Location">
        </div>
        {{-- <div class="form-group" id="latitudeArea">
            <label>Latitude</label>
            <input type="text" id="latitude" name="latitude" class="form-control">
        </div>
        <div class="form-group" id="longtitudeArea">
            <label>Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control">
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
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
</body>

</html>
