<?php
/*
 * kaigochintai.com Application
 * 
 * process/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '施工会社様へ',
	'keyword' => '介護賃貸,土地活用,不動産活用,土地オーナー,工務店,設計事務所,S-FIT,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。土地の資産運用や管理のほか、収益向上に悩みをお持ちの土地オーナー様の解決策として「介護賃貸」は最適です。お近くに、不動産活用等でお悩みのオーナー様がいらっしゃいましたら、ぜひご紹介ください。'
));
$smarty->assign('menus', $baseParam->getMenu('Process'));

$smarty->display('process/traders.tpl');
