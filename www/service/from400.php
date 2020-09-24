<?php
/*
 * kaigochintai.com Application
 * 
 * service/from400.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '400坪からの介護賃貸',
	'keyword' => '介護賃貸,介護施設,土地活用,サービス付き高齢者向け住宅,有料老人ホーム,デイサービス,400坪からの土地活用',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。400坪以上の土地をお持ちの方へ、サービス付き高齢者向け住宅、有料老人ホームといった大規模介護施設のご提案が可能です。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/from400.tpl');
