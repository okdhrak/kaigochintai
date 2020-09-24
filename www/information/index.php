<?php
/*
 * kaigochintai.com Application
 * 
 * information/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'お知らせ',
	'keyword' => '介護賃貸,内覧,見学,セミナー,不動産活用,S-FIT,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。セミナーや内覧見学会など、介護賃貸の最新のお知らせは情報を公開しています。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));

$smarty->display('information/index.tpl');
