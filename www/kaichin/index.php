<?php
/*
 * kaigochintai.com Application
 * 
 * kaichin/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '介護賃貸とは',
	'keyword' => '介護賃貸,介護施設,一括借り上げ,アパート,マンション,サブリース,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。少子高齢化に伴い、若者向けのアパート・マンションの空室が増える一方で、高齢者向け介護施設の不足が進んでいます。介護賃貸は、介護事業者様と土地をお持ちのオーナー様、双方の希望を叶える新しい不動産活用のかたちです。'
));
$smarty->assign('menus', $baseParam->getMenu('Kaichin'));

$smarty->display('kaichin/index.tpl');
