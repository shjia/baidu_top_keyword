<?php
$url = 'http://top.baidu.com/buzz?b=1';
$content = file_get_contents($url);
preg_match_all('/<td\sclass="keyword">\s+(<a\s.*href.*>.*<\/a>)\s+.*<\/td>/isU', $content, $match);
#print_r($match);
foreach($match[1] as $k => $v){
	$v = mb_convert_encoding($v, 'UTF-8', 'GBK');
	echo strip_tags($v);
	echo "\n";
}
