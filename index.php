<?php

$getApiKey =  "AIzaSyDifdFa8xs3JjgdwkhCr_zC4RKLZuGzW2M";
$url = 'https://www.googleapis.com/webfonts/v1/webfonts?key='.$getApiKey;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$response = $response;


echo "<pre>";
var_dump($response);
echo "</pre>";
