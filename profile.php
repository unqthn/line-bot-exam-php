<?php


$access_token = 'qnAaObE47U5GgRKubVMqGv8+6wwIXbtR+E/E/a7MfU1IfAFapiGrnwS5X1Zb5WmoX6xEuKy/Hmv1k951ACcZHXqNA4H7I8l38dRlqEzN8SkMN3QtqcxgpTKfJ9WcR4MvKf79yQavuyd7Ran8/V69SwdB04t89/1O/w1cDnyilFU=';

$userId = 'U8f9334dcb958b847a57234370e7c6c24';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

