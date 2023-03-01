<?php


$endpoint = "https://api.openweathermap.org/data/2.5/weather?lat=41.9965&lon=21.4314&appid=47870745f4f5557ad3a379eb67b1abfc";

$endpoint = "api.openweathermap.org/data/2.5/forecast/daily?lat={lat}&lon={lon}&cnt={cnt}&appid={API key}";

$kljuc = '47870745f4f5557ad3a379eb67b1abfc';

$url = file_get_contents($endpoint);


$decoding = json_decode($url);

echo '<pre>';
print_r($decoding);
echo '</pre>';