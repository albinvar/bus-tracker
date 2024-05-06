<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bus Route Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #map {
            height: 500px;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans antialiased p-4">
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 dark:text-gray-100">Bus Route Map</h1>
    <div id="map" class="rounded-lg shadow-lg"></div>
</div>

<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
<script>
    var map = L.map('map').setView([
        {{ $bus->locationLogs->first()->latitude }},
        {{ $bus->locationLogs->first()->longitude }}
    ], 13); // Set initial view to the given location

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Generate some fake irregular coordinates for the bus route
    var coordinates = [
        @foreach($bus->locationLogs as $log)
        [{{ $log->latitude }}, {{ $log->longitude }}],
        @endforeach
    ];

    L.Routing.control({
        waypoints: coordinates.map(coord => L.latLng(coord[0], coord[1])),
        routeWhileDragging: true,
        lineOptions: {
            styles: [{color: '#3490dc', weight: 5, opacity: 0.7}]
        },
        router: L.Routing.osrmv1({
            language: 'en',
            profile: 'driving'
        })
    }).addTo(map);
</script>
</body>
</html>
