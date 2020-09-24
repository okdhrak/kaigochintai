<?php
/*
 * kaigochintai.com Application
 * 
 * service/home/grouphome.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');
include_once(ROOT_DIR . '/libs/Search.Class.php');

//物件データの取得
$articles = $searchObj->getArticles();

$smarty->assign(array(
	'pageTitle' => 'グループホーム',
	'keyword' => '介護賃貸,介護施設,グループホーム,宿泊,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。「グループホーム」は小さな老人ホーム。高齢者に入浴、排泄、食事等の介護その他日常生活上の世話及び機能訓練を行い、精神的に安定した共同生活を送るために必要な支援を目的とする介護施設です。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));
$smarty->assign('articles', $articles['article']);

$smarty->display('service/home/grouphome.tpl');
