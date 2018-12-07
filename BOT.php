<?php // callback.php
require_once('./vendor/autoload.php');
#Namespace
use \LINE\LINEBot\HttPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\TextMessageBuilder;
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$channel_token = 'OT5CR0YWH4DUiCp3duCWPArMVPQJkebSmBzhptk6y+juD0wG1AqDTDwda7kdVsaxkdZvXgF+vnb3UakBpc1pU1tgS2GqPD5nQl0n3uZo53/Ll2TY2b3vvE5As/B3YEOnQbRmpV3c9oj2OxoaTvEgPAdB04t89/1O/w1cDnyilFU=';
$channel_secret = '41876669dc9e269ce3b2c5e26bbdf5da';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
  foreach ($events['events'] as $event) {
    if($event['type']=='message'){
      switch($event['message']['type']){
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
?>
