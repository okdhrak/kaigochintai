<?php
/*
 * kaigochintai.com Application
 * 
 * blog/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'ブログ',
	'keyword' => '介護賃貸,ブログ,介物くん,介護賃貸,不動産活用,S-FIT,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。エスフィットシニアチームがお届けする、介護賃貸の介物くんブログ。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));

$smarty->display('blog/index.tpl');
