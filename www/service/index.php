<?php
/*
 * kaigochintai.com Application
 * 
 * service/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '土地活用のご案内',
	'keyword' => '介護賃貸,介護施設,土地活用,デイサービス,ショートステイ,グループホーム,サービス付き高齢者向け住宅,有料老人ホーム',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。様々な種類の介護施設から、土地の大きさエリアに最適な活用方法をご提案いたします。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/index.tpl');
