<?php // callback.php
require "vendor/autoload.php";
#Namespace
use \LINE\LINEBot\HttPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder;
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$channel_token = 'UOeO9ZUwN4dTOpFqTnduO6vtbNy2+4+dpPbggF6b/fXpN5KQJunVpHLbbR8kSzOlKvbceXmLJREc2uSSkRFmvR2MfEkZnlG/vy4vxg9ptFjK2+NpPcKH4RkGV1TyMdHV1+gCjrsrs5CwGNjgwQuxKgdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'cffec1626cfe1853d2a472d2e6b83ce9';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
  foreach ($events['events'] as $event) {
    if($event['type']=='message'){
      switch($event['type']=='message'){
          case'text':
          $replyToken = $event['replyToken'];
          $respMessage ='Hello, your message is '.$event['message']['text'];
          
          $httpClient=newCurlHttpClient($channel_token);
          $bot=newLINEBot($HttpClient, array('channelSelect'=> $channel_secret));
          $textMessageBuilder = newTextMessageBuilder($respMesage);
          $response=$bot->replyMessage($replyToken, $textMessageBuilder);
     Breke;
      }
    }
  }
}
        
echo "OK";
