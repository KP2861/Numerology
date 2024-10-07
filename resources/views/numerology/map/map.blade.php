<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vastu Consultation - Select Location and Upload Map</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 300px;
            /* Reduced map height */
            width: 100%;
            margin-top: 10px;
        }

        .info {
            margin-top: 10px;
            font-size: 16px;
        }

        #messageBox {
            height: 100px;
        }

        .directions {
            margin-top: 10px;
        }

        .container {
            max-width: 600px;
            /* Center and limit width of the form */
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center pb-5">Vastu Consultation</h1>
        <form id="locationForm" enctype="multipart/form-data">
            <!-- New Fields -->
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName"
                    placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Enter your email address" required>
            </div>

            <div class="form-group">
                <label for="mobileNumber">Mobile Number:</label>
                <input type="text" class="form-control" id="mobileNumber" name="mobileNumber"
                    placeholder="Enter your mobile number" required>
            </div>

            <!-- Existing Fields -->
            <div class="form-group">
                <label for="fileInput">Upload Map (Civil Map / Rough Map):</label>
                <input type="file" class="form-control-file" id="fileInput" name="mapFile"
                    accept=".jpg, .jpeg, .png, .pdf">
            </div>

            {{-- <div class="form-group">
                <label for="direction">Direction (East, West, North, South):</label>
                <input type="text" class="form-control" id="direction" placeholder="East, West, North, South">
            </div> --}}

            <div class="form-group">
                <label for="search">Search Location:</label>
                <input type="text" class="form-control" id="search" placeholder="Enter a location">
            </div>

            <div class="form-group">
                <label for="map">Select on Map:</label>
                <div id="map"></div>
            </div>

            <div class="form-group">
                <label for="messageBox">Problem to be Looked For:</label>
                <textarea id="messageBox" class="form-control" name="problemMessage" placeholder="Describe the problem here..."></textarea>
            </div>

            <input type="hidden" id="latitude" name="latitude">
            <input type="hidden" id="longitude" name="longitude">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        let map, marker;

        function initMap() {
            const initialLocation = [20.5937, 78.9629]; // Center of India

            map = L.map('map').setView(initialLocation, 5); // Zoom level 5 for India

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            marker = L.marker(initialLocation, {
                draggable: true
            }).addTo(map);

            marker.on('dragend', function(event) {
                const latLng = event.target.getLatLng();
                updateLocationInfo(latLng.lat, latLng.lng);
            });

            document.getElementById('search').addEventListener('input', function() {
                const query = this.value;
                if (query.length > 2) {
                    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${query}&countrycodes=in`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.length > 0) {
                                const {
                                    lat,
                                    lon,
                                    display_name
                                } = data[0];
                                const location = [lat, lon];
                                map.setView(location, 13);
                                marker.setLatLng(location);
                                updateLocationInfo(lat, lon, display_name);
                            }
                        });
                }
            });
        }

        function updateLocationInfo(lat, lon, name = '') {
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lon;
            document.getElementById('latitudeValue').textContent = lat;
            document.getElementById('longitudeValue').textContent = lon;
            document.getElementById('locationName').textContent = name;

            const directionInfo = getDirectionInfo(lat, lon);
            document.getElementById('directionBox').textContent = directionInfo;
        }

        function getDirectionInfo(lat, lon) {
            const latDirection = lat > 0 ? 'North' : 'South';
            const lonDirection = lon > 0 ? 'East' : 'West';

            return `North: ${latDirection}\nSouth: ${latDirection}\nEast: ${lonDirection}\nWest: ${lonDirection}`;
        }

        window.onload = initMap;
    </script>
</body>

</html>
