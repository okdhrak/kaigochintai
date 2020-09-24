<?php
/*
 * kaigochintai.com Application
 * 
 * service/home/commute.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');
include_once(ROOT_DIR . '/libs/Search.Class.php');

//物件データの取得
$articles = $searchObj->getArticles();

$smarty->assign(array(
	'pageTitle' => 'デイサービス',
	'keyword' => '介護賃貸,介護施設,デイサービス,デイケア,小規模,通所,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。「デイサービス」は通所系サービスと呼ばれており、食事や入浴、レクリエーションといったサービスの提供を日帰りで受け自宅へ帰ります。医療機関の提供するリハビリサービス「デイケア」もこちらの施設に含まれます。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));
$smarty->assign('articles', $articles['article']);

$smarty->display('service/home/commute.tpl');
