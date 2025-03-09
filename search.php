<?php
header('Content-Type: application/json');
$apiKey = "61783b927572d6db7b87976a5a6e02708fa70997"; // Remplacez par votre clé API World Air Quality
$city = isset($_GET['city']) ? urlencode($_GET['city']) : 'France';
$apiUrl = "https://api.waqi.info/search/?token=$apiKey&keyword=$city";
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

$stations = [];
foreach ($data['data'] as $station) {
    $stations[] = [
        'city' => $station['station']['name'],
        'lat' => $station['station']['geo'][0],
        'lon' => $station['station']['geo'][1],
        'aqi' => $station['aqi']
    ];
}

echo json_encode($stations);
?>



