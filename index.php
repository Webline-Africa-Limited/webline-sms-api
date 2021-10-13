<?php
$senderid = 'Webline';
$phone = '255753716279';
$message = 'Hogera Utajibiwa kupitia mawasilian';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://bulksms.webline.co.tz/api/v3/sms/send?recipient='. $phone .'&sender_id='. $senderid .'&message='.urlencode($message).'', 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer yourweblinetoken'
  ),
));

$response = curl_exec($curl);
echo $response;
