<?php
/*
 * kaigochintai.com Application
 * 
 * service/home/home.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '有料老人ホーム',
	'keyword' => '介護賃貸,介護施設,有料老人ホーム,健康型,住宅型,介護型,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。「有料老人ホーム」は生活サービスを提供する施設。生活支援と食事サービスを提供することを目的とした施設で、介護サービスについては各々の類型によって提供形式が異なります。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/home/home.tpl');
