<?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://trackwebhook.thailandpost.co.th/post/api/v1/authenticate/token",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Token O:NUEtWeHzQ$Y7H-H/TLQvO3KMLzYpYPTKOtLJaZJT:N+L^HTA6A7S3V:HASGxOdXZW|CnCjK:L0HqWACWQKINW:LeV/WlCsK8",
        "Content-Type: application/json",
        "Postman-Token: 4942afaf-c40b-4075-b80d-8e02725aa0a9",
        "cache-control: no-cache"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
?>