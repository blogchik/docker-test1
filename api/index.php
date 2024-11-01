<?php

// JSON Headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// RESPONSE CODE
http_response_code(200);

// ARRAY for JSON
$array = array(
    'error'=>false,
    'message'=>"Successfull!"
);
// ENCODE ARRAY to JSON
$json = json_encode($array);

// OUT
print_r ($json);

?>