<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $url = "http://www.omdbapi.com/?i=tt1375666&apikey=bd16ebb8";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    } else {
        echo $response;
    }
    curl_close($ch);
?>
