document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("fetchAirQuality");
    const cityInput = document.getElementById("city");
    const aqiFilter = document.getElementById("aqiFilter");
    const historyDiv = document.getElementById("history");
    const loader = document.getElementById("loader");
    
    // Initialisation de la carte centrée sur la France
    const map = L.map('map').setView([48.8566, 2.3522], 6);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    button.addEventListener("click", function() {
        const city = cityInput.value.trim();
        if (!city) {
            alert("Veuillez entrer une ville !");
            return;
        }

        loader.classList.remove("d-none"); // Afficher le loader

        fetch(`search.php?city=${city}`)
            .then(response => response.json())
            .then(data => {
                loader.classList.add("d-none"); // Cacher le loader
                
                // Nettoyer la carte avant de rajouter de nouveaux marqueurs
                map.eachLayer(layer => {
                    if (layer instanceof L.Marker) {
                        map.removeLayer(layer);
                    }
                });

                historyDiv.innerHTML = "<h3>📜 Historique des résultats</h3>";

                data.forEach(station => {
                    if (!aqiFilter.value || station.aqi <= aqiFilter.value) {
                        let iconColor = station.aqi <= 50 ? 'green' : station.aqi <= 100 ? 'yellow' : 'red';
                        let icon = L.icon({
                            iconUrl: `icons/${iconColor}.png`,
                            iconSize: [25, 25]
                        });

                        L.marker([station.lat, station.lon], { icon: icon })
                            .addTo(map)
                            .bindPopup(`<b>${station.city}</b><br>Qualité de l'air: ${station.aqi}`);

                        historyDiv.innerHTML += `<p>📍 <b>${station.city}</b>: AQI ${station.aqi}</p>`;
                    }
                });
            })
            .catch(error => {
                loader.classList.add("d-none"); // Cacher le loader en cas d'erreur
                console.error("Erreur lors de la récupération des données", error);
            });
    });
});


