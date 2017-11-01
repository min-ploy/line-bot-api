<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '01cc098803ce725c53ea0c38acddc2e9';
$access_token  = 'OGQmM70UyBouqcPvHkkMROOSSMw+PUmFHmOs782sOozvah49r85WnwCPL1D075fiTv8NtDsPUaE2mzUVQYuwtO31WMCgk7VS8U32JGF8wIz99zm/nC9znoBfnrIu/jt14s6VHFbsLsJWHElUaFtsQgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
