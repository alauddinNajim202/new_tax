<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Location Search</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Search or Click for a Location</h2>
        <input id="locationInput" type="text" placeholder="Enter a location" style="width: 100%; margin-bottom: 10px;">
        <div id="map" style="height: 400px;"></div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7ias7CMBPanjqPisVXwhXXVth21Cl5Y&libraries=places"></script>
    <script>
        $(document).ready(function() {
            var map;
            var marker;
            var defaultLocation = { lat: 23.8103, lng: 90.4125 }; // Default location

            var mapOptions = {
                center: defaultLocation,
                zoom: 14,
            };

            map = new google.maps.Map(document.getElementById('map'), mapOptions);

            marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                title: 'Default Location',
                draggable: true // Allow dragging to fine-tune the position
            });

            var geocoder = new google.maps.Geocoder();
            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('locationInput'));
            autocomplete.bindTo('bounds', map);

            // Handle place search from the input box
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    alert("No details available for input: '" + place.name + "'");
                    return;
                }

                var locationData = {
                    name: place.name,
                    latitude: place.geometry.location.lat(),
                    longitude: place.geometry.location.lng()
                };

                // Move the marker to the searched location
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(14);
                }
                marker.setPosition(place.geometry.location);
                marker.setTitle(place.name);

                // Save the data via AJAX
                saveLocation(locationData);
            });

            // Handle map click event to get latitude and longitude
            map.addListener('click', function(event) {
                var clickedLocation = {
                    latitude: event.latLng.lat(),
                    longitude: event.latLng.lng()
                };

                // Set the marker position where the map was clicked
                marker.setPosition(event.latLng);
                marker.setTitle("Clicked Location");

                // Use reverse geocoding to get the location name
                geocoder.geocode({ 'location': event.latLng }, function(results, status) {
                    if (status === 'OK' && results[0]) {
                        clickedLocation.name = results[0].formatted_address;

                        // Save the clicked location data via AJAX
                        saveLocation(clickedLocation);
                    } else {
                        alert('Location name not found. Saving coordinates only.');
                        clickedLocation.name = 'Unknown location';
                        saveLocation(clickedLocation);
                    }
                });
            });

            // Function to save location data via AJAX
            function saveLocation(locationData) {
                $.ajax({
                    url: '{{route('locations.store')}}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        name: locationData.name,
                        latitude: locationData.latitude,
                        longitude: locationData.longitude
                    },
                    success: function(response) {
                        alert(response.success);
                    },
                    error: function(xhr) {
                        alert('An error occurred: ' + xhr.responseText);
                    }
                });
            }
        });
    </script>
</body>
</html>
