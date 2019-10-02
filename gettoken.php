<?php
    $token = 'OeB@M?PhFkFVPnG8M4T;L^HMQEG=RWX^MLMaQNRZXrFzW3KjN@Y$VCOoAsOYOSB6PqJ:C~E$W|J:PzDoW;K9E@ZL4FXG6VUFRK:';
    $url = 'https://trackwebhook.thailandpost.co.th/post/api/v1/authenticate/token';
    $headers = [
        'Authorization: Token '. $token,
        'Content-Type: application/json'
    ];
     
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    // curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($content) );
    curl_setopt( $ch, CURLOPT_POST, true );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
    $result = curl_exec( $ch );
    curl_close($ch);
       
    echo $result;
?>