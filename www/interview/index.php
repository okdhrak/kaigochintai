<?php
/*
 * kaigochintai.com Application
 * 
 * interview/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'オーナーインタビュー',
	'keyword' => '介護賃貸,土地活用,不動産活用,オーナー,インタビュー,S-FIT,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。土地の資産運用や管理のほか、収益向上に悩みをお持ちの土地オーナー様の解決策として「介護賃貸」は最適です。オーナー様の声を紹介いたします。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));

$smarty->display('interview/index.tpl');
