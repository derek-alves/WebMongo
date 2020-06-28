<?php

$datas = array();

foreach ($_POST["column"] as $key => $value) {
    //echo $value . " => " . $_POST["data"][$key] . "</br>";
    $datas = $datas + array($value => $_POST["data"][$key]);
}


$aJson = array( 
    "user_name" => $_POST["username"],
    "dados" => $datas
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($aJson),
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
