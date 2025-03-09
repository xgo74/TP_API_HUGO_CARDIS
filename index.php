<?php
// Page principale qui affiche la carte avec la qualité de l'air
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualité de l'air avec API World Air Quality</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script defer src="script.js"></script>
    <style>
        #map { height: 500px; }
    </style>
</head>
<body>
    <h1>Carte de la Qualité de l'Air</h1>
    <input type="text" id="city" placeholder="Entrez une ville">
    <button id="fetchAirQuality">Afficher la qualité de l'air</button>
    <select id="aqiFilter">
        <option value="">Tous</option>
        <option value="50">Bonne qualité</option>
        <option value="100">Moyenne</option>
        <option value="150">Mauvaise</option>
    </select>
    <div id="map"></div>
    <div id="history"></div>
</body>
</html>  
