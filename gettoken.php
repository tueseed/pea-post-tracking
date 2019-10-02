<?php
    $headers = [
        'Authorization: Token '. 'O:NUEtWeHzQ$Y7H-H/TLQvO3KMLzYpYPTKOtLJaZJT:N+L^HTA6A7S3V:HASGxOdXZW|CnCjK:L0HqWACWQKINW:LeV/WlCsK8',
        'Content-Type: application/json'
    ];  
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($content) );
    curl_setopt( $ch, CURLOPT_POST, true );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec( $ch );
    curl_close($ch);
    
    echo json_decode($result, true); 
?>