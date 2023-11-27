<?php
// getData.php

// API bilgileri (size verilen bilgilerle değiştirin)
$apiUrl = "https://api.baubuddy.de/dev/index.php/v1/tasks/select";
$username = "365";
$password = "1";

// Kimlik doğrulama
$headers = [
    "Authorization: Basic " . base64_encode("API_Username:API_Password"),
    "Content-Type: application/json",
];

// cURL ile API'ye istek yapma
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $apiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
]);
$response = curl_exec($curl);
curl_close($curl);

// Veriyi JSON olarak döndürme
header('Content-Type: application/json');
echo $response;
?>
