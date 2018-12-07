<?php

require "vendor/autoload.php";

$access_token = 'OT5CR0YWH4DUiCp3duCWPArMVPQJkebSmBzhptk6y+juD0wG1AqDTDwda7kdVsaxkdZvXgF+vnb3UakBpc1pU1tgS2GqPD5nQl0n3uZo53/Ll2TY2b3vvE5As/B3YEOnQbRmpV3c9oj2OxoaTvEgPAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '41876669dc9e269ce3b2c5e26bbdf5da';

$pushID = 'Uac0a8ff6cf95a9475a45bffc13d1814f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo "test";
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

?>







