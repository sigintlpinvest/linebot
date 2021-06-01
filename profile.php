<?php


$access_token = 'q/+IeuRV/AripP3j5yNeboiQQyQMgBq+1ZHSf6CCdnrvcmv37R8QNxJ2WxRstlbapfw0Vv+G4J308G0FvZJlAdfCyMNIZ9c/KEvOusLS1LYiU7TGnQT2dYgTZQNkeDt2oRm3Y9CtxVXvpbS1Pa+YKwdB04t89/1O/w1cDnyilFU=';

$userId = '1656053933';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

