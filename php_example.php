<?php
$senderid = 'Webline';
$phone = '+255734666100';
$message = 'Hogera Utajibiwa kupitia mawasilian';
$api_username = 'your bearer token';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sms.webline.africa/api/v3/sms/send?recipient='. $phone .'&sender_id='. $senderid .'&message='.urlencode($message).'', 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer $api_username"
  ),
));

$response = curl_exec($curl);
echo $response;
