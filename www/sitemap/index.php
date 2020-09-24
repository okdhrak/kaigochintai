<?php
/*
 * kaigochintai.com Application
 * 
 * sitemap/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'サイトマップ',
	'keyword' => '介護賃貸,介護物件ナビ,サイトマップ,S-FIT,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。介護賃貸WEBサイトのサイトマップ。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));

$smarty->display('sitemap/index.tpl');
