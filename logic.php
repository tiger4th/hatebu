<?php
ini_set('display_errors', 0);
define("PATH", "../../cron/hatebu/");

$ua=$_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)) {
	$device = 'sp';
} elseif ((strpos($ua,'iPad')!==false)) {
	$device = 'tb';
} else {
	$device = 'pc';
}

$list = array(
    // 'topics',
    'hotentry',
    'general',
    'social',
    'economics',
    'life',
    'entertainment',
    'knowledge',
    'it',
    'game',
    'fun',
    'amazon',
);

$name = array(
    // '速報',
    '総合',
    '一般',
    '社会',
    '政経',
    '生活・人生',
    '芸能',
    '科学',
    'コンピュータ',
    'ゲーム・アニメ',
    'おもしろ',
    'アマゾン',
);

$long_name = array(
    // '速報',
    '総合',
    '一般',
    '社会',
    '政治・経済',
    '生活・人生',
    'スポーツ・芸能・音楽',
    '科学・学問',
    'コンピュータ・ＩＴ',
    'ゲーム・アニメ',
    'おもしろ',
    'Ａｍａｚｏｎ',
);

$day = array('日', '月', '火', '水', '木', '金', '土');

foreach ($list as $category) {
	$xml = file_get_contents(PATH.$category.'.xml');
	$xml = str_replace('dc:date', 'date', $xml);
	$xml = str_replace('hatena:bookmarkcount', 'bookmarkcount', $xml);
	$feed = simplexml_load_string($xml);
	
	if ($category === 'topics') {
		// for ($i = 0; $i < 15; $i++) {
		// 	$title = $feed->item[$i]->title;
		// 	$title = explode("（", $title);
		// 	$title = $title[0];
			
		// 	$description = $feed->item[$i]->description;
		// 	if (strstr($description,"。") != false) {
		// 		$description = explode("。", $description);
		// 		array_pop($description);
		// 		$description = implode("。", $description) . "。";
		// 	}
			
		// 	$text[$category][$i]['title'] = mb_convert_kana($title, "A", "UTF-8");
		// 	$text[$category][$i]['description'] = mb_convert_kana($description, "A", "UTF-8");
			
		// 	$text[$category][$i]['link'] = $feed->item[$i]->link;
		// 	$text[$category][$i]['bookmarkcount'] = mb_convert_kana($feed->item[$i]->bookmarkcount, "N", "UTF-8");
			
		// 	$date = substr($feed->item[$i]->date, 5, 11);
		// 	$date = str_replace('-', '月', $date);
		// 	$date = str_replace('T', '日 ',$date);
		// 	$date = str_replace(':', '時',$date)."分";
		// 	$text[$category][$i]['date'] = mb_convert_kana($date, "N", "UTF-8");
		// }
	} elseif ($category === 'amazon') {
		for ($i = 0; $i < 20; $i++) {
			$title = $feed->item[$i]->title;
			$title = str_replace('Amazon.co.jp： ', '', $title);
			$text[$category][$i]['title'] = mb_convert_kana($title, "A", "UTF-8");
			
			$text[$category][$i]['link'] = $feed->item[$i]->link."?tag=tiger4th-22";
			$text[$category][$i]['bookmarkcount'] = mb_convert_kana($feed->item[$i]->bookmarkcount, "N", "UTF-8");
			
			$date = substr($feed->item[$i]->date, 5, 11);
			$date = str_replace('-', '月', $date);
			$date = str_replace('T', '日 ',$date);
			$date = str_replace(':', '時',$date)."分";
			$text[$category][$i]['date'] = mb_convert_kana($date, "N", "UTF-8");
		}
	} else {
		for ($i = 0; $i < 15; $i++) {
			$title = $feed->item[$i]->title;
			
			$description = $feed->item[$i]->description;
			
			$text[$category][$i]['title'] = mb_convert_kana($title, "A", "UTF-8");
			$text[$category][$i]['description'] = mb_convert_kana($description, "A", "UTF-8");
			
			$text[$category][$i]['link'] = $feed->item[$i]->link;
			$text[$category][$i]['bookmarkcount'] = mb_convert_kana($feed->item[$i]->bookmarkcount, "N", "UTF-8");
			
			$date = substr($feed->item[$i]->date, 5, 11);
			$date = str_replace('-', '月', $date);
			$date = str_replace('T', '日 ',$date);
			$date = str_replace(':', '時',$date)."分";
			$text[$category][$i]['date'] = mb_convert_kana($date, "N", "UTF-8");
		}
	}
}

$wiki = 'https://ja.wikipedia.org/wiki/' . date("n月j日");
?> 