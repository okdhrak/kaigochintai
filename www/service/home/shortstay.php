<?php
/*
 * kaigochintai.com Application
 * 
 * service/home/shortstay.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'ショートステイ',
	'keyword' => '介護賃貸,介護施設,ショートステイ,短期宿泊,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。「ショートステイ」は短期の間入所し、介護サービスの提供を受けます。老人福祉法における老人短期入所事業(概ね30日以内)にことをいい、要介護の高齢者を宿泊させ、生活支援及び機能訓練を行うことを目的とする施設です。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/home/shortstay.tpl');
