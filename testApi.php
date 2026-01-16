<?php
$apiKey = "AIzaSyArxLswISKlsXuLpvHiCnpXKWa9oAV7TUM";
$playlistId = "PLn8IsWI_eoZkUU_xUC3rJZuutrVFJiTYA";

$testUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=3&playlistId=$playlistId&key=$apiKey";

echo "Testing: $testUrl<br><br>";

$response = file_get_contents($testUrl);
$data = json_decode($response, true);

echo "<pre>";
print_r($data);
echo "</pre>";

if(isset($data['error'])) {
    echo "ERROR: " . $data['error']['message'];
    echo "<br>ERROR CODE: " . $data['error']['code'];
}
?>