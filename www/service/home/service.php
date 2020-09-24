<?php
/*
 * kaigochintai.com Application
 * 
 * service/home/service.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'サービス付き高齢者向け住宅',
	'keyword' => '介護賃貸,介護施設,サービス付き高齢者向け住宅,安否確認,生活相談,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。「サービス付き高齢者向け住宅」は高齢者に優しい賃貸住宅。住宅の設計や構造に関する基準、入居者へのサービスに関する基準、契約内容に関する基準の3つの基準のそれぞれ一定の要件を満たし、都道府県に登録された住宅施設です。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/home/service.tpl');
