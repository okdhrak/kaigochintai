<?php
/*
 * kaigochintai.com Application
 * 
 * company/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '会社案内',
	'keyword' => '介護賃貸,会社概要,不動産,賃貸,S-FIT,sfit,エスフィット,紫原',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。エスフィットの会社案内です。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));

$smarty->display('company/index.tpl');
