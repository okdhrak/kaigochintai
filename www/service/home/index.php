<?php
/*
 * kaigochintai.com Application
 * 
 * service/home/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '介護施設の種類',
	'keyword' => '介護賃貸,介護施設,デイサービス,ショートステイ,グループホーム,サービス付き高齢者向け住宅,有料老人ホーム',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。用途や土地の規模により、様々な介護施設のご提案が可能です。また同じ種類の施設においても、収容人数や利用目的により多彩なバリエーションがあり、オーナー様の希望に沿ったご提案が可能です。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/home/index.tpl');
