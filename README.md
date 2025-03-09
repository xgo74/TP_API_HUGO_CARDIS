# Qualité de l'Air en Temps Réel

## Description
Ce projet permet d'afficher la qualité de l'air en temps réel à partir de l'API World Air Quality Index (WAQI).
Il utilise **PHP**, **JavaScript**, **Leaflet** (pour la carte), et **Bootstrap** pour une interface moderne.

## Prérequis
Avant d'installer le projet, assurez-vous d'avoir :
- Un serveur web (Apache, Nginx, ou avec PHP intégré)
- PHP 7.4 ou plus
- Une connexion Internet

## Installation

1. **Cloner le dépôt Git**
   
   git clone https://github.com/xgo74/TP_API_HUGO_CARDIS.git
   cd TP_API_HUGO_CARDIS


2. **Configuration de la Clé API**
   - Rendez-vous sur [World Air Quality API](https://aqicn.org/data-platform/token/#/)
   - Générez une clé API
   - Remplacez **VOTRE_CLE_API** dans `search.php` par votre clé obtenue.

3. **Lancer le projet**
   - Placez les fichiers dans le serveur web 
   - Accédez à `http://localhost/tp_api_web/index.php`

## Structure du projet

/master
│── index.php         # Page principale
│── search.php        # Script pour récupérer les données API
│── script.js         # Gestion de la carte et des interactions utilisateur
│── styles.css        # Feuille de style pour l'apparence
│── README.md         # Documentation


## Technologies utilisées
- **PHP** : pour la communication avec l'API
- **JavaScript (Fetch API)** : pour récupérer et afficher les données dynamiquement
- **Leaflet.js** : pour la carte interactive
- **Bootstrap** : pour le design

## Auteur(s)
- CARDIS Hugo



