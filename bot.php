<?php
$type = 'sendmsg';
if(isset($_REQUEST['type'])&&$_REQUEST['type']){
    $type = $_REQUEST['type'];
}


if($type=='sendmsg'){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    //API Url
    $url = 'https://app.botmother.com/api/bot/action/0ar_Kw9iy/AC5BSCQDsCOQdWDxGB9BYDNBFBWDrBJCBDCyC5DLC6B2BoBjuCZBWDduBkC4CFC0';
     
    //Initiate cURL.
    $ch = curl_init($url);
     
    //The JSON data.
    $jsonData = array(
        'platform' => 'tg',
        'users' => array('264351047'),
    );
     
    //Encode the array into JSON.
    $jsonDataEncoded = json_encode($jsonData);
     
    //Tell cURL that we want to send a POST request.
    curl_setopt($ch, CURLOPT_POST, 1);
     
    //Attach our encoded JSON string to the POST fields.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
     
    //Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
     
    //Execute the request
    $result = curl_exec($ch);
    echo $result;
}















