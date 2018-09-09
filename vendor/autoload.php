<?php
require "vendor/autoload.php";
$access_token = 'qnAaObE47U5GgRKubVMqGv8+6wwIXbtR+E/E/a7MfU1IfAFapiGrnwS5X1Zb5WmoX6xEuKy/Hmv1k951ACcZHXqNA4H7I8l38dRlqEzN8SkMN3QtqcxgpTKfJ9WcR4MvKf79yQavuyd7Ran8/V69SwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '48ce6a9fce99565dad0545c7df165ad2';
$idPush = 'U8f9334dcb958b847a57234370e7c6c24'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
