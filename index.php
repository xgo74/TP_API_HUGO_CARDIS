<?php
// Page principale qui affiche la carte avec la qualité de l'air
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualité de l'air - API World Air Quality</title>
    
    <!-- Bootstrap CSS pour un design moderne -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Leaflet pour la carte -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="styles.css">

    <script defer src="script.js"></script>
</head>
<body class="bg-light">

    <div class="container py-4">
        <h1 class="text-center mb-4">🌍 Qualité de l'Air en Temps Réel</h1>
        
        <div class="row">
            <div class="col-md-4">
                <!-- Formulaire de recherche -->
                <div class="card p-3 mb-3">
                    <h5>Rechercher une ville</h5>
                    <input type="text" id="city" class="form-control my-2" placeholder="Entrez une ville">
                    <button id="fetchAirQuality" class="btn btn-primary w-100">🔎 Rechercher</button>
                </div>

                <!-- Filtre AQI -->
                <div class="card p-3">
                    <h5>Filtrer par qualité de l'air</h5>
                    <select id="aqiFilter" class="form-select">
                        <option value="">Tous</option>
                        <option value="50">Bonne qualité (0-50)</option>
                        <option value="100">Moyenne (51-100)</option>
                        <option value="150">Mauvaise (101+)</option>
                    </select>
                </div>
            </div>

            <div class="col-md-8">
                <!-- Carte Leaflet -->
                <div id="map"></div>
                
                <!-- Loader (indicateur de chargement) -->
                <div id="loader" class="text-center mt-3 d-none">
                    <div class="spinner-border text-primary"></div>
                    <p>Chargement des données...</p>
                </div>

                <!-- Historique des recherches -->
                <div id="history" class="mt-3"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

