<?php
require_once('ads.php');
require_once('simplepie.inc');

# Title
$globalTitle = $title . ' &raquo; My Rune Log';
# Description
$globalDescription = $description . '';
# Keywords
$globalKeywords = $keywords . '';
# Page
$page = str_replace('.php', '', $link);
# Domain
$domain = 'http://127.0.0.1/Projects/In-Progress/MyRuneLog/';

# RSS Fetching
$cache = '/home/content/52/7415552/html/cache/';
$duration = 1800;
//$runescapeRSS = new SimplePie('http://services.runescape.com/m=news/latest_news.rss', $cache, $duration);

function fullURL() {
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
}

function randomHeader() {
	$random = rand(0, 4);
	$prepend = ' class="';

	if($random == 0) {
	}
	if($random == 1) {
		echo $prepend . 'barbarian"';
	}
	if($random == 2) {
		echo $prepend . 'dungeon"';
	}
	if($random == 3) {
		echo $prepend . 'forest"';
	}
	if($random == 4) {
		echo $prepend . 'pits"';
	}
}

function strleft($s1, $s2) {
	return substr($s1, 0, strpos($s1, $s2));
}
?>