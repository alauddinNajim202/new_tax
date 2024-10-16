<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Location Search</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Latest glyphonic cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Search for a Location</h2>
        <input id="locationInput" type="text" placeholder="Enter a location" style="width: 100%; margin-bottom: 10px;">
        <div id="map" style="height: 400px;"></div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7ias7CMBPanjqPisVXwhXXVth21Cl5Y&libraries=places"></script>
    <script>
        $(document).ready(function() {
            var map;
            var marker;
            var defaultLocation = { lat: 23.8103, lng: 90.4125 }; // Default location

            // Initialize the map with the default location
            var mapOptions = {
                center: defaultLocation, // Set the initial center to the default location
                zoom: 14, // Set the zoom level
            };

            map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Initialize a marker at the default position
            marker = new google.maps.Marker({
                position: defaultLocation, // Set the initial position to the default location
                map: map,
                title: 'Default Location'
            });

            // Create a Geocoder instance
            var geocoder = new google.maps.Geocoder();

            // Create an Autocomplete instance
            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('locationInput'));
            autocomplete.bindTo('bounds', map);

            // Handle the place selection event
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and pressed "Enter"
                    alert("No details available for input: '" + place.name + "'");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(14); // Adjust the zoom level as needed
                }

                // Update the marker position
                marker.setPosition(place.geometry.location);
                marker.setTitle(place.name);
            });

            // Handle the search functionality on Enter key press
            $('#locationInput').on('keypress', function(event) {
                if (event.which === 13) { // Check if Enter key is pressed
                    var location = $(this).val();

                    // Geocode the location
                    geocoder.geocode({ 'address': location }, function(results, status) {
                        if (status === 'OK') {
                            // Update the map center and marker position
                            map.setCenter(results[0].geometry.location);
                            marker.setPosition(results[0].geometry.location); // Update the marker's position
                        } else {
                            alert('Location not found: ' + status);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
