<?php
/*
 * kaigochintai.com Application
 * 
 * service/from150.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');
include_once(ROOT_DIR . '/libs/Search.Class.php');

//物件データの取得
$articles = $searchObj->getArticles();

$smarty->assign(array(
	'pageTitle' => '150坪からの介護賃貸',
	'keyword' => '介護賃貸,介護施設,土地活用,グループホーム,ショートステイ,150坪からの土地活用',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。150～250坪の大きさの土地をお持ちの方へ、最適な介護施設をご提案いたします。 '
));
$smarty->assign('menus', $baseParam->getMenu('Service'));
$smarty->assign('articles', $articles['article']);

$smarty->display('service/from150.tpl');
