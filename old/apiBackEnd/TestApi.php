<?php
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    $json_string = 
    'https://br1.api.riotgames.com/tft/league/v1/challenger?api_key=RGAPI-63eca97a-52cf-43f4-ac2d-845592acfdba';
    $jsondata = file_get_contents($json_string);
    $obj = json_decode($jsondata,true);
echo json_encode($obj);
