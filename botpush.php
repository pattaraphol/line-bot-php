<?php



require "vendor/autoload.php";

$access_token = 'TK9DKNfFOzXukSG6mQJjuvacJZLOWSprgZLBk0vyNk1QuQosKJfzQ/mZTfSCmcXJZXmuP+nmn0+kyNnjOOoEl1fZgh3cXTfkBKweSRXbr9YNbVysFNtdHlxnH3x46fnc2imDyB88z/cnDXzoMbBFCQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fdf6b7fe2d792ee66bd9f1ee09167340';

$pushID = 'U8afdfb3549c8494af2c22be5c17c8fe2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







