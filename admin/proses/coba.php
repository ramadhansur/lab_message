<?php 
    $data = [
        'api_key' => 'b2d95af932eedb4de92b3496f338aa5f97b36ae0',
        'sender'  => '6289658591090',
        'number'  => '081239797630',
        'message' => 'the message'
    ];
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://wacnk.sctech.my.id/app/api/send-message",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($data))
    );
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
?>